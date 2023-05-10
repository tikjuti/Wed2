
$(document).ready(function () {
    $('.btn-process-bill').click(function (e) {
          e.preventDefault();
          var process = $(this).val();
          var action = "billstatus";
          swal({
                title: "Bạn chắc chắn chưa?",
                text: "Once processed, you will not be able to recover!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
          })
                .then((willDelete) => {
                      if (willDelete) {
                            $.ajax({
                                  type: "GET",
                                  url: "../../controller/BillController.php",
                                  data: {
                                          'ma': process,
                                          'action': action,
                                          'status': 1
                                     },
                                  success: function () {
                                    //     console.log(ma);
                                    //     if(response == 200){
                                          //     alert("Xóa khách hàng thành công");
                                              window.location.reload();
                                          
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