<link rel="stylesheet" href="../../../public/css/index.css">
<a href="?action=revenue&controller=statistic"><button class="btn-statistic-total">Doanh thu</button></a>
<a href="?action=sellproduct&controller=statistic"><button class="btn-statistic-product">Sản phẩm</button></a>
<a href="?action=bestselling&controller=statistic"><button class="btn-statistic-bestsell">Sản phẩm bán chạy</button></a>
<div class="form-chart" id="form-chart-bestsell">
    <form action="?action=filter2&controller=statistic" method="post">
        Từ ngày <input class="form-chart-input" id="chart-bestsell-datestart" type="date" name="datestart" value="<?php if (isset($_POST['datestart'])) echo $_POST['datestart'] ?>">
        đến ngày <input class="form-chart-input" id="chart-bestsell-dateend" type="date" name="dateend" value="<?php if (isset($_POST['dateend'])) echo $_POST['dateend'] ?>">
        <button class="form-chart-check" type="submit">Kiểm tra</button>
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
    </form>
</div>
<?php
$arr = [];
foreach ($result as $each) {
    $ma_san_pham = $each['masanpham'];
    if (empty($arr[$ma_san_pham])) {
        $arr[$ma_san_pham] = [
            'name' => $each['tensanpham'],
            'y' => (int) $each['sosanpham'],
            'drilldown' => $each['masanpham']
        ];
    } else {
        $arr[$ma_san_pham]['y'] += $each['sosanpham'];
    }
}
$arr2 = [];
if (isset($_GET['action']) && $_GET['action'] == 'filter2') {
    $datestart = $_POST['datestart'];
    $dateend = $_POST['dateend'];
    $datediff = strtotime($dateend) - strtotime($datestart);
    $datediff = floor($datediff / (60 * 60 * 24));
    foreach ($arr as $ma_san_pham => $each) {
        $arr2[$ma_san_pham] = [
            'name' => $each['name'],
            'id' => (string) $ma_san_pham,
        ];
        $arr2[$ma_san_pham]['data'] = [];
        for ($i = 0; $i < $datediff + 1; $i++) {
            $key = date("Y-m-d", strtotime($datestart . ' + ' . $i . 'day'));
            $arr2[$ma_san_pham]['data'][$key] = [
                $key,
                0
            ];
        }
    }
} else {
    $maxdate = 7;
    $today = date('d');
    if ($today < $maxdate) {
        $date_last_month = $maxdate - $today;
        $last_month_year = date('Y-m', strtotime("-1 month"));
        $last_month_date = date('Y-m-d', strtotime("-1 month"));
        $max_date_last_month = (new DateTime($last_month_date))->format('t');
        $start_date_last_month = $max_date_last_month - $date_last_month;
        $start_date_this_month = 1;
    } else {
        $start_date_this_month = $today - $maxdate;
    }

    foreach ($arr as $ma_san_pham => $each) {
        $arr2[$ma_san_pham] = [
            'name' => $each['name'],
            'id' => (string) $ma_san_pham,
        ];
        $arr2[$ma_san_pham]['data'] = [];
        if ($today < $maxdate) {
            for ($i = $start_date_last_month; $i < $max_date_last_month; $i++) {
                $key = $last_month_year . '-' . $i;
                $arr2[$ma_san_pham]['data'][$key] = [
                    $key,
                    0
                ];
            }
        } else {
            $this_month_year = date('Y-m');
            for ($i = $start_date_this_month; $i < $today; $i++) {
                $key = $this_month_year . '-' . $i;
                $arr2[$ma_san_pham]['data'][$key] = [
                    $key,
                    0
                ];
            }
        }
    }
}

foreach ($result as $each) {
    $ma_san_pham = $each['masanpham'];
    $key = $each['ngay'];
    $arr2[$ma_san_pham]['data'][$key] = [
        $key,
        (int) $each['sosanpham']
    ];
}

$arrX = array_values($arr);
for ($i = 0; $i < count($arrX) - 1; $i++) {
    for ($j = $i + 1; $j < count($arrX); $j++) {
        if ($arrX[$j]['y'] > $arrX[$i]['y']) {
            $tmp = $arrX[$i];
            $arrX[$i] = $arrX[$j];
            $arrX[$j] = $tmp;
        }
    }
}
$arrY = [];
$tmp = array_values($arr2);
foreach ($tmp as $each) {
    $each['data'] = array_values($each['data']);
    array_push($arrY, $each);
}
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script type="text/javascript">
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            align: 'center',
            text: 'Thống kê sản phẩm bán chạy'
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Tổng số sản phẩm'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> of total<br/>'
        },

        series: [{
            name: 'Sản phẩm',
            colorByPoint: true,
            data: <?php echo json_encode($arrX) ?>
        }],

        drilldown: {
            breadcrumbs: {
                position: {
                    align: 'right'
                }
            },
            series: <?php echo json_encode($arrY) ?>
        }
    });
</script>