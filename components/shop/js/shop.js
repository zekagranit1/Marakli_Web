//Get the button
var mybutton = document.getElementById("scrollToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.opacity = 1;
        mybutton.style.transition = '0.5s';
    } else {
        mybutton.style.opacity = 0;
        mybutton.style.transition = '0.5s';
    }
}
var rootElement = document.documentElement

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
    });

}
