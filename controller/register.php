<?php
require 'model/registermodel.php';

$user_name = '';
$password = '';
$name = '';
$email = '';
$address = '';
$phone = '';
$date = '';
$id = 'a';
$popup_login = true;
$popup_register = false;

$erorr_display = "none";

if (isset($_POST['usersigup'])) {
    $user_name = $_POST['usersigup'];
}

if (isset($_POST['namesigup'])) {
    $name = $_POST['namesigup'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
if (isset($_POST['emailsigup'])) {
    $email = $_POST['emailsigup'];
}
if (isset($_POST['address'])) {
    $address = $_POST['address'];
}
if (isset($_POST['numbersigup'])) {
    $phone = $_POST['numbersigup'];
}
if (isset($_POST['datesigup'])) {
    $date = $_POST['datesigup'];
}



if (!empty($user_name) && !empty($password)) {
    if (checkUserExists($user_name)) {
        $popup_login = false;
        $popup_register = true;
        $erorr_display = "block";
        $user_error = "Username đã tồn tại";
    } else if (checkEmailExists($email)) {
        $popup_login = false;
        $popup_register = true;
        $erorr_display = "block";
        $email_error = "Email đã tồn tại";
    } else {
        $popup_login = true;
        $popup_register = false;
        $erorr_display = "none";
        createUser($user_name, $password, $name, $phone, $date, $email, $address);
    }
}
