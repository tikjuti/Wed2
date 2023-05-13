<?php
// require("Connect.php");

function getOrderByUser($makh)
{
    $sql = "SELECT * FROM hoadon Where hoadon.makh = $makh ORDER BY MaHD DESC";
    $result = (new Connnect())->select($sql);
    // $row = mysqli_fetch_assoc($result);
    return $result;
}

function getDetailOrder($mahd)
{
    $sql = "SELECT sanpham.DungLuong,sanpham.ManHinh,sanpham.Chip, sanpham.AnhSP,sanpham.TenSP,sanpham.GiaSP,cthoadon.SoLuong,cthoadon.Gia
    FROM cthoadon
    INNER JOIN sanpham ON cthoadon.MaSP=sanpham.MaSP and cthoadon.MaHD = $mahd;";
    // $sql = "SELECT sanpham.AnhSP,sanpham.TenSP,sanpham.GiaSP,cthoadon.SoLuong,cthoadon.Gia FROM cthoadon,sanpham WHERE cthoadon.MaHD = $mahd and cthoadon.MaSP = sanpham.MaSP";
    $result = (new Connnect())->select($sql);
    return $result;
}
function getUser($matk)
{
    $sql = "SELECT * FROM khachhang WHERE MaTK=$matk";
    $query = (new Connnect())->select($sql);
    return $query;
}

function updateUser($MaKH, $TenTK, $SDTKH, $NgaySinh, $EmailKH, $DiaChi)
{
    $sql = "UPDATE khachhang
            SET 
            TenKH = '$TenTK',
            SDTKH = '$SDTKH',
            NgaySinh = '$NgaySinh',
            EmailKH = '$EmailKH',
            DiaChi = '$DiaChi'
            WHERE MaTK ='$MaKH'";
    $query = (new Connnect())->select($sql);
    return $query;
}
