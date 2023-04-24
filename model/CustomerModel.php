<?php

if ($action == "delete" || $action == "update")
    require 'Connect.php';
else
    require 'model/Connect.php';

switch ($action) {
    case '':
        $sql = "select * from khachhang join taikhoan on khachhang.MaTK = taikhoan.MaTK where IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'edit':
        $sql = "select * from khachhang join taikhoan on khachhang.MaTK = taikhoan.MaTK
        where MaKH ='$ma'";
        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update khachhang
        set 
            TenKH = '$ten',
            SDTKH = '$sdt',
            NgaySinh = '$ngaysinh',
            EmailKH = '$email',
            DiaChi = '$diachi'
        where MaKH ='$ma'";
        $sql1 = "update taikhoan
        set 
            Username = '$username',
            Password = '$password'
        where MaTK ='$matk'";
        (new Connnect())->excute($sql);
        (new Connnect())->excute($sql1);
        break;
    case 'delete':
        $sql = "update khachhang set IsDeleted = 1
        where MaKH ='$ma'";
        (new Connnect())->excute($sql);
        break;
}
