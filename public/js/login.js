var x=document.getElementById('login-register');
var y=document.getElementById('register');
var z=document.getElementById('btn-register');
function register()
{
    x.style.left='-400px';
    y.style.left='225px';
    z.style.left='110px';
}
function login()
{
    x.style.left='219px';
    y.style.left='900px';
    z.style.left='0px';
}
let exit=document.querySelector('.icon-exit');
exit.addEventListener('click',function(){
let click_exit= document.querySelector('.full-page-register');
click_exit.classList.add("full-page-none");
click_exit.classList.remove("full-page-block");
});
  let modal = document.querySelector('.loginbtn');
modal.addEventListener('click',function(){ 
let click= document.querySelector('.full-page-register');
click.classList.add("full-page-block");
click.classList.remove("full-page-none");
 
}) 