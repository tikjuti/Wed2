<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action) {
    case '': {
            require 'view/cart/cart.php';
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


            }
            include("view/cart/cart.php");
            break;
        }
    case 'delcart': {

            if (isset($_SESSION['giohang'])) {
                unset($_SESSION['giohang']);

            }
            include("view/cart/cart.php");
            break;
        }
    case 'delcartproduct': {
            if (isset($_GET['i']) && ($_GET['i'] >= 0)) {
                array_splice($_SESSION['giohang'], $_GET['i'], 1);
            }
            include("view/cart/cart.php");
            break;
        }
    case 'thanhtoan': {
            require 'model/donhang.php';
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
                $count = count($_SESSION['soluong']);
                $tongdonhang = $_POST['tongdonhang'];
                $hoten = $_POST['hoten'];
                $phone = $_POST['phone'];
                $diachi = $_POST['diachi'];
                $makh = $_SESSION['makh'];
                $date = $_POST['date'];
                $tinhtrang = 0;
                $manv = nhanvien();
                $mahd = taomoidonhang($makh, $manv, $date, $diachi, $hoten, $phone, $tongdonhang, $tinhtrang);

                $i = 1;
                while ($count > 1) {

                    $query = cthd($mahd, $_SESSION['sanpham'][$i], $_SESSION['soluong'][$i], $_SESSION['thanhtien'][$i]);
                    $count--;
                    $i++;
                }

                $i = 1;
                unset($_SESSION['soluong']);
                unset($_SESSION['sanpham']);
                unset($_SESSION['thanhtien']);
                unset($_SESSION['giohang']);
                header("Location: index.php?control=user&action=order");
            } else {
                include("cart/cart.php");
            }
            break;
        }
}
