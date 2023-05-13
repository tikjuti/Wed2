
$(document).ready(function () {
    $('.delete-customer-btn').click(function (e) {
          e.preventDefault();
          var deleteid = $(this).val();
          var status = "delete";
          
          swal({
                title: "Bạn chắc chắn chưa?",
                text: "Once deleted, you will not be able to recover!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
          })
                .then((willDelete) => {
                      if (willDelete) {
                            $.ajax({
                                  type: "GET",
                                  url: "../../controller/CustomerController.php",
                                  data: {
                                          'ma': deleteid,
                                          'action': status
                                     },
                                    success: function () {
                                                location.reload();
                                  }
                            });
                      } else {
                            swal("Your imaginary file is safe!");
                      }
                });

    });
});


$(document).ready(function () {
      $('.btn-edit-customer').click(function (e) {
            e.preventDefault();
            var ma = $('input[name="ma"]').val();
            var matk = $('input[name="matk"]').val();
            var ten = $('input[name="ten"]').val();
            var username = $('input[name="username"]').val();
            var password = $('input[name="password"]').val();
            var sdt = $('input[name="sdt"]').val();
            var ngaysinh = $('input[name="ngaysinh"]').val();
            var email = $('input[name="email"]').val();
            var diachi = $('input[name="diachi"]').val();
            var status = "update";
            var flag = false;

            if (ten.length === 0) {
                  document.getElementById('customer-fullname-error').style.display = 'block';
                  flag = true;
            }
            else 
                        {
                        let ten_regex = /^[AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+ [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+(?: [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]*)*/
                        if (!ten_regex.test(ten))
                        {
                              document.getElementById('customer-fullname-error').style.display = 'block';
                              document.getElementById('customer-fullname-error').innerHTML= 'Tên không hợp lệ';
                              flag = true;
                         }
                         else {
                              document.getElementById('customer-fullname-error').style.display = 'none';
                          }
                        }
            
            // Phần kiểm tra số điện thoại người dùng
            if (sdt.length === 0) {
                  document.getElementById('customer-numberphone-error').style.display = 'block';
                  flag = true;
            }
            else
                        {
                        let phone_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                        if (!phone_regex.test(sdt))
                        {
                              document.getElementById('customer-numberphone-error').style.display = 'block';
                              document.getElementById('customer-numberphone-error').innerHTML= 'Số điện thoại không hợp lệ';
                              flag = true;
                        }
                        else {
                              document.getElementById('customer-numberphone-error').style.display = 'none';
                          }
                        }
            
            // Phần kiểm  tra tên đăng nhập người dùng
            if (username.length === 0) {
                  document.getElementById('customer-username-error').style.display = 'block';
                  flag = true;
            }
            else {
                  document.getElementById('customer-username-error').style.display = 'none';
              }
            if (ngaysinh.length === 0) {
                  document.getElementById('customer-birthday-error').style.display = 'block';
                  flag = true;
            }
            else {
                  document.getElementById('customer-birthday-error').style.display = 'none';
              }
            if (diachi.length === 0) {
                  document.getElementById('customer-address-error').style.display = 'block';
                  flag = true;
            }
            else {
                  document.getElementById('customer-address-error').style.display = 'none';
              }
            if (email.length === 0) {
                  document.getElementById('customer-email-error').style.display = 'block';
                  flag = true;
            }
            else {
                  var mail_regex = /\S+@\S+\.\S+/;
                  if (!mail_regex.test(email))
                  {
                        document.getElementById('customer-email-error').style.display = 'block';
                        document.getElementById('customer-email-error').innerHTML= 'Email không hợp lệ';
                        flag = true;
                  }
                  else {
                        document.getElementById('customer-email-error').style.display = 'none';
                    }
              }

            
            // Phần kiểm tra mật khẩu người dùng
            if (password.length === 0) {
                  document.getElementById('customer-password-error').style.display = 'block';
                  flag = true;
            }
            else
                  if (password.length < 8) {
                        document.getElementById('customer-password-error').style.display = 'block';
                        document.getElementById('customer-password-error').innerHTML = 'Mật khẩu phải đủ 8 kí tự';
                        flag = true;
                  }
                  else {
                        document.getElementById('customer-password-error').style.display = 'none';
                    }

            if (flag == true) return true;

            
            swal({
                  title: "Bạn chắc chắn chưa?",
                  text: "Once updated, you will not be able to recover!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
            })
                  .then((willDelete) => {
                        if (willDelete) {
                              $.ajax({
                                    type: "POST",
                                    url: "../../controller/CustomerController.php",
                                    data:  {
                                          'ma':ma,
                                          'matk':matk,
                                          'ten':ten,
                                          'username':username,
                                          'password':password,
                                          'sdt':sdt,
                                          'ngaysinh':ngaysinh,
                                          'email':email,
                                          'diachi':diachi,
                                          'action': status
                                    },
                                      success: function () {
                                                location.href="/view/admin/index.php?controller=customer";
                                    }
                              });
                        } else {
                              swal("Your imaginary file is safe!");
                        }
                  });
  
      });
  });