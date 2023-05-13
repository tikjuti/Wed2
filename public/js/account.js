$(document).ready(function () {
    $('.btn-create-account').click(function (e) {
          e.preventDefault();
          var username = $('input[name="username"]').val();
          var password = $('input[name="password"]').val();
          var maquyen = document.querySelector('.form-create-account-item').value;
          var status = "store";
          var flag = false;
            if (username.length === 0) {
                  document.getElementById('account-username-error-create').style.display = 'block';
                  flag = true;
            }
            else {
                  document.getElementById('account-username-error-create').style.display = 'none';

            }
            if (password.length === 0) {
                  document.getElementById('account-password-error-create').style.display = 'block';
                  password.focus();
                  flag = true;
            }
            else
                  if (password.length < 8) {
                        document.getElementById('account-password-error-create').style.display = 'block';
                        document.getElementById('account-password-error-create').innerHTML = 'Mật khẩu phải đủ 8 kí tự';
                        flag = true;
                  }
                  else {
                        document.getElementById('account-password-error-create').style.display = 'none';

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
                                  url: "../../controller/AccountController.php",
                                  data:  {
                                        'maquyen':maquyen,
                                        'username':username,
                                        'password':password,
                                        'action': status
                                  },
                                    success: function () {
                                        location.href = "/view/admin/index.php?controller=account";
                                  }
                            });
                      } else {
                            swal("Your imaginary file is safe!");
                      }
                });

    });
});

$(document).ready(function () {
    $('.btn-update-account').click(function (e) {
          e.preventDefault();
          var matk = $('input[name="matk"]').val();
          var username = $('input[name="username"]').val();
          var password = $('input[name="password"]').val();
          var maquyen = document.querySelector('.form-create-account-item').value;
          var status = "update";
          var flag = false;
            if (username.length === 0) {
                  document.getElementById('account-username-error').style.display = 'block';
                  flag = true;
            }
            else {
                  document.getElementById('account-username-error').style.display = 'none';
              }
            if (password.length === 0) {
                  document.getElementById('account-password-error').style.display = 'block';
                  flag = true;
            }
            else
                  if (password.length < 8) {
                        document.getElementById('account-password-error').style.display = 'block';
                        document.getElementById('account-password-error').innerHTML = 'Mật khẩu phải đủ 8 kí tự';
                        flag = true;
                  }
                  else {
                        document.getElementById('account-password-error').style.display = 'none';
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
                                  url: "../../controller/AccountController.php",
                                  data:  {
                                        'matk': matk,
                                        'maquyen':maquyen,
                                        'username':username,
                                        'password':password,
                                        'action': status
                                  },
                                    success: function () {
                                        location.href = "/view/admin/index.php?controller=account";
                                  }
                            });
                      } else {
                            swal("Your imaginary file is safe!");
                      }
                });

    });
});

$(document).ready(function () {
    $('.btn-delete-account').click(function (e) {
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
                                  url: "../../controller/AccountController.php",
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