
$(document).ready(function () {
    $('.btn-add-cartimport').click(function (e) {
          e.preventDefault();
          var deleteid = $(this).val();
          var mancc = document.querySelector('.item-ma-ncc').value;
          var status = "addtocart";
            $.ajax({
                    type: "GET",
                    url: "../../controller/ImportController.php",
                    data: {
                            'ma': deleteid,
                            'mancc': mancc,
                            'action': status
                        },
                    success: function () {
                                alert("Đã thêm vào giỏ");
                    }
            });

    });
});
$(document).ready(function () {
    $('.btn-delete-productcart').click(function (e) {
          e.preventDefault();
          swal({
                title: "Bạn chắc chắn chưa?",
                text: "Once deleted, you will not be able to recover!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
          })
                .then((willDelete) => {
                      if (willDelete) {
                        var deleteid = $(this).val();
                        var status = "delete";
                            $.ajax({
                                  type: "GET",
                                  url: "../../controller/ImportController.php",
                                  data:  {
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
    $('.btn-pay-cartimport').click(function (e) {
          e.preventDefault();
          var data = document.querySelectorAll('.change-quanty-cartimport');
          var total = $('input[name="totalPriceImport"]').val();
          var status = "payimport";
          var arrQuantity = [];
          var arrMaSP = [];
          for (let i = 0; i < data.length; i++) {
            arrQuantity.push(data[i].value);
            arrMaSP.push(data[i].dataset.ma);
          }
          swal({
                title: "Bạn chắc chắn chưa?",
                text: "Once paid, you will not be able to recover!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
          })
                .then((willDelete) => {
                      if (willDelete) {
                        var data = document.querySelectorAll('.change-quanty-cartimport');
                            $.ajax({
                                    type: "GET",
                                    url: "../../controller/ImportController.php",
                                    data: {
                                            'quantity': arrQuantity,
                                            'ma': arrMaSP,
                                            'total': total, 
                                             'action': status,
                                        },
                                    success: function () {
                                        location.href = "http://localhost/WEDNANGCAO/view/admin/index.php?controller=import";
                                    }
                            });
                      } else {
                            swal("Your imaginary file is safe!");
                      }
                });

    });
});

$(document).ready(function () {
    $('.change-quanty-cartimport').on('change', () => {
          var data = document.querySelectorAll('.change-quanty-cartimport');
          for (let i = 0; i < data.length; i++) {
            var deleteid = $(data[i]).val();
            var ma = data[i].dataset.ma;
            var status = "changequantity";
            $.ajax({
                    type: "GET",
                    url: "../../controller/ImportController.php",
                    data: {
                            'quantity': deleteid,
                            'ma': ma,
                            'action': status,
                        },
                    success: function () {
                        location.reload();
                    }
            });
          }
    });
});