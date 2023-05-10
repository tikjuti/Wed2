<?php
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action) {
    case '': {
            $array = getCategory();
            require './view/content_mid/content_mid.php';
            break;
        }
}