<?php
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action) {
    case '': {
            require 'cart/cart.php';
            break;
        }
    case 'addcart': {
            if (isset($_POST['themgiohang']) && ($_POST['themgiohang'])) {
                $masp = $_POST['masp'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                if (isset($_POST['sl']) && ($_POST['sl'] > 0)) {
                    $soluongsp = $_POST['sl'];
                } else {
                    $soluongsp = 1;
                }
                $fg = 0;
                //kiemtrasp
                //bị trùng
                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[1] == $tensp) {
                        $soluongmoi = $soluongsp + $item[3];
                        $_SESSION['giohang'][$i][3] = $soluongmoi;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }
                if ($fg == 0) {
                    $item = array($masp, $tensp, $giasp, $soluongsp);
                    $_SESSION['giohang'][] = $item;
                }

                // header('location:index.php?list=giohang');

            }
            include("cart/cart.php");
            break;
        }
    case 'delcart': {

            if (isset($_SESSION['giohang'])) {
                unset($_SESSION['giohang']);

            }
            include("cart/cart.php");
            break;
        }
    case 'delcartproduct': {
            if (isset($_GET['i']) && ($_GET['i'] >= 0)) {
                //xóa 1 phân phầnt tử
                array_splice($_SESSION['giohang'], $_GET['i'], 1);
            }
            include("cart/cart.php");
            break;
        }
    case 'thanhtoan':
        if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
            // lấy dữ liệu
            $tongdonhang = $_POST['tongdonhang'];
            $hoten = $_POST['hoten'];
            $phone = $_POST['phone'];
            $diachi = $_POST['diachi'];
            $mahd = rand(1, 9999999);
            // tạo đơn hàng//
            // trả về 1 đibw hàng
            $iddh = taomoidonhang($mahd, $tongdonhang, $hoten, $phone, $diachi);
            // if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
            //     foreach($_SESSION['giohang'] as $item){
            //         addtocart($iddh)
            //     }
            // }
            include("donhangthanhtoan.php");
            break;
        }
}
?>