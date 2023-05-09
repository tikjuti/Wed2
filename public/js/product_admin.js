// Xử lý giữ lại giá trị trên combobox
$(document).ready(function () {
      var active = location.search;
      $('#id-filter option[value="' + active + '"]').attr('selected', 'selected');
});

//Xử lý lấy hiển thị giá trị trên url
$('.select-filter').change(function () {
      var value = $(this).find(':selected').val();
      // console.log(value);
      // alert(value);


      if (value != 0) {
            var url = value;
            window.location.replace(url);
      } else {
            alert('Hãy lọc!');
      }

});

//Xử lý xóa sản phẩm 
$(document).ready(function () {
      $('.btn-delete-product').click(function (e) {
            e.preventDefault();
            var deleteid = $(this).val();
            // alert(deleteid);
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
                                    url: "../../controller/ProductController.php",
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

// Kiểm tra form thêm sản phẩm
$(document).ready(function () {
      $('#form-create-product').submit(function (e) {
            e.preventDefault();
            //lấy giá trị
            var tenSP = $('#txtTenSP').val();
            var soLuong = $('#txtSoLuong').val();
            var anhSP = $('#txtAnhSP').val();
            var giaSP = $('#txtGiaSP').val();
            var manHinh = $('#txtManHinh').val();
            var camera = $('#txtCamera').val();
            var dungLuong = $('#txtDungLuong').val();
            var chip = $('#txtChip').val();

            // alert(tenSP);
            //kiểm tra dữ liệu nhập vào
            if (tenSP == '') {
                  alert("Vui lòng nhập tên sản phẩm");
                  return false;
            }

            if (anhSP == '') {
                  alert("Vui lòng nhập số lượng sản phẩm");
                  return false;
            }

            if (soLuong == '') {
                  alert("Vui lòng nhập số lượng sản phẩm");
                  return false;
            }

            if (giaSP == '') {
                  alert("Vui lòng nhập giá sản phẩm");
                  return false;
            }

            if (manHinh == '') {
                  alert("Vui lòng nhập màn hình sản phẩm");
                  return false;
            }

            if (camera == '') {
                  alert("Vui lòng nhập màn hình sản phẩm");
                  return false;
            }

            if (dungLuong == '') {
                  alert("Vui lòng nhập dung lượng sản phẩm");
                  return false;
            }

            if (chip == '') {
                  alert("Vui lòng nhập chip sản phẩm");
                  return false;
            }


            this.submit();
      });
});



// Kiểm tra form lọc theo giá sản phẩm sản phẩm
$(document).ready(function () {
      $('#filter-price').submit(function (e) {
            e.preventDefault();
            //lấy giá trị
            var max_price = $('#max').val();
            var max_price = $('#min').val();


            //kiểm tra dữ liệu nhập vào
            if (max_price == '' && max_price == '') {
                  alert("Vui lòng nhập giá để lọc");
                  return false;
            }

            this.submit();
      });
});


