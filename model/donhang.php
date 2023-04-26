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
function taomoidonhang($mahd,$tongdonhang,$hoten,$phone,$diachi)
{
  include("connectdb.php");
$conn=connectdb();
$sql="INSERT INTO hoadon (MaHD,TongTien,TenNguoiNhan,SDT,DiaChiNhan)
VALUES ('".$mahd."','".$tongdonhang."','".$hoten."','".$phone."','".$diachi."')";
$conn->exec($sql);
$last_id = $conn->lastInsertId();
  return $last_id;
}
?>