<?php
$action = '';
if (isset($_GET['id'])) {
    require 'midphone/mid_phone.php';
    $action = $_GET['id'];
}

?>