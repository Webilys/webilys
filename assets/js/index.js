const nav = document.querySelector("nav");
const openIcon = document.getElementById("openIcon");
const closeIcon = document.getElementById("closeIcon");

function openNav() {
  openIcon.style.display = "none";
  closeIcon.style.display = "block";
  nav.style.display = "block";
}

function closeNav() {
  openIcon.style.display = "block";
  closeIcon.style.display = "none";
  nav.style.display = "none";
}

if (window.innerWidth <= 900) {
  closeNav();
}

// GALERIE DU PORTFOLIO

let currentIndex = 0; // Index de départ
const galerieItems = document.querySelectorAll(".galerie-item");
const itemsPerPage = 3; // Nombre d'éléments visibles

// Fonction pour mettre à jour la galerie (affichage des 3 éléments)
function updateGallery() {
  galerieItems.forEach((item, index) => {
    if (index >= currentIndex && index < currentIndex + itemsPerPage) {
      item.style.display = "block"; // Affiche les éléments dans la plage visible
    } else {
      item.style.display = "none"; // Masque les éléments hors de la plage
    }
  });
}

// Fonction pour passer à l'élément précédent
function precedent() {
  if (currentIndex > 0) {
    currentIndex--; // Décale d'une image en arrière
  } else {
    currentIndex = galerieItems.length - itemsPerPage; // Retourne à la fin si au début
  }
  updateGallery();
}

// Fonction pour passer à l'élément suivant
function suivant() {
  if (currentIndex + itemsPerPage < galerieItems.length) {
    currentIndex++; // Décale d'une image en avant
  } else {
    currentIndex = 0; // Retourne au début si à la fin
  }
  updateGallery();
}

// Fonction pour activer le défilement automatique
// function autoScroll() {
//   setInterval(() => {
//     suivant();
//   }, 10000); // Défile toutes les 10 secondes
// }

// Initialisation
updateGallery();
