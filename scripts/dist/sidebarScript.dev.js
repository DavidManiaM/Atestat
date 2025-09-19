"use strict";

var menuIcon = document.querySelector("#menuIcon");
var sidebar = document.querySelector("#sidebar");
var body = document.querySelector("body");
var mouseTracker = {
  x: 0,
  y: 0
};
var header = document.querySelector("header");
var mouseTimer = 500;
setInterval(function () {
  mouseTimer += 100;
}, 100);
window.addEventListener("mousemove", function (e) {
  mouseTracker.x = e.clientX;
  mouseTracker.y = e.clientY;

  if (mouseTracker.x < 5 && mouseTracker.y >= header.clientHeight && mouseTimer >= 500) {
    if (sidebar.classList.contains("closed")) {
      sidebar.classList.remove("closed");
      sidebar.classList.add("open");
      mouseTimer = 0;
    } else if (sidebar.classList.contains("open")) {
      sidebar.classList.remove("open");
      sidebar.classList.add("closed");
      mouseTimer = 0;
    }
  }
});
menuIcon.addEventListener("mousedown", function (e) {
  if (sidebar.classList.contains("open")) {
    sidebar.classList.remove("open");
    sidebar.classList.add("closed");
  } else if (sidebar.classList.contains("closed")) {
    sidebar.classList.remove("closed");
    sidebar.classList.add("open");
  }
});
var sidebarRows = document.querySelectorAll(".sidebarRow");

var _loop = function _loop(i) {
  sidebarRows[i].addEventListener("mousedown", function (e) {
    if (i == 0) {
      window.location.href = "../php/index.php";
    }

    if (i == 1) {
      window.location.href = "../php/magazin.php";
    }

    if (i == 2) {
      window.location.href = "../php/colectii.php";
    }

    if (i == 3) {
      window.location.href = "../php/contact.php";
    }
  });
};

for (var i = 0; i < sidebarRows.length; i++) {
  _loop(i);
}

var closeSidebars = document.getElementsByClassName("closeSidebar");

for (var _i = 0; _i < closeSidebars.length; _i++) {
  closeSidebars[_i].addEventListener("mousedown", function (e) {
    if (sidebar.classList.contains("open")) {
      sidebar.classList.remove("open");
      sidebar.classList.add("closed");
    }
  });
}