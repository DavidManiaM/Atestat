"use strict";

var arrow = document.querySelector("#arrow");
arrow.addEventListener("click", function (e) {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});