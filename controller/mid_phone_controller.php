<?php
$action = '';
if (isset($_GET['id'])) {
    require 'view/midphone/mid_phone.php';
    $action = $_GET['id'];
}

?>