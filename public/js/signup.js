$(document).ready(function() {
    $.validator.addMethod("PHONE", function (value, element) {
        return this.optional(element) || /^0[0-9]{8,9}$/i.test(value);
    },);
        
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#register").validate({
        rules: {
            usersigup: {
                required: true,
                minlength:2
            },
            emailsigup: {
                required: true,
                email: true
            },
            password: {
                minlength: 5
            },
            password_confirm: {
                equalTo: '[name="password"]'
            },
            numbersigup: "required PHONE"
        },
        messages: {
            usersigup: "Vui lòng nhập tên!",
            emailsigup: {
                required: "Vui lòng nhập vào email",
                email: "Nhập đúng định dạng email"
            },
            password: {
                required: "Vui lòng nhập mật khẩu!",
                minlength: "Độ dài tối thiểu 5 kí tự",
            },
            password_confirm: {
                required: "Vui lòng nhập mật khẩu!",
                equalTo: "Password không trùng khớp",
            },
            numbersigup: "Vui lòng nhập đúng số điện thoại!",
        }
    });


    
});