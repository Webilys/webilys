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

  <title>Publicités Ads - Webilys | Boostez votre Visibilité en Ligne</title>

  <meta name="description"
    content="Découvrez le service de gestion de publicités Ads de Webilys pour augmenter votre visibilité, attirer des visiteurs qualifiés et maximiser votre retour sur investissement." />
  <meta name="keywords"
    content="Webilys, publicités Ads, gestion Ads, Google Ads, Facebook Ads, campagnes publicitaires, stratégie Ads, visibilité en ligne, ROI" />

  <meta property="og:title" content="Publicités Ads - Webilys | Boostez votre Visibilité en Ligne" />
  <meta property="og:description"
    content="Générez plus de trafic et attirez des clients potentiels avec les services de gestion de publicités Ads de Webilys." />
  <meta property="og:url" content="https://webilys.fr/publicites-ads.php" />


  <meta name="twitter:title" content="Publicités Ads - Webilys | Boostez votre Visibilité en Ligne" />
  <meta name="twitter:description"
    content="Augmentez votre visibilité en ligne avec les services de gestion de publicités Ads de Webilys." />
  <link rel="canonical" href="https://www.webilys.fr/publicites-ads.php" />

  <?php include './includes/links-head.php'; ?>

</head>

<body>
  <?php include './includes/header.php'; ?>


  <main>
    <section class="title-page">
      <h1>Publicités Ads</h1>
    </section>

    <section id="services-pages">
      <div id="service-intro">
        <p>
          Chez Webilys, notre gestion des publicités Ads repose sur des
          stratégies personnalisées et des campagnes optimisées pour maximiser
          votre retour sur investissement. <br /><br />
          Que vous souhaitiez atteindre de nouveaux clients ou augmenter vos
          conversions, nous gérons vos campagnes Google Ads, Facebook Ads et
          autres pour assurer des résultats mesurables.
        </p>
      </div>
      <div id="details">
        <h2>Notre approche</h2>
        <div id="details-container">
          <div class="detail-item">
            <i class="fa-solid fa-bullseye"></i>
            <h3>Ciblage stratégique</h3>
            <p>
              Nous définissons des audiences précises pour toucher les clients
              potentiels qui correspondent le mieux à vos offres.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-chart-line"></i>
            <h3>Optimisation des campagnes</h3>
            <p>
              Nous optimisons continuellement vos annonces pour améliorer leur
              performance et maximiser votre ROI.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-bar-chart"></i>
            <h3>Suivi et reporting</h3>
            <p>
              Nous analysons les performances des campagnes et vous
              fournissons des rapports clairs et détaillés.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-chart-pie"></i>
            <h3>Analyse des mots-clés</h3>
            <p>
              Nous recherchons les mots-clés les plus pertinents pour
              maximiser votre visibilité et attirer un trafic qualifié.
            </p>
          </div>
        </div>
      </div>
      <div id="avantages">
        <h2>Avantages des publicités Ads avec Webilys</h2>
        <div id="avantages-container">
          <p class="avantage-item">
            <i class="fa-solid fa-eye"></i>
            Gagnez en visibilité auprès d'un large public
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-bolt"></i>
            Attirez un trafic ciblé et qualifié rapidement
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-coins"></i>
            Maximisez votre retour sur investissement
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-comments-dollar"></i>
            Augmentez vos conversions avec des annonces optimisées
          </p>
        </div>
      </div>
    </section>

    <section id="contact">
      <h2>Vous êtes prêt à lancer votre projet ?</h2>
      <p>
        Webilys est là pour vous accompagner. Contactez-nous dès aujourd'hui
        pour une consultation gratuite.
      </p>
      <form action="https://formspree.io/f/xdkozwew" method="POST">
        <input type="text" name="nomEtPrenom" id="nomEtPrenom" placeholder="Nom et prénom*" required />
        <input type="tel" name="tel" id="tel" placeholder="Téléphone*" required />
        <input type="email" name="email" id="email" placeholder="Email*" required />
        <textarea name="message" id="message" cols="30" rows="6" placeholder="Décrivez votre projet*"
          required></textarea>

        <button type="submit">Envoyer</button>
      </form>
    </section>
  </main>
  <?php include './includes/footer.php'; ?>
  <?php include './includes/cookie-popup.php'; ?>
  <?php include './includes/button-call.php'; ?>

  <script src="./assets/js/index.js"></script>
</body>

</html>