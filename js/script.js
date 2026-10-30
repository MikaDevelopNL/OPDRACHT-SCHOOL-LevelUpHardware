const hamburgerMenu = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburgerMenu.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});

navLinks.querySelectorAll("a").forEach((link) => {
  link.addEventListener("click", () => {
    navLinks.classList.remove("active");
  });
});
