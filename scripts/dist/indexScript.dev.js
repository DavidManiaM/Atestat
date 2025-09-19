"use strict";

var carrContainer = document.querySelector('#carrDiv');
var images = document.querySelectorAll('.carrouselImg');
var totalSlides = images.length;
var currentIndex = 0;
var timer = 0;
var shadows = document.querySelectorAll(".shadow");

function nextSlide() {
  currentIndex = (currentIndex + 1 + totalSlides) % totalSlides;
  updateCarousel();
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
  updateCarousel();
}

function updateCarousel() {
  var translateValue = -currentIndex * (100 / totalSlides) + '%';
  carrContainer.style.transform = 'translateX(' + translateValue + ')';
}

setInterval(function () {
  timer += 100;

  if (timer >= 3000) {
    timer = 0;
    nextSlide();
  }
}, 100);

var _loop = function _loop(i) {
  shadows[i].addEventListener("mousedown", function (e) {
    console.log(e.offsetX);

    if (i == 0) {
      prevSlide();
      timer = 0;
    } else if (i == 1) {
      nextSlide();
      timer = 0;
    }
  });
};

for (var i = 0; i < shadows.length; i++) {
  _loop(i);
}

var selectionDiv = document.querySelector("#selectionDiv");
var imgBorders = document.querySelectorAll(".imgBorder");
var openedImg = null;

var _loop2 = function _loop2(_i) {
  imgBorders[_i].addEventListener("mousedown", function (e) {
    if (_i != openedImg) {
      imgBorders[_i].style.width = 75 + "%";

      for (var j = 0; j < imgBorders.length; j++) {
        if (_i != j) imgBorders[j].style.width = 130 + "px";
      }

      openedImg = _i;
    } else {
      for (var _j = 0; _j < imgBorders.length; _j++) {
        imgBorders[_j].style.width = 330 + "px";
      }
    }
  });
};

for (var _i = 0; _i < imgBorders.length; _i++) {
  _loop2(_i);
}