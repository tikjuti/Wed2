<?php

$controller = '';
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
}
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($controller) {
    case "":
        require "controller/root.php";
        break;
    case "product":
        require "controller/ProductController.php";
        break;
    case "":
        require "controller/root.php";
        break;
    case "":
        require "controller/root.php";
        break;
    case "bill":
        require "controller/BillController.php";
        break;
    case "":
        require "controller/root.php";
        break;
    default:
        echo "Không tìm thấy controller phù hợp !";
}
