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
  <section class="slider_phone">
    <div class="container">
      <div class="slider-content_phone">
        <div class="slider-content-left_phone">
          <div class="slider-content-left-top-container_phone">
            <div class="slider-content-left-top_phone">
              <a href="#"><img
                  src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/15/638144740085160370_F-H1_800x300.png"
                  alt="thong tin"></a>
              <a href="#"><img
                  src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/28/638155923862871292_F-H1_800x300.png"
                  alt="thong tin"></a>
              <a href="#"><img
                  src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/29/638156814931688580_F-H1_800x300.png"
                  alt="thong tin"></a>
              <a href="#"><img
                  src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/23/638151613183876311_F-H1_800x300.png"
                  alt="thong tin"></a>
              <a href="#"><img
                  src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/26/638154648270220390_F-H1_800x300.png"
                  alt="thong tin"></a>
            </div>
            <div class="slider-content-left-top-icon_phone">
              <i class="fas fa-chevron-left "></i>
              <i class="fas fa-chevron-right"></i>
            </div>
            <div class="slider-content-left-bottom_phone">
              <ul>
                <li><button class="circle active_phone"></button></li>
                <li><button class="circle"></button></li>
                <li><button class="circle"></button></li>
                <li><button class="circle"></button></li>
                <li><button class="circle"></button></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../public/js/javaslidephone.js">
  </script>
  <!-- <script>
    const imgnumberr = document.querySelectorAll('.slider-content-left-top_phone img')
    let indexx = 0
    const rightbtnn = document.querySelector('.fa-chevron-right')
    const leftbtnn = document.querySelector('.fa-chevron-left')
    rightbtnn.addEventListener("click", function () {
      indexx = indexx + 1
      if (indexx > imgnumberr.length - 1) {
        indexx = 0
      }
      removeactive()
      document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
      imgnumberlii[indexx].classList.add("active_phone")
      document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
    })
    leftbtnn.addEventListener("click", function () {
      indexx = indexx - 1
      if (indexx < 0) {
        indexx = imgnumberr.length - 1;
      }
      removeactive()
      document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
      imgnumberlii[indexx].classList.add("active_phone")
      document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
    })
    const imgnumberlii = document.querySelectorAll('.slider-content-left-bottom_phone ul li button')

    imgnumberlii.forEach(function (imagee, indexx) {
      imagee.addEventListener("click", function () {
        removeactive()
        document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
        imagee.classList.add("active_phone")
      })
    })
    function removeactive() {
      let imgactive = document.querySelector('.active_phone')
      imgactive.classList.remove("active_phone")
    }
    function imgauto() {
      indexx = indexx + 1
      if (indexx > imgnumberr.length - 1) {
        indexx = 0
      }
      removeactive()
      document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
      imgnumberlii[indexx].classList.add("active_phone")
    }
    setInterval(imgauto, 5000)
  </script> -->
</body>

</html>