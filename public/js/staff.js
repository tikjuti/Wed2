$(document).ready(function () {
    $('.btn-update-staff').click(function (e) {
          e.preventDefault();
          var manv = $('input[name="manv"]').val();
          var matk = $('input[name="matk"]').val();
          var ten = $('input[name="fullname"]').val();
          var username = $('input[name="username"]').val();
          var password = $('input[name="password"]').val();
          var sdt = $('input[name="number"]').val();
          var ngaysinh = $('input[name="date"]').val();
          var email = $('input[name="email"]').val();
          var diachi = $('input[name="address"]').val();
          var status = "update";
          var flag = false;

          if (ten.length === 0) {
                document.getElementById('staff-fullname-error').style.display = 'block';
                flag = true;
          }
          else 
                      {
                      let ten_regex = /^[AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+ [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+(?: [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]*)*/
                      if (!ten_regex.test(ten))
                      {
                            document.getElementById('staff-fullname-error').style.display = 'block';
                            document.getElementById('staff-fullname-error').innerHTML= 'Tên không hợp lệ';
                            flag = true;
                       }
                       else {
                            document.getElementById('staff-fullname-error').style.display = 'none';
                        }
                      }
          
          // Phần kiểm tra số điện thoại người dùng
          if (sdt.length === 0) {
                document.getElementById('staff-number-error').style.display = 'block';
                flag = true;
          }
          else
                      {
                      let phone_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                      if (!phone_regex.test(sdt))
                      {
                            document.getElementById('staff-number-error').style.display = 'block';
                            document.getElementById('staff-number-error').innerHTML= 'Số điện thoại không hợp lệ';
                            flag = true;
                      }
                      else {
                            document.getElementById('staff-number-error').style.display = 'none';
                        }
                      }
          
          // Phần kiểm  tra tên đăng nhập người dùng
          if (username.length === 0) {
                document.getElementById('staff-username-error').style.display = 'block';
                flag = true;
          }
          else {
                document.getElementById('staff-username-error').style.display = 'none';
            }
          if (ngaysinh.length === 0) {
                document.getElementById('staff-date-error').style.display = 'block';
                flag = true;
          }
          else {
                document.getElementById('staff-date-error').style.display = 'none';
            }
          if (diachi.length === 0) {
                document.getElementById('staff-address-error').style.display = 'block';
                flag = true;
          }
          else {
                document.getElementById('staff-address-error').style.display = 'none';
            }
          if (email.length === 0) {
                document.getElementById('staff-email-error').style.display = 'block';
                flag = true;
          }
          else {
                var mail_regex = /\S+@\S+\.\S+/;
                if (!mail_regex.test(email))
                {
                      document.getElementById('staff-email-error').style.display = 'block';
                      document.getElementById('staff-email-error').innerHTML= 'Email không hợp lệ';
                      flag = true;
                }
                else {
                      document.getElementById('staff-email-error').style.display = 'none';
                  }
            }

          
          // Phần kiểm tra mật khẩu người dùng
          if (password.length === 0) {
                document.getElementById('staff-password-error').style.display = 'block';
                flag = true;
          }
          else
                if (password.length < 8) {
                      document.getElementById('staff-password-error').style.display = 'block';
                      document.getElementById('staff-password-error').innerHTML = 'Mật khẩu phải đủ 8 kí tự';
                      flag = true;
                }
                else {
                      document.getElementById('staff-password-error').style.display = 'none';
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
                                  url: "../../controller/StaffController.php",
                                  data:  {
                                        'manv':manv,
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
                                              location.href="http://localhost/WEDNANGCAO/view/admin/index.php?controller=staff";
                                  }
                            });
                      } else {
                            swal("Your imaginary file is safe!");
                      }
                });

    });
});

