<?php
$control = '';

if (isset($_GET['control'])) {
    $control = $_GET['control'];

    switch ($control) {
        case 'sanpham': {
                require 'controller/link_phone_controller.php';
                break;
            }
        case 'dienthoai': {
                require 'controller/mid_phone_controller.php';
                break;
            }
        case 'sanphamdienthoai': {
                require 'controller/product_phone_controller.php';
                break;
            }
        case 'giohang': {
                require 'controller/cart_controller.php';
                break;
            }
        case 'thoat': {
                unset($_SESSION['MaPQ']);
                unset($_SESSION['iduser']);
                unset($_SESSION['namekh']);
                header('location: http://localhost/WEDNANGCAO/index.php');
                break;
            }
    }
} else {
    if (isset($_GET['name'])) {
        require 'controller/search_controller.php';
    } else if ($control == '') {
        require 'controller/content_mid_controller.php';
    }
}
