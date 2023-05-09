<?php

if ($action == "delete" || $action == "update" || $action == "store")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

if (isset($_SESSION['arrPQ'])) {
    $arrPQ = $_SESSION['arrPQ'];
    foreach ($arrPQ as $key => $value) {
        $tmp = preg_split("/\./", $key);
        if ($tmp[0] == 'Phân quyền') {
            foreach ($value['HanhDong'] as $key2 => $value2) {
                if ($key2 == 'edit' && $value2) {
                    $statusEdit = 1;
                } else
                    if ($key2  == 'delete' && $value2) {
                    $statusDelete = 1;
                } else
                    if ($key2  == 'create' && $value2) {
                    $statusCreate = 1;
                }
            }
        }
    }
}

switch ($action) {
    case '':
        $sql = "select * from phanquyen where IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'store':
        $sql = "insert into phanquyen(Quyen, IsDeleted) values ('$Quyen', '0')";
        (new Connnect())->excute($sql);
        $sql1 = "select * from phanquyen where IsDeleted=0 and Quyen = '$Quyen'";
        $result = (new Connnect())->select($sql1);
        $each = mysqli_fetch_array($result);
        $maPQ = $each['MaPQ'];
        for ($i = 0; $i < count($arrMaCN); $i++) {
            $sql2 = "insert into ctquyencn(MaQuyen, MaCN, HanhDong, Url, Chon)
                values ($maPQ, '$arrMaCN[$i]', '$arrHD[$i]', 'abc', '$arrData[$i]')";
            (new Connnect())->excute($sql2);
        }
        break;
    case 'edit':
        $sql = "select * from phanquyen where MaPQ ='$ma'";
        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);
        $title = $each['Quyen'];
        $ma = $each['MaPQ'];
        $arrPQ = [];
        $sql1 = "SELECT * FROM danhmuccn";
        $sql2 = "SELECT * FROM ctquyencn WHERE MaQuyen = '$ma'";
        $sql3 = "SELECT * FROM ctquyencn WHERE MaQuyen = 1";
        $result = (new Connnect())->select($sql1);
        $result2 = (new Connnect())->select($sql2);
        $result3 = (new Connnect())->select($sql3);
        foreach ($result as $each) {
            $ma_cn = $each['MaCN'];
            $ten_cn = $each['TenCN'] . "." . $each['Icon'];
            foreach ($result3 as $each3) {
                if ($each3['MaCN'] == $ma_cn) {
                    if (empty($arrPQ[$ten_cn])) {
                        $arrPQ[$ten_cn] = [
                            'MaCN' => $ma_cn,
                            'HanhDong' => []
                        ];
                    }
                }
            }
            foreach ($result3 as $each3) {
                if ($each3['MaCN'] == $ma_cn) {
                    $arrPQ[$ten_cn]['HanhDong'][$each3['HanhDong']] = 0;
                }
            }
            foreach ($result3 as $each3) {
                foreach ($result2 as $each2) {
                    if ($each2['MaCN'] == $ma_cn) {
                        if ($each2['HanhDong'] == $each3['HanhDong']) {
                            $arrPQ[$ten_cn]['HanhDong'][$each3['HanhDong']] = $each2['Chon'];
                        }
                    }
                }
            }
        }
        break;
    case 'update':
        $sql = "update phanquyen
            set 
            Quyen = '$Quyen'
            where MaPQ ='$MaQuyen'";
        (new Connnect())->excute($sql);
        $sql1 = "select * from ctquyencn where MaQuyen = '$MaQuyen'";
        $result1 = (new Connnect())->select($sql1);
        for ($i = 0; $i < count($arrMaCN); $i++) {
            $flag = 0;
            foreach ($result1 as $each1) {
                if ($each1['MaCN'] == $arrMaCN[$i] && $each1['HanhDong'] == $arrHD[$i]) {
                    $sql = "update ctquyencn
                    set 
                    Chon='$arrData[$i]'
                    where MaQuyen ='$MaQuyen' and MaCN = '$arrMaCN[$i]' and HanhDong = '$arrHD[$i]'";
                    (new Connnect())->excute($sql);
                    $flag = 1;
                    break;
                } else $flag = 0;
            }
            if ($flag == 0) {
                $sql2 = "insert into ctquyencn(MaQuyen, MaCN, HanhDong, Url, Chon)
                values ($MaQuyen, '$arrMaCN[$i]', '$arrHD[$i]', 'abc', '$arrData[$i]')";
                (new Connnect())->excute($sql2);
            }
        }
        echo json_encode($arrMaCN);
        echo json_encode($arrHD);
        echo json_encode($arrData);
        break;
    case 'delete':
        $sql = "update phanquyen set IsDeleted = 1
            where MaPQ ='$ma'";
        (new Connnect())->excute($sql);
        break;
}
