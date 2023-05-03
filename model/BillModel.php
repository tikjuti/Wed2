<?php

if ($action == "billstatus")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

if (isset($_SESSION['arrPQ'])) {
    $arrPQ = $_SESSION['arrPQ'];
    foreach ($arrPQ as $key => $value) {
        $tmp = preg_split("/\./", $key);
        if ($tmp[0] == 'Hóa đơn') {
            foreach ($value['HanhDong'] as $key2 => $value2) {
                if ($key2 == 'detail' && $value2) {
                    $statusDetail = 1;
                } else
                if ($key2  == 'process' && $value2) {
                    $statusProcess = 1;
                }
            }
        }
    }
}
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