$(document).ready(function () {
    $('.btn-store-staff').click(function (e) {
          e.preventDefault();
          var ten = $('input[name="fullname"]').val();
          var username = $('input[name="username"]').val();
          var password = $('input[name="password"]').val();
          var sdt = $('input[name="number"]').val();
          var ngaysinh = $('input[name="date"]').val();
          var email = $('input[name="email"]').val();
          var diachi = $('input[name="address"]').val();
          var status = "store";
          var flag = false;

          if (ten.length === 0) {
                document.getElementById('staff-fullname-error-create').style.display = 'block';
                flag = true;
          }
          else 
                      {
                      let ten_regex = /^[AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+ [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+(?: [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]*)*/
                      if (!ten_regex.test(ten))
                      {
                            document.getElementById('staff-fullname-error-create').style.display = 'block';
                            document.getElementById('staff-fullname-error-create').innerHTML= 'Tên không hợp lệ';
                            flag = true;
                       }
                       else {
                            document.getElementById('staff-fullname-error-create').style.display = 'none';
                        }
                      }
          
          // Phần kiểm tra số điện thoại người dùng
          if (sdt.length === 0) {
                document.getElementById('staff-numberphone-error-create').style.display = 'block';
                flag = true;
          }
          else
                      {
                      let phone_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                      if (!phone_regex.test(sdt))
                      {
                            document.getElementById('staff-numberphone-error-create').style.display = 'block';
                            document.getElementById('staff-numberphone-error-create').innerHTML= 'Số điện thoại không hợp lệ';
                            flag = true;
                      }
                      else {
                            document.getElementById('staff-numberphone-error-create').style.display = 'none';
                        }
                      }
          
          // Phần kiểm  tra tên đăng nhập người dùng
          if (username.length === 0) {
                document.getElementById('staff-username-error-create').style.display = 'block';
                flag = true;
          }
          else {
                document.getElementById('staff-username-error-create').style.display = 'none';
            }
          if (ngaysinh.length === 0) {
                document.getElementById('staff-date-error-create').style.display = 'block';
                flag = true;
          }
          else {
                document.getElementById('staff-date-error-create').style.display = 'none';
            }
          if (diachi.length === 0) {
                document.getElementById('staff-address-error-create').style.display = 'block';
                flag = true;
          }
          else {
                document.getElementById('staff-address-error-create').style.display = 'none';
            }
          if (email.length === 0) {
                document.getElementById('staff-email-error-create').style.display = 'block';
                flag = true;
          }
          else {
                var mail_regex = /\S+@\S+\.\S+/;
                if (!mail_regex.test(email))
                {
                      document.getElementById('staff-email-error-create').style.display = 'block';
                      document.getElementById('staff-email-error').innerHTML= 'Email không hợp lệ';
                      flag = true;
                }
                else {
                      document.getElementById('staff-email-error-create').style.display = 'none';
                  }
            }

          
          // Phần kiểm tra mật khẩu người dùng
          if (password.length === 0) {
                document.getElementById('staff-password-error-create').style.display = 'block';
                flag = true;
          }
          else
                if (password.length < 8) {
                      document.getElementById('staff-password-error-create').style.display = 'block';
                      document.getElementById('staff-password-error-create').innerHTML = 'Mật khẩu phải đủ 8 kí tự';
                      flag = true;
                }
                else {
                      document.getElementById('staff-password-error-create').style.display = 'none';
                  }

          if (flag == true) return true;

          
          swal({
                title: "Bạn chắc chắn chưa?",
                text: "Once created, you will not be able to recover!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
          })
                .then((willDelete) => {
                      if (willDelete) {
                            $.ajax({
                                  type: "POST",
                                  url: "../../controller/StaffController.php",
                                  data:  {
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
                                              location.href="http://localhost/WEDNANGCAO/view/admin/index.php?controller=staff";
                                  }
                            });
                      } else {
                            swal("Your imaginary file is safe!");
                      }
                });

    });
});

$(document).ready(function () {
    $('.btn-delete-staff').click(function (e) {
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
                                  url: "../../controller/StaffController.php",
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