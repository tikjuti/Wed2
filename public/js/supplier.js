$(document).ready(function () {
    $('.btn-create-supplier').click(function (e) {
          e.preventDefault();
          var fullname = $('input[name="fullname"]').val();
          var numberphone = $('input[name="numberphone"]').val();
          var address = $('input[name="address"]').val();
          var email = $('input[name="email"]').val();
          var status = "store";
          var flag = false;

            if (fullname.length === 0) {
                  document.getElementById('supplier-fullname-error-create').style.display = 'block';
                  flag = true;
            }
            else 
                        {
                        let ten_regex = /^[AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+ [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+(?: [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]*)*/
                        if (!ten_regex.test(fullname))
                        {
                              document.getElementById('supplier-fullname-error-create').style.display = 'block';
                              document.getElementById('supplier-fullname-error-create').innerHTML= 'Tên không hợp lệ';
                              flag = true;
                         }
                         else {
                            document.getElementById('supplier-fullname-error-create').style.display = 'none';
                        }
                        }
            
            // Phần kiểm tra số điện thoại người dùng
            if (numberphone.length === 0) {
                  document.getElementById('supplier-numberphone-error-create').style.display = 'block';
                  flag = true;
            }
            else
                        {
                        let phone_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                        if (!phone_regex.test(numberphone))
                        {
                              document.getElementById('supplier-numberphone-error-create').style.display = 'block';
                              document.getElementById('supplier-numberphone-error-create').innerHTML= 'Số điện thoại không hợp lệ';
                              flag = true;
                        }
                        else {
                            document.getElementById('supplier-numberphone-error-create').style.display = 'none';
                        }
                        }
            
            if (address.length === 0) {
                  document.getElementById('supplier-address-error-create').style.display = 'block';
                  flag = true;
            }
            else {
                document.getElementById('supplier-address-error-create').style.display = 'none';
            }
            
            if (email.length === 0) {
                  document.getElementById('supplier-email-error-create').style.display = 'block';
                  flag = true;
            }
            else {
                var mail_regex = /\S+@\S+\.\S+/;
                  if (!mail_regex.test(email))
                  {
                        document.getElementById('supplier-email-error-create').style.display = 'block';
                        document.getElementById('supplier-email-error-create').innerHTML= 'Email không hợp lệ';
                        flag = true;
                  }
                  else {
                        document.getElementById('supplier-email-error-create').style.display = 'none';
                    }
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
                                  url: "../../controller/SupplierController.php",
                                  data:  {
                                        'fullname':fullname,
                                        'numberphone':numberphone,
                                        'address':address,
                                        'email':email,
                                        'action': status
                                  },
                                    success: function () {
                                        location.href = "/view/admin/index.php?controller=supplier";
                                  }
                            });
                      } else {
                            swal("Your imaginary file is safe!");
                      }
                });

    });
});

$(document).ready(function () {
    $('.btn-update-supplier').click(function (e) {
          e.preventDefault();
          var mancc = $('input[name="mancc"]').val();
          var fullname = $('input[name="fullname"]').val();
          var numberphone = $('input[name="numberphone"]').val();
          var address = $('input[name="address"]').val();
          var email = $('input[name="email"]').val();
          var status = "update";
          var flag = false;

            if (fullname.length === 0) {
                  document.getElementById('supplier-fullname-error').style.display = 'block';
                  flag = true;
            }
            else 
                        {
                        let ten_regex = /^[AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+ [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+(?: [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]*)*/
                        if (!ten_regex.test(fullname))
                        {
                              document.getElementById('supplier-fullname-error').style.display = 'block';
                              document.getElementById('supplier-fullname-error').innerHTML= 'Tên không hợp lệ';
                              flag = true;
                         }
                         else {
                            document.getElementById('supplier-fullname-error').style.display = 'none';
                        }
                        }
            
            // Phần kiểm tra số điện thoại người dùng
            if (numberphone.length === 0) {
                  document.getElementById('supplier-numberphone-error').style.display = 'block';
                  flag = true;
            }
            else
                        {
                        let phone_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                        if (!phone_regex.test(numberphone))
                        {
                              document.getElementById('supplier-numberphone-error').style.display = 'block';
                              document.getElementById('supplier-numberphone-error').innerHTML= 'Số điện thoại không hợp lệ';
                              flag = true;
                        }
                        else {
                            document.getElementById('supplier-numberphone-error').style.display = 'none';
                        }
                        }
            
            if (address.length === 0) {
                  document.getElementById('supplier-address-error').style.display = 'block';
                  flag = true;
            }
            else {
                document.getElementById('supplier-address-error').style.display = 'none';
            }
            
            if (email.length === 0) {
                  document.getElementById('supplier-email-error').style.display = 'block';
                  flag = true;
            }
            else {
                var mail_regex = /\S+@\S+\.\S+/;
                  if (!mail_regex.test(email))
                  {
                        document.getElementById('supplier-email-error').style.display = 'block';
                        document.getElementById('supplier-email-error').innerHTML= 'Email không hợp lệ';
                        flag = true;
                  }
                  else {
                        document.getElementById('supplier-email-error').style.display = 'none';
                    }
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
                                  url: "../../controller/SupplierController.php",
                                  data:  {
                                        'mancc': mancc,
                                        'fullname':fullname,
                                        'numberphone':numberphone,
                                        'address':address,
                                        'email':email,
                                        'action': status
                                  },
                                    success: function () {
                                        location.href = "/view/admin/index.php?controller=supplier";
                                  }
                            });
                      } else {
                            swal("Your imaginary file is safe!");
                      }
                });

    });
});

$(document).ready(function () {
    $('.btn-delete-supplier').click(function (e) {
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
                                  url: "../../controller/SupplierController.php",
                                  data: {
                                          'ma': deleteid,
                                          'action': status
                                     },
                                    success: function () {
                                          location.reload()
                                    }
                            });
                      } else {
                            swal("Your imaginary file is safe!");
                      }
                });

    });
});