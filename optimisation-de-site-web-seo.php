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
  <title>Optimisation (SEO) - Webilys | Boostez votre Visibilité</title>
  <meta name="description"
    content="Découvrez le service d'optimisation SEO de Webilys pour améliorer le classement de votre site, attirer plus de trafic et convertir vos visiteurs en clients." />
  <meta name="keywords"
    content="Webilys, SEO, optimisation de site web, référencement naturel, stratégie SEO, visibilité en ligne, trafic organique, contenu optimisé" />
  <meta property="og:title" content="Optimisation (SEO) - Webilys | Boostez votre Visibilité" />
  <meta property="og:description"
    content="Améliorez le classement de votre site et gagnez en visibilité grâce au service d'optimisation SEO de Webilys." />
  <meta property="og:url" content="https://webilys.fr/optimisation-seo.php" />
  <meta name="twitter:title" content="Optimisation (SEO) - Webilys | Boostez votre Visibilité" />
  <meta name="twitter:description"
    content="Optimisez votre site avec Webilys et gagnez en visibilité dans les moteurs de recherche." />
  <link rel="canonical" href="https://www.webilys.fr/optimisation-de-site-web-seo.php" />
  <?php include './includes/links-head.php'; ?>

</head>

<body>
  <?php include './includes/header.php'; ?>


  <main>
    <section class="title-page">
      <h1>Optimisation (SEO)</h1>
    </section>

    <section id="services-pages">
      <div id="service-intro">
        <p>
          Chez Webilys, nous faisons bien plus que du SEO. Nous mettons en
          œuvre des stratégies sur mesure pour améliorer la visibilité de
          votre site, augmenter votre trafic organique et maximiser vos
          conversions. <br /><br />
          Que vous soyez une petite entreprise ou une grande organisation,
          notre expertise en optimisation SEO garantit que votre site se
          démarque dans les résultats des moteurs de recherche.
        </p>
      </div>
      <div id="details">
        <h2>Notre approche</h2>
        <div id="details-container">
          <div class="detail-item">
            <i class="fa-solid fa-magnifying-glass"></i>
            <h3>Audit SEO</h3>
            <p>
              Nous analysons votre site pour identifier les opportunités
              d'amélioration et élaborer une stratégie SEO personnalisée.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-file-alt"></i>
            <h3>Optimisation du contenu</h3>
            <p>
              Nous optimisons vos textes, balises et mots-clés pour garantir
              qu'ils correspondent aux intentions de recherche de vos cibles.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-chart-bar"></i>
            <h3>Suivi et analyse</h3>
            <p>
              Nous surveillons vos performances SEO pour ajuster nos
              stratégies et garantir des résultats durables.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-globe"></i>
            <h3>SEO technique</h3>
            <p>
              Nous optimisons la vitesse, la structure et la sécurité de votre
              site pour répondre aux exigences des moteurs de recherche.
            </p>
          </div>
        </div>
      </div>
      <div id="avantages">
        <h2>Avantages de l'optimisation SEO avec Webilys</h2>
        <div id="avantages-container">
          <p class="avantage-item">
            <i class="fa-solid fa-search-plus"></i>
            Améliorez votre classement dans les moteurs de recherche
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-chart-line"></i>
            Attirez un trafic organique de qualité
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-user-check"></i>
            Ciblez efficacement vos audiences
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-star"></i>
            Maximisez vos conversions grâce à une meilleure visibilité
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