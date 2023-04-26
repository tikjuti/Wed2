const imgnumber=document.querySelectorAll('.slider-content-left-top img')
let index=0
const rightbtn=document.querySelector('.fa-chevron-right')
const leftbtn=document.querySelector('.fa-chevron-left')
rightbtn.addEventListener("click",function(){
index=index+1
if(index>imgnumber.length-1)
{
index=0
}
removeactive()
document.querySelector('.slider-content-left-top').style.right=index*100+"%"
imgnumberli[index].classList.add("active")
document.querySelector('.slider-content-left-top').style.right=index*100+"%"
})
leftbtn.addEventListener("click",function(){
index=index-1
if(index<0)
{
index=imgnumber.length-1;
}
removeactive()
document.querySelector('.slider-content-left-top').style.right=index*100+"%"
imgnumberli[index].classList.add("active")
document.querySelector('.slider-content-left-top').style.right=index*100+"%"
})
const imgnumberli=document.querySelectorAll('.slider-content-left-bottom ul li')

imgnumberli.forEach(function(image,index){
image.addEventListener("click",function(){
removeactive()
document.querySelector('.slider-content-left-top').style.right=index*100+"%"
image.classList.add("active")
})
})
function removeactive()
{
let imgactive=document.querySelector('.active')
imgactive.classList.remove("active")
}
function imgauto(){
index=index+1
if(index>imgnumber.length-1)
{
index=0;
}
removeactive()
document.querySelector('.slider-content-left-top').style.right=index*100+"%"
imgnumberli[index].classList.add("active")
}
setInterval(imgauto,5000)
const item=document.querySelectorAll('.card-img-top');
item.forEach(function(item,index){
item.classList.add("p-2");
})