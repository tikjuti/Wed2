<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else
if (isset($_POST['action']))
    $action = $_POST['action'];

switch ($action) {
    case '':
        require 'model/AuthorizationModel.php';
        require 'view/admin/authorization/index.php';
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require 'model/AuthorizationModel.php';
        require 'view/admin/authorization/edit.php';
        break;
        // case 'update':
        //     $ma = $_POST['ma'];
        //     $ten = $_POST['ten'];
        //     $anh = $_POST['anh'];
        //     $gia = $_POST['gia'];
        //     require '../model/AuthorizationModel.php';
        //     break;
    case 'delete':
        $ma = $_GET['ma'];
        require '../model/AuthorizationModel.php';
        break;
    default:
        echo "Nhập linh tinh gì đấy !";
}
