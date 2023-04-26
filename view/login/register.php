<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>seek coding</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- <li><button class='loginbtn' onclick="document.getElementById('login-form-register').style.display='block'" style="width:auto;">Login</button></li> -->
    <!---we had linked our css file----->
</head>

<body>

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
                <form id='login-register' class='input-group-login-register' action="" method="POST">
                    <input type='text' class='input-field-register' placeholder='Email Id' name="user">
                    <input type='password' class='input-field-register' placeholder='Enter Password' name="pass">
                    <input type='checkbox' class='check-box-register'><span class="span-register">Remember
                        Password</span>
                    <input type='submit' class='submit-btn-register' name="login" value="Đăng nhập">
                    <?php
                    ?>
                </form>
                <form id='register' class='input-group-register' action="index.php?list=sigup" method="POST">
                    <input type='text' class='input-field-register' placeholder='Họ và tên' required name="usersigup">
                    <input type='email' class='input-field-register' placeholder='Email Id' required name="emailsigup">
                    <input type='number' class='input-field-register' placeholder='Số điện thoại' required name="numbersigup">
                    <input type='date' class='input-field-register' placeholder='Ngày sinh' required name="datesigup">
                    <input type='text' class='input-field-register' placeholder='Địa chỉ' required>
                    <input type='password' class='input-field-register' placeholder='Enter Password' required>
                    <input type='password' class='input-field-register' placeholder='Confirm Password' required>
                    <input type='checkbox' class='check-box-register'><span class="span-register">I agree to the terms
                        and conditions</span>
                    <button type='submit' class='submit-btn-register'>Register</button>
                </form>
            </div>
        </div>
    </div>
    <script src="public/js/jqueryyy.js">
    </script>
    <script type="text/javascript">
        $("#login-register").submit(function(event) {

            console.log($(this).serializeArray());
            $.ajax({
                url: 'model/user_models.php',
                type: 'POST',
                data: $(this).serializeArray(),
                success: function(response) {
                    console.log(response);
                }

            })

        });
    </script>
</body>

</html>