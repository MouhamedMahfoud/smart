$(function () {
  AOS.init();
  if ($(".owl-2").length > 0) {
    $(".owl-2").owlCarousel({
      center: false,
      items: 1,
      loop: true,
      stagePadding: 0,
      margin: 20,
      smartSpeed: 1000,
      autoplay: true,
      nav: true,
      dots: true,
      pauseOnHover: false,
      responsive: {
        600: {
          margin: 20,
          nav: true,
          items: 2,
        },
        1000: {
          margin: 20,
          stagePadding: 0,
          nav: true,
          items: 3,
        },
      },
    });
  }
  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight();

  var carousel = function () {
    $(".home-slider").owlCarousel({
      loop: true,
      autoplay: true,
      margin: 0,
      animateOut: "fadeOut",
      animateIn: "fadeIn",
      nav: true,
      dots: true,
      autoplayHoverPause: false,
      items: 1,
      navText: [
        "<span class='ion-ios-arrow-back'></span>",
        "<span class='ion-ios-arrow-forward'></span>",
      ],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        },
      },
    });
  };
  carousel();


});

function overlayOpen(imgId, modalId){
  openModal(imgId, modalId);
}
function openModal(imgId, modalId) {
   var modal = document.getElementById(modalId);
   var img = document.getElementById(imgId);
   var modalImg = modal.getElementsByClassName("modal-contentimg")[0];

   modal.style.display = "block";
   modalImg.src = img.src;
}


function closeModal(modalId) {
   var modal = document.getElementById(modalId);
   modal.style.display = "none";
}

var imageContainers = document.querySelectorAll('.service-img');
imageContainers.forEach(function (container, index) {
   var img = container.querySelector('img');
   var modalId = 'myModal' + (index + 1);
   var captionId = 'caption' + (index + 1);

   img.onclick = function () {
      openModal('myImg' + (index + 1), modalId, captionId);
   };

  //  var closeButton = document.querySelector('#' + modalId + ' .close');

  //  closeButton.onclick = function () {
  //     closeModal(modalId);
  //  };

   window.onclick = function (event) {
      if (event.target.classList.contains('modal')) {
         closeModal(event.target.id);
      }
   };
});

// ******************* start sidebar1 createlogo  ********************* //
// mySlidesModele1
    let slideIndex = 1;
    showSlides(slideIndex);
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    function showSlides(n) {
      let i;
        let slides = document.getElementsByClassName("mySlidesModele1");

      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
    }

// mySlidesModele2
let slideIndex2 = 1;
showSlides1(slideIndex2);
function currentSlide1(n) {
    showSlides1(slideIndex2 = n);
}
function showSlides1(n) {
    let i;
    let slides = document.getElementsByClassName("mySlidesModele2");

    if (n > slides.length) { slideIndex2 = 1 }
    if (n < 1) { slideIndex2 = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex2 - 1].style.display = "block";
}

// mySlidesModele3 currentSlide4
let slideIndex3 = 1;
showSlides3(slideIndex3);
function currentSlide3(n) {
    showSlides3(slideIndex3 = n);
}
function showSlides3(n) {
    let i;
    let slides = document.getElementsByClassName("mySlidesModele3");

    if (n > slides.length) { slideIndex3 = 1 }
    if (n < 1) { slideIndex3 = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex3 - 1].style.display = "block";
}

// mySlidesModele4
let slideIndex4 = 1;
showSlides4(slideIndex4);
function currentSlide4(n) {
    showSlides4(slideIndex4 = n);
}
function showSlides4(n) {
    let i;
    let slides = document.getElementsByClassName("mySlidesModele4");

    if (n > slides.length) { slideIndex4 = 1 }
    if (n < 1) { slideIndex4 = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex4 - 1].style.display = "block";
}

// ******************* end sidebar1 createlogo  ********************* //
