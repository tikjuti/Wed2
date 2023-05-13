<?php
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action) {
    case '': {
            $page = 1;
            $array = getAllproduct($page);
            // $array = getProductCategory();
            require './view/linkphone/link_phone.php';
            break;
        }
}