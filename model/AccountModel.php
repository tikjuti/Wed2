<?php

if ($action == "delete" || $action == "update" || $action == "store")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

if (isset($_SESSION['arrPQ'])) {
    $arrPQ = $_SESSION['arrPQ'];
    foreach ($arrPQ as $key => $value) {
        $tmp = preg_split("/\./", $key);
        if ($tmp[0] == 'Tài khoản') {
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
        $sql = "select * from taikhoan join phanquyen on taikhoan.MaPQ = phanquyen.MaPQ where taikhoan.IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'create':
        $sql = "select * from phanquyen where phanquyen.IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'store':
        $sql = "insert into taikhoan(Username, Password, MaPQ, IsDeleted) values ('$username', '$password', '$maquyen', '0')";
        (new Connnect())->excute($sql);
        break;
    case 'edit':
        $sql = "select * from taikhoan join phanquyen on taikhoan.MaPQ = phanquyen.MaPQ where taikhoan.MaTK ='$ma'";
        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);
        $sql1 = "select * from phanquyen where phanquyen.IsDeleted=0";
        $result1 = (new Connnect())->select($sql1);
        break;
    case 'update':
        $sql = "update taikhoan
            set 
            Username = '$username',
            Password = '$password',
            MaPQ = '$maquyen'
            where MaTK ='$matk'";
        (new Connnect())->excute($sql);
        break;
    case 'delete':
        $sql = "update taikhoan set IsDeleted = 1
            where MaTK ='$ma'";
        (new Connnect())->excute($sql);
        break;
}
