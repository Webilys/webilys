const nav = document.querySelector("nav");
const openIcon = document.getElementById("openIcon");
const closeIcon = document.getElementById("closeIcon");

function openNav() {
  openIcon.style.display = "none";
  closeIcon.style.display = "block";
  nav.style.display = "grid";
}

function closeNav() {
  openIcon.style.display = "block";
  closeIcon.style.display = "none";
  nav.style.display = "none";
}

if (window.innerWidth <= 900) {
  closeNav();
}
