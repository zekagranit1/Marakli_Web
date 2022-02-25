$(window).on("scroll touchmove", function() 
{
    if ($(document).scrollTop() >= $("#one").position().top && $(document).scrollTop() < $("#two").position().top  ) 
    {
        $('body').css('background-image', 'url(../../photos/bg1.jpg)')
    };
    if ($(document).scrollTop() >= $("#two").position().top && $(document).scrollTop() < $("#three").position().top)
    {
        $('body').css('background-image', 'url(../../photos/bg2.jpg)')
    };
   if ($(document).scrollTop() >= $("#three").position().top && $(document).scrollTop() < $("#four").position().top ) 
   {
        $('body').css('background-image', 'url(../../photos/bg3.jpg)')
   };
   if ($(document).scrollTop() >= $("#four").position().top) 
   {
        $('body').css('background-image', 'url(../../photos/bg4.jpg)')

   };
   if ($(document).scrollTop() >= ($("#cave").position().top )) 
   {
    $('body').css('background-image', 'none')
    

   };


});

window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 150;
  document.getElementById("myBar").style.width = scrolled + "%";

// nav bar scroll
var active = document.getElementsByClassName('active')
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "5px 5px";
    document.getElementById("navbar").style.background = "#f1f1f1b4";
    document.getElementById("logo").style.fontSize = "25px";
    document.getElementById("logo-pic").style.height = "50px";
    document.getElementById("nav-holder").style.marginTop = "0";
    active[0].style.fontSize = '18px'
} else {
    document.getElementById("navbar").style.padding = "20px 20px";
    document.getElementById("navbar").style.background = "#f1f1f1";
    document.getElementById("logo").style.fontSize = "35px";
    document.getElementById("logo-pic").style.height = "70px";
    document.getElementById("nav-holder").style.marginTop = "12px";
    active[0].style.fontSize = '25px'
  }
}

// qita okd osht per slider te teamit

var galleryList = document.getElementsByClassName('gallery-cell')
function prev() {
    galleryList[galleryList.length - 1].classList.remove('hiden')
    galleryList[galleryList.length - 1].after(galleryList[0])
    galleryList[0].classList.remove('hidden')
    galleryList[0].classList.add('hiden')

}
function next() {

    galleryList[0].classList.remove('hiden')
    galleryList[0].before(galleryList[galleryList.length - 1])
    galleryList[galleryList.length - 1].classList.remove('hidden')
    galleryList[galleryList.length - 1].classList.add('hiden')

}