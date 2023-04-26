const imgnumberr = document.querySelectorAll('.slider-content-left-top_phone img')
    let indexx = 0
    const rightbtnn = document.querySelector('.fa-chevron-right')
    const leftbtnn = document.querySelector('.fa-chevron-left')
    rightbtnn.addEventListener("click", function () {
      indexx = indexx + 1
      if (indexx > imgnumberr.length - 1) {
        indexx = 0
      }
      removeactivee()
      document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
      imgnumberlii[indexx].classList.add("active_phone")
      document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
    })
    leftbtnn.addEventListener("click", function () {
      indexx = indexx - 1
      if (indexx < 0) {
        indexx = imgnumberr.length - 1;
      }
      removeactivee()
      document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
      imgnumberlii[indexx].classList.add("active_phone")
      document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
    })
    const imgnumberlii = document.querySelectorAll('.slider-content-left-bottom_phone ul li button')

    imgnumberlii.forEach(function (image, index) {
      image.addEventListener("click", function () {
        removeactivee()
        document.querySelector('.slider-content-left-top_phone').style.right = index * 100 + "%"
        image.classList.add("active_phone")
      })
    })
    function removeactivee() {
      let imgactive = document.querySelector('.active_phone')
      imgactive.classList.remove("active_phone")
    }
    function imgautoo() {
      indexx = indexx + 1
      if (indexx > imgnumberr.length - 1) {
        indexx = 0
      }
      removeactivee()
      document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
      imgnumberlii[indexx].classList.add("active_phone")
    }
    setInterval(imgautoo, 5000)
