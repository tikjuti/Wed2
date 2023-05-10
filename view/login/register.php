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
    <!-- <div class="button-login">
        <a href="index.php">Đăng nhập</a>
    </div> -->
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
                <input type='checkbox' class='check-box-register'><span class="span-register">Remember
                    Password</span>
                <input type='submit' class='submit-btn-register' name="login" value="Đăng nhập">
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js">
</script>
<script type="text/javascript">
    $("#login-register").submit(function(e) {
        // e.preventDefault();
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
                    location.href = "index.php";
            }
        })
    });


    function dongthongbao() {
        document.getElementById("login-alert").style.display = "none";
    }
</script>