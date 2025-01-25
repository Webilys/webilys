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
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1N9RTFVQX0"></script>
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
  <title>Mentions Légales - Webilys</title>

  <meta name="description"
    content="Consultez les mentions légales du site Webilys pour en savoir plus sur l'éditeur, l'hébergeur et les informations de contact." />
  <meta name="keywords" content="Webilys, mentions légales, informations légales, contact, hébergeur, éditeur" />
  <meta name="author" content="Webilys" />

  <meta property="og:title" content="Mentions Légales - Webilys" />
  <meta property="og:description"
    content="Retrouvez les mentions légales du site Webilys pour connaître les informations légales et de contact." />
  <meta property="og:image" content="https://webilys.fr/assets/img/hero.webp" />
  <meta property="og:url" content="https://webilys.fr/mentions-legales.html" />
  <meta property="og:type" content="website" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Mentions Légales - Webilys" />
  <meta name="twitter:description" content="Découvrez les mentions légales du site Webilys." />
  <meta name="twitter:image" content="https://webilys.fr/assets/img/hero.webp" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://www.webilys.fr/mentions-legales.html" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="./assets/img/favicon-webilys.png" />
  <link rel="stylesheet" href="./assets/css/index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php include('includes/header.php'); ?>


  <main>
    <section class="title-page">
      <h1>Mentions Légales</h1>
    </section>

    <section class="legal">
      <div class="legal-container">
        <p>En vigueur au 01/11/2024</p>

        <h2>Édition du site</h2>
        <p>
          Le présent site, accessible à l’URL
          <a href="https://www.webilys.fr">www.webilys.fr</a> (ci-après
          dénommé le « Site »), est édité par :
        </p>
        <p>
          EI Webilys, immatriculée au RCS de Tarascon sous le numéro SIRET
          <strong>850 052 267 00042</strong>, dont le siège social est situé
          au : 7, place Émile Combes - 13150 Tarascon, France.
        </p>

        <h2>Hébergement</h2>
        <p>Le site est hébergé par la société :</p>
        <p>
          <strong>IONOS SARL</strong><br />
          7, place de la gare<br />
          BP 70109<br />
          57200 Sarreguemines Cedex<br />
          France
        </p>
        <p>
          Contact téléphonique : <a href="tel:+33970808911">0970 808 911</a>
        </p>

        <h2>Directeur de publication</h2>
        <p>Le directeur de la publication du Site est : Priscilla MEZOUAR.</p>

        <h2>Traitement des données personnelles</h2>
        <p>
          Conformément au Règlement Général sur la Protection des Données
          (RGPD) et à la loi Informatique et Libertés, Webilys collecte et
          traite des données personnelles dans le cadre des finalités
          suivantes :
        </p>
        <ul>
          <li>Répondre aux demandes via le formulaire de contact.</li>
          <li>Envoyer des informations relatives à nos services.</li>
        </ul>
        <p>
          Les données personnelles collectées sont limitées aux informations
          nécessaires pour répondre à vos demandes (nom, email, téléphone,
          etc.).
        </p>
        <p>
          Pour toute question relative à vos données personnelles ou pour
          exercer vos droits (accès, rectification, effacement, opposition,
          portabilité), veuillez nous contacter à :
          <a href="mailto:contact@webilys.fr">contact@webilys.fr</a>.
        </p>

        <h2>Utilisation des cookies</h2>
        <p>
          Le site <a href="https://www.webilys.fr">www.webilys.fr</a> utilise
          des cookies pour améliorer votre expérience utilisateur et mesurer
          l’audience du site.
        </p>
        <p>
          Vous pouvez configurer votre navigateur pour bloquer les cookies ou
          être averti lorsqu’un cookie est déposé sur votre appareil. Notez
          que la désactivation des cookies peut limiter certaines
          fonctionnalités du site.
        </p>
        <p>
          Pour en savoir plus sur les cookies, leur gestion et leur
          suppression, veuillez consulter la rubrique d'aide de votre
          navigateur ou visiter le site
          <a href="https://www.cnil.fr/fr/cookies-les-outils-pour-les-maitriser" target="_blank"
            rel="noopener noreferrer">CNIL - Cookies : les outils pour les maîtriser</a>.
        </p>

        <h2>Contact</h2>
        <p>
          Pour toute question ou demande d'information, vous pouvez nous
          contacter :
        </p>
        <ul>
          <li>
            Par email :
            <a href="mailto:contact@webilys.fr">contact@webilys.fr</a>
          </li>
          <li>
            Via le formulaire de contact : Disponible à la rubrique
            <a href="./index.html#contact">« Contact »</a>
          </li>
        </ul>
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