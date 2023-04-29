<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else
if (isset($_POST['action']))
    $action = $_POST['action'];

switch ($action) {
    case '':
        require '../../model/CustomerModel.php';
        require 'customer/index.php';
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require '../../model/CustomerModel.php';
        require 'customer/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'];
        $matk = $_POST['matk'];
        $ten = $_POST['ten'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sdt = $_POST['sdt'];
        $ngaysinh = $_POST['ngaysinh'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        require '../model/CustomerModel.php';
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require '../model/CustomerModel.php';
        break;
    default:
        echo "Nhập linh tinh gì đấy !";
}
