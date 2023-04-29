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
    case 'billstatus':
        $ma = $_GET['ma'];
        $status = $_GET['status'];
        require '../model/BillModel.php';
        break;
    default:
        echo "Nhập linh tinh gì đấy !";
}
