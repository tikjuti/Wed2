<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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
                    <button type='button' onclick='register()' class='toggle-btn-register'
                        style="outline:none;">Register</button>
                </div>
                <form id='login-register' class='input-group-login-register' action="" method="POST">
                    <input type='text' class='input-field-register' placeholder='Email Id' name="user">
                    <input type='password' class='input-field-register' placeholder='Enter Password' name="pass">
                    <input type='checkbox' class='check-box-register'><span class="span-register">Remember
                        Password</span>
                    <input type='submit' class='submit-btn-register' name="login" value="Đăng nhập">
                </form>
                <?php $user_error ?>
                <?php require 'controller/register.php' ?>
                <form id='register' class='input-group-register' action="" method="POST">
                    <input type='text' class='input-field-register' placeholder='Username' required name="usersigup"
                        id="username" value="<?php if (isset($_POST["usersigup"]) && $popup_login == false)
                            echo $_POST["usersigup"]; ?>">
                    <label class="error" style="display:<?php echo $erorr_display ?>"><?php if (!empty($user_error) && $popup_login == false)
                           echo $user_error ?></label>
                    <input type='text' class='input-field-register' placeholder='Họ và tên' required name="namesigup"
                        id="username" value="<?php if (isset($_POST["namesigup"]) && $popup_login == false)
                           echo $_POST["namesigup"]; ?>">
                    <input type='email' class='input-field-register' placeholder='Email Id' required name="emailsigup"
                        id="email" value="<?php if (isset($_POST["emailsigup"]) && $popup_login == false)
                            echo $_POST["emailsigup"]; ?>">
                    <label class="error" style="display:<?php echo $erorr_display ?>"><?php if (!empty($email_error) && $popup_login == false)
                           echo $email_error ?></label>
                    <input type='text' class='input-field-register' placeholder='Số điện thoại' required
                        name="numbersigup" value="<?php if (isset($_POST["numbersigup"]) && $popup_login == false)
                           echo $_POST["numbersigup"]; ?>">
                    <input type='date' class='input-field-register' placeholder='Ngày sinh' required name="datesigup"
                        value="<?php if (isset($_POST["datesigup"]) && $popup_login == false)
                            echo $_POST["datesigup"]; ?>">
                    <input type='text' class='input-field-register' placeholder='Địa chỉ' required name="address" value="<?php if (isset($_POST["address"]) && $popup_login == false)
                        echo $_POST["address"]; ?>">
                    <input type='password' class='input-field-register' placeholder='Enter Password' required
                        name="password" id="password">
                    <input type='password' class='input-field-register' placeholder='Confirm Password' required
                        name="password_confirm">
                    <input type='checkbox' class='check-box-register'><span class="span-register">I agree to the terms
                        and conditions</span>
                    <button type='submit' class='submit-btn-register' id="btn-signup">Register</button>
                </form>

            </div>_
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
                    location.href = " http://localhost/WEDNANGCAO/view/admin/index.php";
                else
                    location.href = "http://localhost/WEDNANGCAO/index.php";
            }

        })

    });


    <?php
        if ($popup_login == true):
            echo "";
        else:
            ?>
        let login1 = document.querySelector('.full-page-register');
        login1.classList.add("full-page-block");
        login1.classList.remove("full-page-none");
        register();
        <?php endif; ?>

        <?php
        if ($popup_register == true):
            echo "";
        else:
            ?>
        let login1 = document.querySelector('.full-page-register');
        login1.classList.add("full-page-block");
        login1.classList.remove("full-page-none");
        login();
        <?php endif; ?>


</script>