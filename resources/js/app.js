require("./bootstrap");
import Flickity from "flickity";

const cardBtn = document.querySelectorAll(".toggle-modal");

cardBtn.forEach(function (btn) {
  btn.onclick = function () {
    var modal = btn.getAttribute("data-modal");
    var element = document.getElementById(modal);
    element.classList.toggle("is-active");
  };
});

var checkCarousel = document.getElementsByClassName("carousel");
if (checkCarousel.length > 0) {
  var flkty = new Flickity(".carousel", {
    autoPlay: true,
    lazyLoad: true,
    initialIndex: 1,
  });
}
