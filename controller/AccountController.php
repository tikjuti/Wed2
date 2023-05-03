<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else
if (isset($_POST['action']))
    $action = $_POST['action'];

switch ($action) {
    case '':
        require '../../model/AccountModel.php';
        require 'account/index.php';
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require '../../model/AccountModel.php';
        require 'account/edit.php';
        break;
    case 'create':
        require '../../model/AccountModel.php';
        require 'account/create.php';
        break;
    case 'store':
        $maquyen = $_POST['maquyen'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        require '../model/AccountModel.php';
        break;
    case 'update':
        $maquyen = $_POST['maquyen'];
        $matk = $_POST['matk'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        require '../model/AccountModel.php';
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require '../model/AccountModel.php';
        break;
    default:
        echo "Nhập linh tinh gì đấy !";
}
