<?php

$controller = '';
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
}

switch ($controller) {
        // case '':
        //     // require '../../controller/ProductController.php';
        //     break;
    case 'product':
        require '../../controller/ProductController.php';
        break;
    case 'staff':
        require '../../controller/StaffController.php';
        break;
    case 'customer':
        require '../../controller/CustomerController.php';
        break;
    case 'bill':
        require '../../controller/BillController.php';
        break;
    case 'billdetail':
        require '../../controller/BillController.php';
        break;
    case 'statistic':
        require '../../controller/ChartController.php';
        break;
    case 'authorization':
        require '../../controller/AuthorizationController.php';
        break;
    case 'account':
        require '../../controller/AccountController.php';
        break;
    case 'import':
        require '../../controller/ImportController.php';
        break;
    case 'supplier':
        require '../../controller/SupplierController.php';
        break;
    default:
        echo '<div class="authorize-modalbox">Không tìm thấy controller phù hợp!</div>';
}
