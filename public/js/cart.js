$(document).ready(function() {
    $.validator.addMethod("PHONE", function (value, element) {
        return this.optional(element) || /^0[0-9]{8,9}$/i.test(value);
    },);
        
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#cart").validate({
        rules: {
            hoten: {
                required: true,
            },
            phone:"required PHONE",
            diachi:{
                required:true,
            }
        },
        messages: {
            hoten: "Vui lòng nhập tên!",
            phone: "Vui lòng nhập đúng số điện thoại!",
            diachi: "Vui lòng nhập địa chỉ!",
        }
    });
});
