<?php

if ($action == "billstatus")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

if (isset($_SESSION['arrPQ'])) {
    $arrPQ = $_SESSION['arrPQ'];
    echo  json_encode($arrPQ);
    foreach ($arrPQ as $key => $value) {
        $tmp = preg_split("/\./", $key);
        if ($tmp[0] == 'Hóa đơn') {
            foreach ($value['HanhDong'] as $key2 => $value2) {
                $tmp2 = preg_split("/\./", $value2);
                if ($tmp2[0] == 'detail' && $tmp2[1] == 1)
                    $statusDetail = 1;
                else
                    $statusDetail = 0;
                if ($tmp2[0] == 'process' && $tmp2[1] == 1)
                    $statusProcess = 1;
                else
                    $statusProcess = 0;
            }
            break;
        }
    }
}
echo $statusDetail;
echo $statusProcess;

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
