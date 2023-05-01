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
                $tmp2 = preg_split("/\./", $value2);
                if ($tmp2[0] == 'edit' && $tmp2[1]) {
                    $statusEdit = 1;
                } else
                    if ($tmp2[0]  == 'delete' && $tmp2[1]) {
                    $statusDelete = 1;
                } else
                    if ($tmp2[0]  == 'create' && $tmp2[1]) {
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
        $result2 = (new Connnect())->select($sql2);
        $result1 = (new Connnect())->select($sql1);
        foreach ($result1 as $each) {
            $ma_cn = $each['MaCN'];
            $ten_cn = $each['TenCN'] . "." . $each['Icon'];
            foreach ($result2 as $each2) {
                if ($each2['MaCN'] == $ma_cn) {
                    if (empty($arrPQ[$ten_cn]))
                        $arrPQ[$ten_cn] = [
                            'MaCN' => $ma_cn,
                            'HanhDong' => []
                        ];
                }
            }
            foreach ($result2 as $each2) {
                if ($each2['MaCN'] == $ma_cn) {
                    $hd = $each2['HanhDong'] . "." . $each2['Chon'];
                    array_push($arrPQ[$ten_cn]['HanhDong'], $hd);
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
        for ($i = 0; $i < count($arrMaCN); $i++) {
            $sql = "update ctquyencn
                set 
                   Chon='$arrData[$i]'
                where MaQuyen ='$MaQuyen' and MaCN = '$arrMaCN[$i]' and HanhDong = '$arrHD[$i]'";
            (new Connnect())->excute($sql);
        }
        break;
    case 'delete':
        $sql = "update phanquyen set IsDeleted = 1
            where MaPQ ='$ma'";
        (new Connnect())->excute($sql);
        break;
}
