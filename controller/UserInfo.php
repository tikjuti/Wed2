<?php
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


switch ($action) {
    case 'info':
        require 'model/OrderModel.php';
        $view = "userinfo";
        require 'view/user/user.php';
        break;
    case 'order':
        require 'model/OrderModel.php';
        $view = "order";
        require 'view/user/user.php';
        break;
    default:
        require 'model/OrderModel.php';
        $view = "userinfo";
        require 'view/user/user.php';
        break;
}