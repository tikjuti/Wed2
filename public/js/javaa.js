const btnbar=document.querySelector('.bar');
btnbar.addEventListener("click",function(){
  const menu=document.querySelector('.menu-left');
  menu.classList.toggle("component-block");
})
//slide content total



//  slide content mid phone
// const imgnumberr = document.querySelectorAll('.slider-content-left-top_phone img')
//     let indexx = 0
//     const rightbtnn = document.querySelector('.fa-chevron-right')
//     const leftbtnn = document.querySelector('.fa-chevron-left')
//     rightbtnn.addEventListener("click", function () {
//       indexx = indexx + 1
//       if (indexx > imgnumberr.length - 1) {
//         indexx = 0
//       }
//       removeactivee()
//       document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
//       imgnumberlii[indexx].classList.add("active_phone")
//       document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
//     })
//     leftbtnn.addEventListener("click", function () {
//       indexx = indexx - 1
//       if (indexx < 0) {
//         indexx = imgnumberr.length - 1;
//       }
//       removeactivee()
//       document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
//       imgnumberlii[indexx].classList.add("active_phone")
//       document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
//     })
//     const imgnumberlii = document.querySelectorAll('.slider-content-left-bottom_phone ul li button')

//     imgnumberlii.forEach(function (image, index) {
//       image.addEventListener("click", function () {
//         removeactivee()
//         document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
//         image.classList.add("active_phone")
//       })
//     })
//     function removeactivee() {
//       let imgactive = document.querySelector('.active_phone')
//       imgactive.classList.remove("active_phone")
//     }
//     function imgautoo() {
//       indexx = indexx + 1
//       if (indexx > imgnumberr.length - 1) {
//         indexx = 0
//       }
//       removeactivee()
//       document.querySelector('.slider-content-left-top_phone').style.right = indexx * 100 + "%"
//       imgnumberlii[indexx].classList.add("active_phone")
//     }
//     setInterval(imgautoo, 5000)


// const card = document.querySelectorAll('.card');
// const itemm = document.querySelectorAll('.card-img-top');
// itemm.forEach(function (item, index) {
//   item.classList.add("p-2");
// })
// card.forEach(function (card, index) {
//   card.classList.add("m-3");
// })
// function validateForm() {
// var fname = document.forms["contactForm"]["fname"].value;
// // var fname = document.getElementById("fname").value;
// var sname = document.forms["contactForm"]["sname"].value;
// // var sname = document.getElementById("sname").value;
// var validate = document.forms["contactForm"]["validate"].value;
// // var validate = document.getElementById("validate").value;

// if (fname == null || fname == "") {
// alert("First name must be filled out");
// return false;
// } else if (sname == null || sname == "") {
// alert("Last name must be filled out");
// return false;
// } else if (isNaN(validate) || validate != 6) {
// alert("You're either a spammer or can't add");
// return false;
// }
// }
// const form=document.querySelector('.card-img-top');
// form.
