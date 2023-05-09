<?php

if ($action == "delete" || $action == "update" || $action == "store")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

if (isset($_SESSION['arrPQ'])) {
    $arrPQ = $_SESSION['arrPQ'];
    foreach ($arrPQ as $key => $value) {
        $tmp = preg_split("/\./", $key);
        if ($tmp[0] == 'Nhà cung cấp') {
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
        $sql = "select * from nhacungcap where nhacungcap.IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'create':
        $sql = "select * from nhacungcap where nhacungcap.IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'store':
        $sql = "insert into nhacungcap(TenNCC, SDT, DiaChi, Email, IsDeleted) values ('$fullname', '$numberphone', '$address', '$email', '0')";
        (new Connnect())->excute($sql);
        break;
    case 'edit':
        $sql = "select * from nhacungcap where nhacungcap.MaNCC ='$ma'";
        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update nhacungcap
            set 
            TenNCC = '$fullname',
            SDT = '$numberphone',
            DiaChi = '$address',
            Email = '$email'
            where MaNCC ='$mancc'";
        (new Connnect())->excute($sql);
        break;
    case 'delete':
        $sql = "update nhacungcap set IsDeleted = 1
            where MaNCC ='$ma'";
        (new Connnect())->excute($sql);
        break;
}
