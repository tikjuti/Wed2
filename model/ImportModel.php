<?php
if ($action == "billstatus" || $action == "addtocart" || $action == "payimport")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

// if (isset($_SESSION['arrPQ'])) {
//     $arrPQ = $_SESSION['arrPQ'];
//     foreach ($arrPQ as $key => $value) {
//         $tmp = preg_split("/\./", $key);
//         if ($tmp[0] == 'Hóa đơn') {
//             foreach ($value['HanhDong'] as $key2 => $value2) {
//                 if ($key2 == 'detail' && $value2) {
//                     $statusDetail = 1;
//                 } else
//                 if ($key2  == 'process' && $value2) {
//                     $statusProcess = 1;
//                 }
//             }
//         }
//     }
// }
switch ($action) {
    case '':
        $sql = "select * from sanpham";
        $result = (new Connnect())->select($sql);
        break;
    case 'addtocart':
        session_start();
        if (empty($_SESSION['cartimport'][$ma])) {
            $sql = "select * from sanpham where MaSP='$ma'";
            $result = (new Connnect())->select($sql);
            $each = mysqli_fetch_array($result);
            $_SESSION['cartimport'][$ma]['MaSP'] = $each['MaSP'];
            $_SESSION['cartimport'][$ma]['TenSP'] = $each['TenSP'];
            $_SESSION['cartimport'][$ma]['AnhSP'] = $each['AnhSP'];
            $_SESSION['cartimport'][$ma]['GiaSP'] = $each['GiaSP'];
            $_SESSION['cartimport'][$ma]['quantity'] = 1;
        } else {
            $_SESSION['cartimport'][$ma]['quantity']++;
        }
        echo json_encode($_SESSION['cartimport']);
        die();
        break;
    case 'payimport':
        $sql = "select * from sanpham where MaSP='$ma'";
        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);
        $new_quantity = $each['SoLuongSP'] + $quantity;
        $sql1 = "update sanpham
        set 
             SoLuongSP = '$new_quantity'
        where MaSP ='$ma'";
        (new Connnect())->excute($sql1);
        session_start();
        unset($_SESSION['cartimport'][$ma]);
        break;
}
