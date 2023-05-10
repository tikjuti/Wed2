<?php
session_start();
if (empty($_SESSION['iduser'])) {
    header('location: http://localhost/WEDNANGCAO/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOBILE PHONE</title>
    <link rel="stylesheet" href="../../public/css/grid.css">
    <link rel="stylesheet" href="../../public/css/reset.css">
    <link rel="stylesheet" href="../../public/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <!-- Form đăng kí đăng nhập -->
    <form id="formsignup">
        <div class="modal">
            <div class="modal_overlay"></div>

            <div class="modal_body">
                <!-- Authen form -->
                <div class="auth_form">
                    <div class="auth_form__container">
                        <div class="auth_form_header">
                            <h3 class="auth_form__heading">Đăng kí</h3>
                            <a class="auth_form__switch_btn" onclick="showFormLogin(),closeFormSignUp()">Đăng nhập</a>
                        </div>

                        <div class="auth_form__form">
                            <div class="auth_form__group">
                                <input id="fullname" type="text" class="auth_form__input" placeholder="Nhập họ tên">
                                <div id="fullnameerror">Tên không được để trống</div>
                            </div>
                            <div class="auth_form__group">
                                <input id="numberphone" type="text" class="auth_form__input" placeholder="Nhập số điện thoại">
                                <div id="phoneerror">Số điện thoại không được để trống</div>
                            </div>
                            <div class="auth_form__group">
                                <input id="username" type="text" class="auth_form__input" placeholder="Nhập tên đăng nhập">
                                <div id="usernameerror">Tên đăng nhập không được để trống</div>
                            </div>
                            <div class="auth_form__group">
                                <input id="password" type="password" class="auth_form__input" placeholder="Nhập mật khẩu">
                                <a onclick="showPass()" id="eyeclose"><i class="fa-regular fa-eye-slash pass_icon"></i></a>
                                <a onclick="showPass()" id="eyeopen"><i class="fa-regular fa-eye pass_icon"></i></a>
                                <div id="passerror">Mật khẩu không được để trống</div>
                            </div>
                            <div class="auth_form__group">
                                <input id="repassword" type="password" class="auth_form__input" placeholder="Nhập lại mật khẩu">
                                <a onclick="showPass2()" id="eyeclose2"><i class="fa-regular fa-eye-slash pass_icon"></i></a>
                                <a onclick="showPass2()" id="eyeopen2"><i class="fa-regular fa-eye pass_icon"></i></a>
                                <div id="repasserror">Mật khẩu nhập lại không được để trống</div>
                            </div>
                        </div>

                        <div class="auth_form__controls">
                            <button type="button" class="btn btn_nomal auth_form__control_back" onclick="closeFormSignUp()">THOÁT</button>
                            <button type="submit" class="btn btn__primary">ĐĂNG KÍ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id="formlogin">
        <div class="modal">
            <div class="modal_overlay"></div>

            <div class="modal_body">
                <div class="auth_form">
                    <div class="auth_form__container">
                        <div class="auth_form_header">
                            <h3 class="auth_form__heading">Đăng nhập</h3>
                            <a class="auth_form__switch_btn" onclick="showFormSignUp(),closeFormLogin()">Đăng kí</a>
                        </div>

                        <div class="auth_form__form">
                            <div class="auth_form__group">
                                <input id="usernamelogin" type="text" class="auth_form__input" placeholder="Nhập tên đăng nhập">
                                <div id="usernameloginerror">Tên đăng nhập không được để trống</div>
                            </div>
                            <div class="auth_form__group">
                                <input id="passwordlogin" type="password" class="auth_form__input" placeholder="Nhập mật khẩu">
                                <a onclick="showPass3()" id="eyeclose3"><i class="fa-regular fa-eye-slash pass_icon"></i></a>
                                <a onclick="showPass3()" id="eyeopen3"><i class="fa-regular fa-eye pass_icon"></i></a>
                                <div id="passloginerror">Mật khẩu không được để trống</div>
                            </div>
                        </div>

                        <div class="auth_form__controls">
                            <button type="button" class="btn btn_nomal auth_form__control_back" onclick="closeFormLogin()">THOÁT</button>
                            <button type="submit" class="btn btn__primary">ĐĂNG NHẬP</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </form>

    <!-- Nội dung -->
    <div class="grid wide">
        <?php require 'layout/header.php' ?>
        <div class="row">
            <?php require 'layout/left_content.php' ?>
            <div class="col p-10" id="right-content">
                <?php
                require 'layout/right_content.php';
                ?>
            </div>
        </div>
    </div>
</body>
<script src="../../public/js/header.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../public/js/statistics.js"></script>
<script src="../../public/js/statistics-sellproduct.js"></script>
<script src="../../public/js/statistics-bestsell.js"></script>

</html>