<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


switch ($action) {
    case '':
        require '../../model/BillModel.php';
        require 'bill/index.php';
        break;
    case 'billdetail':
        $ma = $_GET['ma'];
        require '../../model/BillModel.php';
        require 'bill/billdetail.php';
        break;
        // case 'edit':
        //     $ma = $_GET['ma'];
        //     require 'model/ProductModel.php';
        //     require 'view/admin/products/edit.php';
        //     break;
        // case 'update':
        //     $ma = $_POST['ma'];
        //     $ten = $_POST['ten'];
        //     $anh = $_POST['anh'];
        //     $gia = $_POST['gia'];
        //     require 'model/ProductModel.php';
        //     header('location: index.php');
        //     break;
        // case 'delete':
        //     $ma = $_GET['ma'];
        //     require 'model/ProductModel.php';
        //     header('location: index.php');
        //     break;
        // default:
        //     echo "Nhập linh tinh gì đấy !";
}
