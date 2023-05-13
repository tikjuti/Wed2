
// var menu = document.getElementById('category_list').display = none;
let num = 0;
var menuBtn = document.querySelector('.menu-btn');
menuBtn.addEventListener('click',function(){
      if(num == 0){
            document.getElementById("category_list").style.display = "none";
            num++;
      }else{
            document.getElementById("category_list").style.display = "block";
            num = 0;
      }
})
