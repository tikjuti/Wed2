<link rel="stylesheet" href="../../../public/css/index.css">
<a href="?action=revenue&controller=statistic"><button class="btn-statistic-total">Doanh thu</button></a>
<a href="?action=sellproduct&controller=statistic"><button class="btn-statistic-product">Sản phẩm</button></a>
<a href="?action=bestselling&controller=statistic"><button class="btn-statistic-bestsell">Sản phẩm bán chạy</button></a>
<div class="form-chart" id="form-chart-total">
    <form action="?action=filter&controller=statistic" method="post">
        Từ ngày <input class="form-chart-input" id="chart-total-datestart" type="date" name="datestart" value="<?php if (isset($_POST['datestart'])) echo $_POST['datestart'] ?>">
        đến ngày <input class="form-chart-input" id="chart-total-dateend" type="date" name="dateend" value="<?php if (isset($_POST['dateend'])) echo $_POST['dateend'] ?>">
        <button class="form-chart-check" type="submit">Kiểm tra</button>
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
    </form>
</div>
<!-- <script src="public/js/statistics.js"></script> -->
<?php
$arr = [];
if (isset($_GET['action']) && $_GET['action'] == 'filter') {
    $datestart = $_POST['datestart'];
    $dateend = $_POST['dateend'];
    $datediff = strtotime($dateend) - strtotime($datestart);
    $datediff = floor($datediff / (60 * 60 * 24));
    for ($i = 0; $i < $datediff + 1; $i++) {
        $key = date("Y-m-d", strtotime($datestart . ' + ' . $i . 'day'));
        $arr[$key] = 0;
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
        for ($i = $start_date_last_month; $i <= $max_date_last_month; $i++) {
            $key = $last_month_year . '-' . $i;
            $arr[$key] = 0;
        }
        $start_date_this_month = 1;
    } else {
        $start_date_this_month = $today - $maxdate;
    }
    $this_month_year = date('Y-m');
    for ($i = $start_date_this_month; $i <= $today; $i++) {
        $key = $this_month_year . '-' . $i;
        $arr[$key] = 0;
    }
}
foreach ($result as $each) {
    $arr[$each['ngay']] = (float) $each['doanhthu'];
}
$arrX = array_keys($arr);
$arrY = array_values($arr);
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
    Highcharts.chart('container', {

        title: {
            text: 'Thống kê doanh thu',
            align: 'center'
        },

        yAxis: {
            title: {
                text: 'Tổng tiền'
            }
        },

        xAxis: {
            categories: <?php echo json_encode($arrX) ?>
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                }
            }
        },

        series: [{
            name: 'Doanh thu',
            data: <?php echo json_encode($arrY) ?>
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });
</script>