<?php

if ($action == "billstatus")
    require 'Connect.php';
else
    require 'model/Connect.php';

switch ($action) {
    case '':
        $sql = "select * 
            from hoadon
            join khachhang on hoadon.MaKH = khachhang.MaKH
            join nhanvien on hoadon.MaNV = nhanvien.MaNV";
        $result = (new Connnect())->select($sql);
        break;
    case 'billdetail':
        $sql = "select * 
            from hoadon
            join cthoadon on hoadon.MaHD = cthoadon.MaHD
            join sanpham on cthoadon.MaSP = sanpham.MaSP
            where hoadon.MaHD ='$ma'";
        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'billstatus':
        $sql = "update hoadon
            set 
                TinhTrang = '$status'
            where MaHD ='$ma'";
        (new Connnect())->excute($sql);
        break;
}
