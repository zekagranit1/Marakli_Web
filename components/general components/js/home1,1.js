$(window).on("scroll touchmove", function() 
{
    if ($(document).scrollTop() >= $("#one").position().top && $(document).scrollTop() < $("#two").position().top  ) 
    {
        $('body').css('background-image', 'url(../../photos/babadimrat.jpg)')
    };
    if ($(document).scrollTop() >= $("#two").position().top && $(document).scrollTop() < $("#three").position().top)
    {
        $('body').css('background-image', 'url(../../photos/28n.jpg)')
    };
   if ($(document).scrollTop() >= $("#three").position().top && $(document).scrollTop() < $("#four").position().top ) 
   {
        $('body').css('background-image', 'url(../../photos/prishtina_marakli.jpg)')
   };
   if ($(document).scrollTop() >= $("#four").position().top) 
   {
        $('body').css('background-image', 'url(../../photos/mali.jpg)')

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
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}