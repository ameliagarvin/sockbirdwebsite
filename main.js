// slide in and out menu

function openNav(){
  document.getElementById("navbarNav").style.width = "250px";
  document.getElementById("main").classList.add("brightness");

  document.getElementById("close").style.display = "flex"; 
var x = document.querySelectorAll(".bar");
var i;
for (i = 0; i < x.length; i++) {
  x[i].classList.add("open");
  if(x[i].classList.contains("open")){
    
  }
}

}
// slide out function
function closeNav(){
  document.getElementById("navbarNav").style.width = "0";
  document.getElementById("main").classList.remove("brightness");
  document.getElementById("close").style.display = "none"; 
  var x = document.querySelectorAll(".bar");
var i;
for (i = 0; i < x.length; i++) {
  x[i].classList.remove("open");
}

}


function closeIfBlur() {
// clicking on brightness

}
window.onload=function(){
var main = document.getElementById("main");
main.addEventListener("click", function() {
  
  if (main.classList.contains("brightness")) {
    document.getElementById("navbarNav").style.width = "0";
    document.getElementById("main").classList.remove("brightness");
    document.getElementById("close").style.display = "none"; 
    var x = document.querySelectorAll(".bar");
  var i;
  for (i = 0; i < x.length; i++) {
    x[i].classList.remove("open");
  }
  }
});
}

//slide in or out

let scrollPos = 0;
const nav = document.querySelector('.social-media');

// add for social media links to appear 
function checkPosition() {
  let windowY = window.scrollY;
  // console.log(scrollPos);
  // console.log(main);
  if (windowY >= 600) {
    // Scrolling UP
    nav.classList.add('is-visible');
    nav.classList.remove('is-hidden');
  } else {
    // Scrolling DOWN
    nav.classList.add('is-hidden');
    nav.classList.remove('is-visible');
  }
  scrollPos = windowY;
}

window.addEventListener('scroll', checkPosition);

// show benefits btn 
function toggleShow(id) {
  var e = document.getElementById(id);
  if(e.style.display == 'block')
  e.style.display = 'none';
else
  e.style.display = 'block';
}

//sticky nav
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


