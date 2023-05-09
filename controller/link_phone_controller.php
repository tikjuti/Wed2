<?php
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action) {
    case '': {
            $code = getCategory();
            // $array = getProductCategory();
            require './view/linkphone/link_phone.php';
            break;
        }
}