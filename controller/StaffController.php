<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else
if (isset($_POST['action']))
    $action = $_POST['action'];

switch ($action) {
    case '':
        require '../../model/StaffModel.php';
        require 'staff/index.php';
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require '../../model/StaffModel.php';
        require 'staff/edit.php';
        break;
    case 'create':
        require '../../model/StaffModel.php';
        require 'staff/create.php';
        break;
    case 'store':
        $fullname = $_POST['fullname'];
        $numberphone = $_POST['numberphone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        require '../model/StaffModel.php';
        break;
    case 'update':
        $mancc = $_POST['mancc'];
        $fullname = $_POST['fullname'];
        $numberphone = $_POST['numberphone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        require '../model/StaffModel.php';
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require '../model/StaffModel.php';
        break;
    default:
        echo "Nhập linh tinh gì đấy !";
}
