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

// Initialisation des variables
let currentIndex = 0;
const galerieItems = document.querySelectorAll(".galerie-item");
let itemsPerPage = 3;

// Fonction pour mettre à jour le nombre d'éléments visibles selon la largeur de l'écran
function updateItemsPerPage() {
  if (window.innerWidth <= 900) {
    itemsPerPage = 1;
  } else {
    itemsPerPage = 3;
  }
}

// Fonction pour mettre à jour la galerie (affichage des éléments visibles)
function updateGallery() {
  galerieItems.forEach((item, index) => {
    if (index >= currentIndex && index < currentIndex + itemsPerPage) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
}

// Fonction pour passer à l'élément précédent
function precedent() {
  if (currentIndex > 0) {
    currentIndex--;
  } else {
    currentIndex = galerieItems.length - itemsPerPage;
  }
  updateGallery();
}

// Fonction pour passer à l'élément suivant
function suivant() {
  if (currentIndex + itemsPerPage < galerieItems.length) {
    currentIndex++;
  } else {
    currentIndex = 0;
  }
  updateGallery();
}

// Fonction pour réagir au redimensionnement de la fenêtre
function onResize() {
  updateItemsPerPage();
  if (currentIndex + itemsPerPage > galerieItems.length) {
    currentIndex = Math.max(0, galerieItems.length - itemsPerPage);
  }
  updateGallery();
}

// Fonction pour activer le défilement automatique
// function autoScroll() {
//   setInterval(() => {
//     suivant();
//   }, 3000); // Défile toutes les 10 secondes
// }

// Initialisation
window.addEventListener("resize", onResize);
updateItemsPerPage();
updateGallery();
// autoScroll();

//COOKIES BANNER ------------

let popUp = document.getElementById("cookiePopup");

// Quand l'utilisateur clique sur "Accepter"
document.getElementById("acceptCookie").addEventListener("click", () => {
  let d = new Date();
  // Le cookie expire dans 30 jours
  d.setTime(d.getTime() + 30 * 24 * 60 * 60 * 1000);

  // Création du cookie (avec expires et path=/ pour toutes les pages)
  document.cookie = `cookieWebilys=thisIsMyCookie; expires=${d.toUTCString()}; path=/`;

  // Cacher le popup
  popUp.classList.add("hide");
  popUp.classList.remove("show");
});

// Vérifier si le cookie est présent
const checkCookie = () => {
  let cookies = document.cookie.split("; ");
  let cookieExists = cookies.some((cookie) =>
    cookie.startsWith("cookieWebilys=")
  );

  if (cookieExists) {
    // Cacher le popup si le cookie existe
    popUp.classList.add("hide");
    popUp.classList.remove("show");
  } else {
    // Afficher le popup si le cookie n'existe pas
    popUp.classList.add("show");
    popUp.classList.remove("hide");
  }
};

// Vérifier le cookie à chaque chargement de la page
window.onload = () => {
  setTimeout(() => {
    checkCookie();
  }, 2000);
};

//----------FORMULAIRE DE CONTACT
$(function () {
  $("#contact-form").submit(function (e) {
    e.preventDefault(); // Empêche le rechargement de la page

    $(".comments").empty(); // Vide les messages d'erreur
    const submitButton = $("#contact-form button[type=submit]");
    submitButton.prop("disabled", true); // Désactive le bouton pour éviter les soumissions multiples

    const postData = $("#contact-form").serialize(); // Sérialise les données du formulaire

    $.ajax({
      type: "POST",
      url: "./php/contact.php", // Chemin vers le fichier PHP
      data: postData,
      dataType: "json",
      success: function (result) {
        if (result.isSucces) {
          // Envoi réussi : affiche un message de succès
          $("#contact-form").append(
            "<p class='thank-you'>Votre message a bien été envoyé. Merci de nous avoir contactés !</p>"
          );
          $("#contact-form")[0].reset(); // Réinitialise le formulaire
        } else {
          // Affiche les messages d'erreur sous les champs concernés
          if (result.nameError) $("#nameError").html(result.nameError);
          if (result.emailError) $("#emailError").html(result.emailError);
          if (result.telephoneError)
            $("#telephoneError").html(result.telephoneError);
          if (result.messageError) $("#messageError").html(result.messageError);
          if (result.checkedAcceptError)
            $("#checkedAcceptError").html(result.checkedAcceptError);
        }
      },
      error: function () {
        alert("Une erreur est survenue. Veuillez réessayer plus tard.");
      },
      complete: function () {
        submitButton.prop("disabled", false); // Réactive le bouton d'envoi
      },
    });
  });
});
