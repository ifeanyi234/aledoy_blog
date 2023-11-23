const closeBtn = document.querySelector(".close_btn");
const hamburgerMenu = document.querySelector(".hamburger");
const navBar = document.querySelector(".nav");

hamburgerMenu.addEventListener("click", function () {
  navBar.classList.add("active");
});
closeBtn.addEventListener("click", function () {
  navBar.classList.remove("active");
});
