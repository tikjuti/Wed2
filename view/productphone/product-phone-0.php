<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body>
  <?php
  require("view/slide/mid_phone_slide.php");
  ?>
  <?php
  foreach ($array as $item) {
  ?>
    <div class="container content-phone"> <a href="#">Trang chủ</a>><a href="#">Điện thoại</a></div>

    <div class="container content-phone product-p">
      <div class="row justify-content-around">
        <div class="col-xs-6 ">
          <div class="content-phone-img">
            <img class="phone-img pb-3 pt-3" src="public/image/<?php echo $item['AnhSP'] ?>">
          </div>
        </div>
        <div class="col-xs-6">
          <div>
            <form method="POST" onsubmit="return checkLogin();" action="index.php?control=giohang&action=addcart&idsanpham=<?php echo $item['MaSP'] ?>">
              <h2 style="text-align:center">
                <?php echo $item['TenSP'] ?>
              </h2>
              <br>
              <b style="font-size:18px">Dung lượng: </b>
              <?php echo $item['DungLuong'] ?>
              <br>
              <b style="font-size:18px">Camera: </b>
              <?php echo $item['Camera'] ?>
              <br>
              <b style="font-size:18px">Chip: </b>
              <?php echo $item['Chip'] ?>
              <hr color="black">
              <p class="price">Giá:
                <?php $item['GiaSP'] ?>VND
              </p>

              <p class="price">
                Số lượng còn lại:
                <?php echo $item['SoLuongSP'] ?>
              </p>
              <div class="price">Số lượng:
                <div class="buttons_added">
                  <!-- <input class="minus is-form" type="button" value="-"> -->
                  <input type="number" min="1" max="50" require="" value="1" name="sl" id="soluong" onchange="checkSoLuong()">
                  <!-- <input class="plus is-form" type="button" value="+"> -->
                </div>
              </div>
              <hr color="black">
              <input id="button-muahang" class="btn btn-primary d-flex justify-content-center" name="themgiohang" type="submit" value="Mua hàng">
              <input class="btn btn-primary d-flex justify-content-center" name="masp" type="hidden" value="<?php echo $item['MaSP'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="tensp" type="hidden" value="<?php echo $item['TenSP'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="dungluong" type="hidden" value="<?php echo $item['DungLuong'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="camera" type="hidden" value="<?php echo $item['Camera'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="chip" type="hidden" value="<?php echo $item['Chip'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="giasp" type="hidden" value="<?php echo $item['GiaSP'] ?>">
              <input class="btn btn-primary d-flex justify-content-center" name="soluongsp" type="hidden" value="<?php echo $item['SoLuongSP'] ?>">

            </form>
          </div>
        </div>
      </div>
    <?php
  }
    ?>
    </div>
</body>

<script>
  function checkSoLuong() {

    var sl = document.getElementById('soluong').value;
    var slsp = <?php echo $item['SoLuongSP'] ?>;
    if (sl > slsp) {
      alert("Số lượng không đủ!")
      return false;
    }
  }
</script>

</html>