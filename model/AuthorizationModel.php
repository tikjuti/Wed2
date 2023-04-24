<?php

if ($action == "delete" || $action == "update")
    require 'Connect.php';
else
    require 'model/Connect.php';

switch ($action) {
    case '':
        $sql = "select * from phanquyen where IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'store':
        $sql = "insert into sanpham(TenSP, MaLoaiSP, GiaSP, SoLuongSP, ManHinh, Camera, DungLuong, Chip, AnhSP, MaNCC)
        values ('$ten', '$maloai', '$gia', '$soluong', '$manhinh', '$camera', '$dungluong', '$chip', '$anh', '$mancc')";
        (new Connnect())->excute($sql);
        break;
    case 'edit':
        $sql = "select * from sanpham
        where maSP ='$ma'";
        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update sanpham
        set 
            TenSP = '$ten',
            AnhSP = '$anh',
            GiaSP = '$gia'
        where MaSP ='$ma'";
        (new Connnect())->excute($sql);
        break;
    case 'delete':
        $sql = "update phanquyen set IsDeleted = 1
        where MaPQ ='$ma'";
        (new Connnect())->excute($sql);
        break;
}
