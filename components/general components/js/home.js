// window.onload = scrolli();
// function scrolli() {

// var photos = document.getElementsByClassName('img');
// var story = document.getElementById('story')
// // console.log(photos);

//     if (!photos[0].classList.contains('show')) {
//         photos[0].classList.add('show');
//     }

//     for (var photo of photos) {

//         if (!photo.classList.contains('show')) {
//             photo.classList.add('hide');
//         }

//     }
//     $(window).scroll(function (){
//         for (var photo of photos) {
//             if (photo.classList.contains('show')) {
//                 photo.classList.remove('show')
//                 photo.classList.add('hide')
//                 photo.nextElementSibling.classList.remove('hide')
//                 photo.nextElementSibling.classList.add('show')
//             }
//         }
//     })

// }
//-------PARALLAX SCROLL-------- //

const parallaxContainer = document.querySelector(".parallax-window");
const parallaxTitle = document.querySelector(".parallax-text h1");
const parallaxDescription = document.querySelector(".parallax-text h3");
parallaxContainer.scrolltop = 0;

var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slides");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

var scrollHandler = function () {
  let scrollTopParallax = parallaxContainer.scrollTop || parallaxContainer.scrollTop;

  if (scrollTopParallax < 50) {
    currentSlide(1);
    parallaxTitle.innerHTML = "Welcome to my website.";
    parallaxDescription.innerHTML =
      "Thank you for taking time to visit. Feel free to explore and check out some of the projects I am working on.";
  }
  if (scrollTopParallax > 50) {
    currentSlide(2);
    parallaxTitle.innerHTML = "What I do";
    parallaxDescription.innerHTML =
      "My name is Lache Porter, and Im a developer. I enjoy creating experiences and solving problems for users. For me, development is about thinking in different and exciting ways. ";
  }
};
parallaxContainer.addEventListener("scroll", scrollHandler);