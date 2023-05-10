<?php

if ($action == "delete" || $action == "update" || $action == "store")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

if (isset($_SESSION['arrPQ'])) {
    $arrPQ = $_SESSION['arrPQ'];
    foreach ($arrPQ as $key => $value) {
        $tmp = preg_split("/\./", $key);
        if ($tmp[0] == 'Nhân viên') {
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
        $sql = "SELECT * FROM nhanvien 
        JOIN taikhoan ON nhanvien.matk = taikhoan.matk
        WHERE nhanvien.IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'create':
        $sql = "SELECT * FROM nhanvien WHERE nhanvien.IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'store':
        $sql = "INSERT INTO taikhoan(Username, Password, MaPQ, IsDeleted) VALUES ('$username', '$password', '3', '0')";
        $matknew = (new Connnect())->last_id($sql);
        $sql = "INSERT INTO nhanvien(TenNV, SDTNV, NgaySinh, EmailNV, DiaChiNV, MaTK, IsDeleted) VALUES ('$fullname', '$numberphone', '$birthday', '$email', '$address', '$matknew', '0')";
        (new Connnect())->excute($sql);
        break;
    case 'edit':
        $sql = "SELECT * FROM nhanvien JOIN taikhoan ON nhanvien.matk = taikhoan.matk WHERE  nhanvien.MaNV ='$ma'";
        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update nhanvien
            set 
            TenNV = '$fullname',
            SDTNV = '$numberphone',
            DiaChiNV = '$address',
            EmailNV = '$email',
            NgaySinh = '$birthday'
            where MaNV ='$ma'";
        (new Connnect())->excute($sql);
        $sql1 = "update taikhoan
            set 
            Username = '$username',
            Password = '$password'
            where MaTK ='$matk'";
        (new Connnect())->excute($sql1);
        break;
    case 'delete':
        $sql = "update nhanvien set IsDeleted = 1
            where MaNV ='$ma'";
        (new Connnect())->excute($sql);
        break;
}
