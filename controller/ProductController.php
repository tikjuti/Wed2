<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case '':
        require 'model/ProductModel.php';
        require 'view/admin/products/index.php';
        break;
    case 'create':
        require 'products/create.php';
        break;
    case 'store':
        $ten = $_POST['ten'];
        $anh = $_FILES['anh'];
        $gia = $_POST['gia'];

        $folder = '../../public/image/';
        $target_file = $folder . basename($anh["name"]);

        move_uploaded_file($anh["tmp_name"], $target_file);
        // $maloai = $_POST['maloai'];
        // $soluong = $_POST['soluong'];
        // $manhinh = $_POST['manhinh'];
        // $camera = $_POST['camera'];
        // $dungluong = $_POST['dungluong'];
        // $chip = $_POST['chip'];
        // $mancc = $_POST['mancc'];
        // require '../../model/ProductModel.php';
        // header('location: view/admin/products/index.php');
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require 'model/ProductModel.php';
        require 'view/admin/products/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $anh = $_POST['anh'];
        $gia = $_POST['gia'];
        require 'model/ProductModel.php';
        header('location: index.php');
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require 'model/ProductModel.php';
        header('location: index.php');
        break;
    default:
        echo "Nhập linh tinh gì đấy !";
}
