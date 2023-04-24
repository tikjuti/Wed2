// Ẩn hiện form đăng kí đăng nhập
function showFormSignUp() {
    document.getElementById('formsignup').style.display = 'block';
}
function closeFormSignUp() {
    document.getElementById('formsignup').style.display = 'none';
}
function showFormLogin() {
    document.getElementById('formlogin').style.display = 'block';
}
function closeFormLogin() {
    document.getElementById('formlogin').style.display = 'none';
}

var x = true;
function showPass() {
    if (x) {
        document.getElementById('password').type = 'text';
        document.getElementById('eyeopen').style.display = 'block';
        document.getElementById('eyeclose').style.display = 'none';
        x = false;

    }
    else {
        document.getElementById('password').type = 'password';
        document.getElementById('eyeopen').style.display = 'none';
        document.getElementById('eyeclose').style.display = 'block';
        x= true;

    }
}
function showPass2() {
    if (x) {
        document.getElementById('repassword').type = 'text';
        document.getElementById('eyeopen2').style.display = 'block';
        document.getElementById('eyeclose2').style.display = 'none';
        x = false;

    }
    else {
        document.getElementById('repassword').type = 'password';
        document.getElementById('eyeopen2').style.display = 'none';
        document.getElementById('eyeclose2').style.display = 'block';
        x= true;

    }
}
function showPass3() {
    if (x) {
        document.getElementById('passwordlogin').type = 'text';
        document.getElementById('eyeopen3').style.display = 'block';
        document.getElementById('eyeclose3').style.display = 'none';
        x = false;

    }
    else {
        document.getElementById('passwordlogin').type = 'password';
        document.getElementById('eyeopen3').style.display = 'none';
        document.getElementById('eyeclose3').style.display = 'block';
        x= true;

    }
}
function showPass4() {
    if (x) {
        document.getElementById('password_acc').type = 'text';
        document.getElementById('eyeopen_acc').style.display = 'block';
        document.getElementById('eyeclose_acc').style.display = 'none';
        x = false;

    }
    else {
        document.getElementById('password_acc').type = 'password';
        document.getElementById('eyeopen_acc').style.display = 'none';
        document.getElementById('eyeclose_acc').style.display = 'block';
        x= true;

    }
}

// ẩn hiện phần danh mục bên trái
function showContentLeft() {
    if (x) {
        document.getElementById('content-left').style.display = 'block';
        x = false;

    }
    else {
        document.getElementById('content-left').style.display = 'none';
        x= true;
    }
}
