<?php

?>
<br>
<br>
<?php

?>
<div class="container content-phone"> <a href="#">Trang chủ</a>><a href="#">Giỏ hàng</a></div>
<div class="container justify-content-center w-50 mb-3">
  <div>
    <div>

      <table class="w-100" border="1">
        <tr>
          <th>STT</th>
          <th>Mã Sản Phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Số lượng</th>
          <!-- <th>Hình ảnh</th> -->
          <th>Giá sản phẩm</th>
          <th>Thành tiền</th>
        </tr>
        <?php
        if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
          $i = 0;
          $tongcong = 0;
          ?>
          <?php
          foreach ($_SESSION['giohang'] as $item) {

            $thanhtien = $item[2] * $item[3];

            $tongcong = $tongcong + $thanhtien;
            ?>
            <tr>
              <td>
                <?php echo ($i + 1) ?>
              </td>
              <td>
                <?php echo $item[0] ?>
              </td>
              <td>
                <?php echo $item[1] ?>
              </td>
              <td>
                <?php echo $item[3] ?>
              </td>
              <td>
                <?php echo number_format($item[2], 0, ',', '.') . 'vnđ'; ?>
              </td>
              <td>
                <?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?>
              </td>
              <td><a href="index.php?control=giohang&action=delcartproduct&i=<?php echo ($i) ?>">Xóa</a></td>
            </tr>

            <?php
            $i++;
          }
          ?>

          <tr>
            <td colspan="8">
              <p style="">Tổng tiền:
                <?php echo ($tongcong) ?>
              </p>
              <p style=""><a href="index.php?control=giohang&action=delcart">Xóa tất cả</a></p>
            </td>
            <?php
        } else {
          ?>
          </tr>

          <tr>
            <td colspan="8">
              <p style="">Hiện tại giỏ hàng trống</p>

            </td>
          </tr>
          <?php
        }
        ?>
        <tr>
          <td colspan="8">
            <a href="index.php?control=sanpham" style="">Tiếp tục mua hàng</a>

          </td>
        </tr>
      </table>

    </div>
    <hr>
    <div>
      <h5 class="text-center">Thông tin khách hàng</h5>
    </div>
    <div>
      <form action="index.php?list=thanhtoan" method="POST">
        <input type="hidden" name="tongdonhang" value="<?php echo ($tongcong) ?>">
        <div class="form-group">
          <label for="form-name">Họ và tên</label>
          <input type="text" name="hoten" id="form-name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="form-number">Số điện thoại</label>
          <input type="tel" class="form-control" name="phone" id="form-number" aria-describedby="helpId" placeholder="">
        </div>

        <div class="form-group">
          <label for="form-address">Địa chỉ</label>
          <input type="text" class="form-control" name="diachi" id="form-address" aria-describedby="helpId"
            placeholder="">
        </div>

    </div>
    <hr>
    <h4>Tổng tiền:
      <?php echo ($tongcong) ?>
    </h4>
    <div> <input name="thanhtoan" type="submit" class="btn btn-primary w-100  " value="Thanh toán"></div>
    </form>
  </div>
</div>
</body>

</html>