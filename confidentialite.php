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

  <title>Politique de Confidentialité - Webilys</title>
  <meta name="description"
    content="Découvrez la politique de confidentialité de Webilys pour comprendre comment vos données personnelles sont collectées et utilisées." />
  <meta name="keywords"
    content="Webilys, politique de confidentialité, protection des données, RGPD, données personnelles, sécurité" />
  <meta property="og:title" content="Politique de Confidentialité - Webilys" />
  <meta property="og:description"
    content="Retrouvez les informations sur la collecte et l'utilisation de vos données personnelles par Webilys." />
  <meta property="og:url" content="https://webilys.fr/confidentialite.php" />
  <meta name="twitter:title" content="Politique de Confidentialité - Webilys" />
  <meta name="twitter:description" content="Découvrez comment Webilys protège vos données personnelles." />
  <link rel="canonical" href="https://www.webilys.fr/confidentialite.php" />
  <?php include './includes/links-head.php'; ?>

</head>

<body>
  <?php include './includes/header.php'; ?>
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
  <?php include './includes/footer.php'; ?>
  <?php include './includes/cookie-popup.php'; ?>
  <?php include './includes/button-call.php'; ?>

  <script src="./assets/js/index.js"></script>
</body>

</html>