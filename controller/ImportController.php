<?php
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


switch ($action) {
    case '':
        require '../../model/ImportModel.php';
        require 'import/index.php';
        break;
    case 'addtocart':
        $ma = $_GET['ma'];
        $mancc = $_GET['mancc'];
        require '../model/ImportModel.php';
        break;
    case 'cart':
        require 'import/viewCart.php';
        break;
    case 'changequantity':
        session_start();
        $ma = $_GET['ma'];
        $mancc = $_GET['mancc'];
        $quantity = $_GET['quantity'];

        if ($quantity > 0) {
            $_SESSION['cartimport'][$mancc][$ma]['quantity'] = $quantity;
        }
        break;
    case 'delete':
        session_start();
        $ma = $_GET['ma'];
        $mancc = $_GET['mancc'];
        unset($_SESSION['cartimport'][$mancc][$ma]);
        break;
    case 'payimport':
        $ma = $_GET['ma'];
        $total = $_GET['total'];
        $quantity = $_GET['quantity'];
        require '../model/ImportModel.php';
        break;
    case 'invoices':
        require '../../model/ImportModel.php';
        require 'import/invoices.php';
        break;
    case 'detailinvoices':
        $ma = $_GET['ma'];
        require '../../model/ImportModel.php';
        require 'import/detailinvoices.php';
        break;
    default:
        echo "Nhập linh tinh gì đấy !";
}
