<?php
// function taodonhang($mahd,$tongdonhang,$hoten,$phone,$diachi){
//     include('../Adminphp/config.php');
//     $sql="INSERT INTO hoadon (MaHD,TongTien,TenNguoiNhan,SDT,DiaChiNhan)
//     VALUES ('".$mahd."','".$tongdonhang."','".$hoten."','".$phone."','".$diachi."')";
//     if (mysqli_query($conn, $sql)) {
//         $last_id = mysqli_insert_id($conn);

//         echo "New record created successfully. Last inserted ID is: " . $last_id;
//         return $last_id;
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//       }
// }
function taomoidonhang($makh, $manv, $ngaylap, $diachi, $hoten, $sdt, $tongtien, $tinhtrang)
{
  $sql = "INSERT INTO hoadon (MaKH,MaNV,NgayLap,DiaChiNhan,TenNguoiNhan,SDT,TongTien,TinhTrang)
VALUES ('" . $makh . "','" . $manv . "','" . $ngaylap . "','" . $diachi . "','" . $hoten . "','" . $sdt . "','" . $tongtien . "','" . $tinhtrang . "')";
  $last_id = (new Connnect())->last_id($sql);
  return $last_id;
}
function cthd($mahd, $masp, $soluong, $gia)
{
  $sql = "INSERT INTO cthoadon (MaHD,MaSP,SoLuong,Gia)
VALUES ('" . $mahd . "','" . $masp . "','" . $soluong . "','" . $gia . "')";
  $query = (new Connnect())->select($sql);
  return $query;
}
function nhanvien()
{
  $sql = "SELECT MaNV FROM nhanvien ORDER BY RAND() LIMIT 1";
  $manv = (new Connnect())->select($sql);
  $kq = mysqli_fetch_array($manv);
  $result = $kq[0];
  return $result;
}
?>