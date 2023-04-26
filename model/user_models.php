<?php
session_start();
// include 'user.php';
if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) && !empty($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $query = getuserinfo($user, $pass);
    $array = mysqli_fetch_array($query);
    $role = $array['MaPQ'];
    $_SESSION['curentuser'] = $array;
    if ($query->num_rows == 0) {
        echo json_encode(
            array(
                'status' => 0,
                'message' => 'thông tin đăng nhập không thành công',
            )
        );
        exit;
    } else {
        echo json_encode(
            array(
                'status' => 1,
                'message' => 'Đăng nhập thành công',
            )
        );
        if ($role == 3) {
            $_SESSION['MaPQ'] = $role;
            require 'view/admin/index.php';
        } else {
            $_SESSION['MaPQ'] = $role;
            $_SESSION['iduser'] = $array['MaTK'];
            $_SESSION['username'] = $array['Username'];
            // header('location: http://localhost/project/user/views/index.php');

        }
    }
}
