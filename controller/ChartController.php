<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


switch ($action) {
    case '':
        require '../../model/ChartModel.php';
        require 'chart/index.php';
        break;
    case 'revenue':
        require '../../model/ChartModel.php';
        require 'chart/index.php';
        break;
    case 'sellproduct':
        require '../../model/ChartModel.php';
        require 'chart/sellproduct.php';
        break;
    case 'bestselling':
        require '../../model/ChartModel.php';
        require 'chart/bestselling.php';
        break;
    case 'filter':
        $datestart = $_POST['datestart'];
        $dateend = $_POST['dateend'];
        require '../../model/ChartModel.php';
        require 'chart/index.php';
        break;
    case 'filter1':
        $datestart = $_POST['datestart'];
        $dateend = $_POST['dateend'];
        require '../../model/ChartModel.php';
        require 'chart/sellproduct.php';
        break;
    case 'filter2':
        $datestart = $_POST['datestart'];
        $dateend = $_POST['dateend'];
        require '../../model/ChartModel.php';
        require 'chart/bestselling.php';
        break;
    default:
        echo "Nhập linh tinh gì đấy !";
}
