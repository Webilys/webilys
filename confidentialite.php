<?php
if (!isset($_COOKIE['cookieWebilys'])) {
    // Si le cookie n'existe pas, afficher le popup
    $showPopup = true;
} else {
    // Si le cookie existe, ne pas afficher le popup
    $showPopup = false;
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-1N9RTFVQX0"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-1N9RTFVQX0");
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Politique de Confidentialité - Webilys</title>
    <meta
      name="description"
      content="Découvrez la politique de confidentialité de Webilys pour comprendre comment vos données personnelles sont collectées et utilisées."
    />
    <meta
      name="keywords"
      content="Webilys, politique de confidentialité, protection des données, RGPD, données personnelles, sécurité"
    />
    <meta name="author" content="Webilys" />

    <meta
      property="og:title"
      content="Politique de Confidentialité - Webilys"
    />
    <meta
      property="og:description"
      content="Retrouvez les informations sur la collecte et l'utilisation de vos données personnelles par Webilys."
    />
    <meta
      property="og:image"
      content="https://webilys.fr/assets/img/hero.webp"
    />
    <meta property="og:url" content="https://webilys.fr/confidentialite.html" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:title"
      content="Politique de Confidentialité - Webilys"
    />
    <meta
      name="twitter:description"
      content="Découvrez comment Webilys protège vos données personnelles."
    />
    <meta
      name="twitter:image"
      content="https://webilys.fr/assets/img/hero.webp"
    />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://www.webilys.fr/confidentialite.html" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon-webilys.png" />
    <link rel="stylesheet" href="./assets/css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <header>
      <a href="./index.html">
        <div class="logo">
          <img src="./assets/img/logo-webilys.png" alt="Logo Webilys" />
        </div>
      </a>
      <div class="menuIcons">
        <i class="fa-solid fa-bars" id="openIcon" onclick="openNav()"></i>
        <i class="fa-solid fa-xmark" id="closeIcon" onclick="closeNav()"></i>
      </div>
      <nav>
        <ul>
          <li>
            <a href="./index.html">Accueil</a>
          </li>
          <li>
            <a href="./index.html#services">Services</a>
          </li>
          <li>
            <a href="./portfolio.html">Portfolio</a>
          </li>
          <li>
            <a href="./index.html#a-propos">À propos</a>
          </li>
          <li>
            <a href="./index.html#contact">Contact</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="title-page">
        <h1>Politique de Confidentialité</h1>
      </section>

      <section class="legal">
        <div class="legal-container">
          <p>En vigueur au 01/11/2024</p>

          <h2>Collecte des données</h2>
          <p>
            Webilys collecte vos données personnelles via les formulaires de
            contact présents sur le site. Les données collectées incluent :
          </p>
          <ul>
            <li>Nom et prénom</li>
            <li>Email</li>
            <li>Numéro de téléphone</li>
            <li>Message ou description de votre projet</li>
          </ul>

          <h2>Utilisation des données</h2>
          <p>
            Les informations collectées sont utilisées uniquement pour répondre
            à vos demandes, établir un contact commercial, ou vous envoyer des
            informations relatives à nos services.
          </p>

          <h2>Conservation des données</h2>
          <p>
            Vos données sont conservées pour une durée maximale de 2 ans à
            compter de la dernière interaction avec Webilys, sauf obligation
            légale contraire.
          </p>

          <h2>Protection des données</h2>
          <p>
            Webilys met en œuvre des mesures de sécurité appropriées pour
            protéger vos données contre les accès non autorisés, la perte ou la
            divulgation.
          </p>

          <h2>Vos droits</h2>
          <p>Conformément au RGPD, vous disposez des droits suivants :</p>
          <ul>
            <li>Droit d’accès à vos données</li>
            <li>Droit de rectification</li>
            <li>Droit à l’effacement</li>
            <li>Droit à la portabilité de vos données</li>
            <li>Droit d’opposition au traitement de vos données</li>
          </ul>
          <p>
            Vous pouvez exercer vos droits en contactant Webilys à l’adresse :
            <a href="mailto:contact@webilys.fr">contact@webilys.fr</a>.
          </p>

          <h2>Contact</h2>
          <p>
            Pour toute question relative à notre politique de confidentialité,
            veuillez nous écrire à l’adresse :
            <a href="mailto:contact@webilys.fr">contact@webilys.fr</a>.
          </p>
        </div>
      </section>
    </main>
    <footer>
      <div class="copyright">
        <p>
          ©2024 - <a href="./index.html">Webilys</a> - Tous droits réservés.
        </p>
      </div>
      <div class="legal-link">
        <p>
          <a href="./mentions-legales.html">Mentions légales</a> |
          <a href="./confidentialite.html">Confidentialité</a>
        </p>
      </div>
    </footer>
    <?php if ($showPopup): ?>
    <div id="cookiePopup" class="show">
      <img src="./assets/img/cookie.png" alt="Cookies" />
      <p>
        Ce site utilise des cookies pour vous garantir la meilleure expérience
        sur notre site. En utilisant notre site, vous acceptez les cookies.
        <a href="./cookies.html">En savoir plus</a>
      </p>
      <button id="acceptCookie">Accepter</button>
    </div>
    <?php endif; ?>

    <section class="contactButton">
      <a href="tel:+33666430997">
        <div class="buttonCall">
          <p>Je contacte Webilys</p>
          <i class="fa-solid fa-phone"></i>
        </div>
      </a>
    </section>
    <script src="./assets/js/index.js"></script>
  </body>
</html>
