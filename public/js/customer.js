
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
                                  url: "controller/CustomerController.php",
                                  data: {
                                          'ma': deleteid,
                                          'action': status
                                     },
                                    success: function () {
                                    //     console.log(ma);
                                    //     if(response == 200){
                                                location.reload();
                                    //     }else if(response == 500){
                                    //           swal("Error!", "Somthing went wrong!","error");
                                    //     }
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
            // var formData = $('#form-edit-customer').serialize();
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
                                    url: "controller/CustomerController.php",
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
                                                location.href="http://localhost/WEDNANGCAO/?controller=customer";
                                    }
                              });
                        } else {
                              swal("Your imaginary file is safe!");
                        }
                  });
  
      });
  });