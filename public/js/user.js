$(document).ready(function() {
    $.validator.addMethod("PHONE", function (value, element) {
        return this.optional(element) || /^0[0-9]{8,9}$/i.test(value);
    },);
        
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#update").validate({
        rules: {
            fullname: {
                required: true,
            },
            phone:"required PHONE",
            email:{
                required:true,
                email:true
            },
            address:{
                required:true
            }
        },
        messages: {
            fullname: "Vui lòng nhập tên!",
            phone: "Vui lòng nhập đúng số điện thoại!",
            address: "Vui lòng nhập địa chỉ!",
            email: {
                required: "Vui lòng nhập vào email",
                email: "Nhập đúng định dạng email"
            }
        }
    });
});