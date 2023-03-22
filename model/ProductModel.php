<?php

$connect = mysqli_connect('localhost', 'root', '', 'wednangcao');
mysqli_set_charset($connect, 'utf8');

switch ($action) {
    case '':
        $sql = "select * from sanpham";
        $result = mysqli_query($connect, $sql);
        break;
    case 'store':
        $sql = "insert into sanpham(tenSP, anhSP, giaSP)
        values ('$ten', '$anh', '$gia')";
        mysqli_query($connect, $sql);
        break;
    case 'edit':
        $sql = "select * from sanpham
        where maSP ='$ma'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update sanpham
        set 
            TenSP = '$ten',
            AnhSP = '$anh',
            GiaSP = '$gia'
        where MaSP ='$ma'";
        mysqli_query($connect, $sql);
        break;
    case 'delete':
        $sql = "delete from sanpham
        where maSP ='$ma'";
        mysqli_query($connect, $sql);
        break;
}
mysqli_close($connect);
