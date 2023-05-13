<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<div id="login-alert">
    <div style="position: relative;">
        <h1>Thông báo</h1>
        <a class="" onclick="dongthongbao()" style="position:absolute; right: 5px; top: 5px; font-size: 30px; cursor: pointer;">
            <i class="fas fa-times"></i>
        </a>
    </div>
    <div>
        <p> Vui lòng đăng nhập để mua sản phẩm</p>
    </div>
</div>


<div class="full-page-register">
    <div id='login-form-register' class='login-page-register'>
        <div class="form-box-register">
            <div>
                <i class="fas fa-times icon-exit" style="color: black;"></i>
            </div>
            <div class='button-box-register'>
                <div id='btn-register'></div>
                <button type='button' onclick='login()' class='toggle-btn-register' style="outline:none;">Log
                    In</button>
                <button type='button' onclick='register()' class='toggle-btn-register' style="outline:none;">Register</button>
            </div>
            <form id='login-register' class='input-group-login-register' method="POST">
                <input type='text' class='input-field-register' placeholder='Username' name="username">
                <input type='password' class='input-field-register' placeholder='Enter Password' name="password">
                <input type='submit' class='submit-btn-register' name="login" value="Đăng nhập">
            </form>
            <?php require 'controller/register.php' ?>
            <form id='register' class='input-group-register' action="" method="POST">
                <input type='text' class='input-field-register' placeholder='Username' required name="usersigup" id="username" value="<?php if (isset($_POST["usersigup"]) && $popup_login == false)
                                                                                                                                            echo $_POST["usersigup"]; ?>">
                <label class="error" style="display:<?php echo $erorr_display ?>"><?php if (!empty($user_error) && $popup_login == false)
                                                                                        echo $user_error ?></label>
                <input type='text' class='input-field-register' placeholder='Họ và tên' required name="namesigup" id="username" value="<?php if (isset($_POST["namesigup"]) && $popup_login == false)
                                                                                                                                            echo $_POST["namesigup"]; ?>">
                <input type='email' class='input-field-register' placeholder='Email Id' required name="emailsigup" id="email" value="<?php if (isset($_POST["emailsigup"]) && $popup_login == false)
                                                                                                                                            echo $_POST["emailsigup"]; ?>">
                <label class="error" style="display:<?php echo $erorr_display ?>"><?php if (!empty($email_error) && $popup_login == false)
                                                                                        echo $email_error ?></label>
                <input type='text' class='input-field-register' placeholder='Số điện thoại' required name="numbersigup" value="<?php if (isset($_POST["numbersigup"]) && $popup_login == false)
                                                                                                                                    echo $_POST["numbersigup"]; ?>">
                <input type='date' class='input-field-register' placeholder='Ngày sinh' required name="datesigup" value="<?php if (isset($_POST["datesigup"]) && $popup_login == false)
                                                                                                                                echo $_POST["datesigup"]; ?>">
                <input type='text' class='input-field-register' placeholder='Địa chỉ' required name="address" value="<?php if (isset($_POST["address"]) && $popup_login == false)
                                                                                                                            echo $_POST["address"]; ?>">
                <input type='password' class='input-field-register' placeholder='Enter Password' required name="password" id="password">
                <input type='password' class='input-field-register' placeholder='Confirm Password' required name="password_confirm">
                <button type='submit' class='submit-btn-register' id="btn-signup">Register</button>
            </form>

        </div>
    </div>
</div>
<script src="public/js/jqueryyy.js">
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js">
</script>
<script type="text/javascript">
    $("#login-register").submit(function(e) {
        e.preventDefault();
        var username = $('input[name="username"]').val();
        var password = $('input[name="password"]').val();
        $.ajax({
            url: 'model/user_models.php',
            type: 'POST',
            data: {
                'username': username,
                'password': password
            },
            success: function(response) {
                if (response == 'success')
                    location.href = "view/admin/index.php";
                else
                if (response == 'customer')
                    location.href = "index.php";
                else
                    alert("Thông tin đăng nhập không đúng");

            }
        })
    });


    function dongthongbao() {
        document.getElementById("login-alert").style.display = "none";
    }
</script>