<?php

$controller = '';
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
}

switch ($controller) {
    case '':
        require '../../controller/ProductController.php';
        break;
    case 'product':
        require '../../controller/ProductController.php';
        break;
    case 'staff':
        echo "Đây là nơi quản lý nhân viên";
        // require '../../controller/ProductController.php';
        break;
    case 'customer':
        echo "Đây là nơi quản lý khách hàng";
        // require '../../controller/ProductController.php';
        break;
    case 'bill':
        require '../../controller/BillController.php';
        break;
    case 'statistic':
        echo "Đây là nơi thống kê";
        // require '../../controller/ProductController.php';
        break;
    default:
        echo "Không tìm thấy controller phù hợp!";
}
