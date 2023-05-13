<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

</head>

<body>
  <div class="container">
    <div class="box-form">
      <div class=" container box-form-model">
        <div class=" d-flex justify-content-center box-form-model-shadow">
          <form class=" box-form-content m-3">
            <h2 class="text-center">Đăng Ký Tài Khoản</h2>
            <div class="form-group">
              <label for="form-name">Họ và tên</label>
              <input type="text" name="" id="form-name" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="form-user">Tài Khoản</label>
              <input type="text" class="form-control" name="" id="form-user" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <label for="form-password-register">Mật Khẩu</label>
              <input type="password" class="form-control" name="" id="form-password-register" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <label for="form-password-comfirm-register">Xác nhận mật khẩu</label>
              <input type="password" class="form-control" name="" id="form-password-comfirm-register" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <label for="form-email">Email</label>
              <input type="email" class="form-control" name="" id="form-email" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
              <label for="form-number">Số điện thoại</label>
              <input type="tel" class="form-control" name="" id="form-number" aria-describedby="helpId" placeholder="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            </div>
            <div class="form-group">
              <label for="gender">Ngày sinh</label>
              <input type="date" name="gender" />
            </div>
            <div class="form-group">
              <label for="form-address">Địa chỉ</label>
              <input type="email" class="form-control" name="" id="form-address" aria-describedby="helpId" placeholder="">
            </div>
            <input type="submit" value="Đăng ký" class="btn btn-primary btn-block">
          </form>
        </div>
      </div>
    </div>
    <section class="slider">
      <div class="container">
        <div class="slider-content">
          <div class="slider-content-left">
            <div class="slider-content-left-top-container">
              <div class="slider-content-left-top">
                <a href="#"><img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/15/638144740085160370_F-H1_800x300.png" alt="thong tin"></a>
                <a href="#"><img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/28/638155923862871292_F-H1_800x300.png" alt="thong tin"></a>
                <a href="#"><img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/29/638156814931688580_F-H1_800x300.png" alt="thong tin"></a>
                <a href="#"><img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/23/638151613183876311_F-H1_800x300.png" alt="thong tin"></a>
                <a href="#"><img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/26/638154648270220390_F-H1_800x300.png" alt="thong tin"></a>
              </div>
              <div class="slider-content-left-top-icon">
                <i class="fas fa-chevron-left "></i>
                <i class="fas fa-chevron-right"></i>
              </div>
            </div>

            <div class="slider-content-left-bottom">
              <ul>
                <li class="active">Hot Nhất</li>
                <li>Khuyến Mãi</li>
                <li>Sản Phẩm Apple</li>
                <li>Sản Phẩm Mới</li>
                <li>Sam Sung</li>
              </ul>
            </div>
          </div>
          <div class="slider-content-right">
            <div class="right">
              <img src="https://images.fpt.shop/unsafe/fit-in/385x100/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/2/1/638108452578436423_F-H2_385x100.png" alt="thong tin">
            </div>
            <div class="right">
              <img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/5/10/638193066957212896_F-H1_800x300.jpg" alt="thong tin">
            </div>
            <div class="right">
              <img src="https://images.fpt.shop/unsafe/fit-in/385x100/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/5/8/638191457114237037_F-H2_385x100.png" alt="thong tin">
            </div>
            <div class="right">
              <img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/5/7/638190946034950211_F-H1_800x300.png" alt="thong tin">
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container pr-0 pl-0">
      <?php
      $array = getCategory();
      foreach ($array as $item) {
        $i = 1;
      ?>
        <div class="container-fluid pr-0 pl-0 mb-4 mt-2 compoment ">
          <div class="mb-3 pt-3 d-flex justify-content-between">
            <h1 class="h2 ml-3">Điện thoại
              <?php echo ($item['TenLoaiSP']) ?>
            </h1>
            <a href="index.php?control=dienthoai&id=<?php echo ($item['MaLoaiSP']) ?>" class="align-midldee">Xem thêm</a>
          </div>
          <div>
            <div class="product_slide_content">
              <?php
              $product = getnamecodeproduct($item['MaLoaiSP']);
              foreach ($product as $name) {
                if ($i < 5) {
              ?>
                  <div class="card mr-0" style="width: 25%;">
                    <a href="index.php?control=sanphamdienthoai&id= <?php echo $name['MaSP'] ?> style=" width:100%">
                      <img class="card-img-top" src="public/image/<?php echo $name['AnhSP'] ?>" alt="Card image cap">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title"><a href="#">
                          <?php echo $name['TenSP'] ?>
                        </a></h5>
                      <div class="card-text"><span>
                          <?php echo $name['ManHinh'] ?>
                        </span></div>
                      <div class="card-text mt-3 mb-2">
                        <div class="btn btn-primary btn-memory">
                          <?php echo $name['DungLuong'] ?>
                        </div>
                      </div>
                      <p class="card-text product">
                        <?php echo $name['GiaSP'] ?>
                      </p>
                      <a href="index.php?control=sanphamdienthoai&id=<?php echo ($name['MaSP']) ?>" class="btn btn-primary d-flex justify-content-center">Mua ngay</a>
                    </div>
                  </div>
              <?php
                  $i++;
                } else {
                  $i++;
                }
              }
              ?>
            </div>
          </div>

        </div>
      <?php
        $i = 1;
      }
      ?>
    </div>

  </div>
  <script src="public/js/slidecontent.js">
  </script>
</body>

</html>