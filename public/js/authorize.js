
$(document).ready(function () {
    $('.btn-delete-authorize').click(function (e) {
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
                                  url: "../../controller/AuthorizationController.php",
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


$(document).ready(function () {
      $('.btn-edit-authorize').click(function (e) {
            e.preventDefault();
            var MaQuyen = $('input[name="ma"]').val();
            var Quyen = $('input[name="name"]').val();
            var arrMaCN = [];
            var arrHD = [];
            var arrData = [];
            var data = document.querySelectorAll('.authorize-content-check');
            for (let i = 0; i < data.length; i++) {
                  arrMaCN.push(data[i].dataset.macn);
                  arrHD.push(data[i].dataset.hd);
                  arrData.push($(data[i]).is(':checked'));
            }
            var status = "update";
            var flag = false;
            if (Quyen.length === 0) {
                  document.getElementById('account-authorize-error').style.display = 'block';
                  flag = true;
            }
            else {
                  document.getElementById('account-authorize-error').style.display = 'none';
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
                                    url: "../../controller/AuthorizationController.php",
                                    data:  {
                                          'MaQuyen':MaQuyen,
                                          'Quyen':Quyen,
                                          'arrMaCN':arrMaCN,
                                          'arrData':arrData,
                                          'arrHD':arrHD,
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
      $('.btn-create-authorize').click(function (e) {
            e.preventDefault();
            var Quyen = $('input[name="name"]').val();
            var arrMaCN = [];
            var arrHD = [];
            var arrData = [];
            var data = document.querySelectorAll('.authorize-content-check');
            for (let i = 0; i < data.length; i++) {
                  arrMaCN.push(data[i].dataset.macn);
                  arrHD.push(data[i].dataset.hd);
                  arrData.push($(data[i]).is(':checked'));
            }
            var status = "store";
            var flag = false;
            if (Quyen.length === 0) {
                  document.getElementById('account-authorize-error-create').style.display = 'block';
                  flag = true;
            }
            else {
                  document.getElementById('account-authorize-error-create').style.display = 'none';
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
                                    url: "../../controller/AuthorizationController.php",
                                    data:  {
                                          'Quyen':Quyen,
                                          'arrMaCN':arrMaCN,
                                          'arrData':arrData,
                                          'arrHD':arrHD,
                                          'action': status
                                    },
                                      success: function () {
                                                location.href = "/view/admin/index.php?controller=authorization";
                                    }
                              });
                        } else {
                              swal("Your imaginary file is safe!");
                        }
                  });
  
      });
  });