<?php require './includes/cookie-verification.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1N9RTFVQX0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-1N9RTFVQX0");
  </script>
  <title>Politique des Cookies - Webilys</title>

  <meta name="description"
    content="Découvrez la politique de gestion des cookies sur le site Webilys et apprenez comment les contrôler et les désactiver." />
  <meta name="keywords"
    content="Webilys, politique des cookies, gestion des cookies, désactivation des cookies, RGPD" />

  <meta property="og:title" content="Politique des Cookies - Webilys" />
  <meta property="og:description"
    content="Retrouvez notre politique de cookies pour comprendre leur utilisation sur notre site." />
  <meta property="og:url" content="https://webilys.fr/cookies.php" />

  <meta name="twitter:title" content="Politique des Cookies - Webilys" />
  <meta name="twitter:description" content="Apprenez-en plus sur notre utilisation des cookies et comment les gérer." />
  <meta name="twitter:image" content="https://webilys.fr/assets/img/hero.webp" />
  <link rel="canonical" href="https://www.webilys.fr/cookies.php" />
  <?php include './includes/links-head.php'; ?>

</head>

<body>
  <?php include './includes/header.php'; ?>
  <main>
    <section class="title-page">
      <h1>Politique des Cookies</h1>
    </section>

    <section class="legal">
      <div class="legal-container">
        <p>En vigueur au 01/11/2024</p>

        <h2>Introduction</h2>
        <p>
          Le site <a href="https://www.webilys.fr">www.webilys.fr</a> utilise
          des cookies pour améliorer l'expérience utilisateur et fournir des
          statistiques sur l'utilisation du site.
        </p>

        <h2>Qu'est-ce qu'un cookie ?</h2>
        <p>
          Un cookie est un petit fichier texte déposé sur votre appareil
          (ordinateur, tablette, smartphone) lors de la consultation d'un site
          web. Il permet de stocker des informations relatives à votre
          navigation.
        </p>

        <h2>Types de cookies utilisés</h2>
        <ul>
          <li>
            <strong>Cookies strictement nécessaires :</strong> Ces cookies
            sont indispensables au bon fonctionnement du site et ne peuvent
            pas être désactivés.
          </li>
          <li>
            <strong>Cookies de performance :</strong> Ces cookies collectent
            des informations anonymes sur la manière dont les visiteurs
            utilisent le site.
          </li>
          <li>
            <strong>Cookies fonctionnels :</strong> Ces cookies permettent de
            personnaliser votre expérience utilisateur (par exemple, en
            mémorisant vos préférences).
          </li>
          <li>
            <strong>Cookies publicitaires :</strong> Ces cookies permettent
            d'afficher des publicités pertinentes basées sur vos centres
            d'intérêt.
          </li>
        </ul>

        <h2>Gestion des cookies</h2>
        <p>
          Vous pouvez configurer votre navigateur pour bloquer les cookies ou
          être averti lorsqu’un cookie est déposé sur votre appareil. Voici
          des liens vers les rubriques d'aide des principaux navigateurs :
        </p>
        <ul>
          <li>
            <a href="https://support.google.com/chrome/answer/95647?hl=fr" target="_blank"
              rel="noopener noreferrer">Google Chrome</a>
          </li>
          <li>
            <a href="https://support.mozilla.org/fr/kb/activer-desactiver-cookies" target="_blank"
              rel="noopener noreferrer">Mozilla Firefox</a>
          </li>
          <li>
            <a href="https://support.microsoft.com/fr-fr/help/17442/windows-internet-explorer-delete-manage-cookies"
              target="_blank" rel="noopener noreferrer">Internet Explorer</a>
          </li>
          <li>
            <a href="https://support.apple.com/fr-fr/guide/safari/sfri11471/mac" target="_blank"
              rel="noopener noreferrer">Safari</a>
          </li>
        </ul>

        <h2>Modification de cette politique</h2>
        <p>
          Nous nous réservons le droit de modifier cette politique à tout
          moment. Toute modification sera publiée sur cette page avec une date
          de mise à jour.
        </p>

        <h2>Contact</h2>
        <p>
          Pour toute question concernant cette politique de cookies, vous
          pouvez nous contacter à l'adresse suivante :
          <a href="mailto:contact@webilys.fr">contact@webilys.fr</a>.
        </p>
      </div>
    </section>
  </main>
  <?php include './includes/footer.php'; ?>
  <?php include './includes/cookie-popup.php'; ?>
  <?php include './includes/button-call.php'; ?>


  <script src="./assets/js/index.js"></script>
</body>

</html>