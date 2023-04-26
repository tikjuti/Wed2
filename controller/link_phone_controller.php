<?php
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action) {
    case '': {
            $code = getCategory();
            require './view/linkphone/link_phone.php';
            break;
        }
}
