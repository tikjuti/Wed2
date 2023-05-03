<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else
if (isset($_POST['action']))
    $action = $_POST['action'];

switch ($action) {
    case '':
        require '../../model/AuthorizationModel.php';
        require 'authorization/index.php';
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require '../../model/AuthorizationModel.php';
        require 'authorization/edit.php';
        break;
    case 'create':
        require 'authorization/create.php';
        break;
    case 'store':
        $Quyen = $_POST['Quyen'];
        $arrMaCN = $_POST['arrMaCN'];
        $arrHD = $_POST['arrHD'];
        $arrtmp = $_POST['arrData'];
        $arrData = [];
        foreach ($arrtmp as $each) {
            if ($each == 'true')
                array_push($arrData, 1);
            else
                array_push($arrData, 0);
        }
        require '../model/AuthorizationModel.php';
        break;
    case 'update':
        $MaQuyen = $_POST['MaQuyen'];
        $Quyen = $_POST['Quyen'];
        $arrMaCN = $_POST['arrMaCN'];
        $arrHD = $_POST['arrHD'];
        $arrtmp = $_POST['arrData'];
        $arrData = [];
        foreach ($arrtmp as $each) {
            if ($each == 'true')
                array_push($arrData, 1);
            else
                array_push($arrData, 0);
        }
        require '../model/AuthorizationModel.php';
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require '../model/AuthorizationModel.php';
        break;
    default:
        echo "Nhập linh tinh gì đấy !";
}
