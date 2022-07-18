let logo = document.getElementById('logo');

window.addEventListener('scroll', function(e) {
  if(window.scrollY >= 1){
    smallNav.style.top = 0;
    smallNav.style.background = 'rgba(255,255,255,0.6) !important';
    logo.setAttribute("width","100px")
  }
  else{
    smallNav.style.top = '54px';
    logo.setAttribute("width","150px");
  }

});


let x = document.querySelector(".loader");
x.addEventListener("webkitAnimationEnd", myEndFunction);
x.addEventListener("animationend", myEndFunction);

function myEndFunction(e) {  
  e.target.parentNode.removeChild(e.target);
}
