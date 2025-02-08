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
  <title>Marketing - Webilys | Stratégies de Marketing Digital</title>
  <meta name="description"
    content="Découvrez le service de marketing digital de Webilys. Nous créons des stratégies efficaces pour accroître votre visibilité en ligne et fidéliser votre audience." />
  <meta name="keywords"
    content="Webilys, marketing digital, stratégie marketing, réseaux sociaux, contenu marketing, engagement client, visibilité en ligne" />
  <meta property="og:title" content="Marketing - Webilys | Stratégies de Marketing Digital" />
  <meta property="og:description"
    content="Boostez votre présence en ligne avec les stratégies de marketing digital de Webilys pour attirer et fidéliser votre audience." />
  <meta property="og:url" content="https://webilys.fr/marketing.php" />
  <meta name="twitter:title" content="Marketing - Webilys | Stratégies de Marketing Digital" />
  <meta name="twitter:description"
    content="Développez votre audience et fidélisez vos clients avec les stratégies de marketing digital de Webilys." />
  <link rel="canonical" href="https://www.webilys.fr/marketing.php" />
  <?php include './includes/links-head.php'; ?>
</head>

<body>
  <?php include './includes/header.php'; ?>


  <main>
    <section class="title-page">
      <h1>Marketing Digital</h1>
    </section>

    <section id="services-pages">
      <div id="service-intro">
        <p>
          Chez Webilys, notre service de marketing digital est conçu pour vous
          aider à atteindre, engager et fidéliser votre audience grâce à des
          stratégies personnalisées et performantes. <br /><br />
          De la gestion des réseaux sociaux à la création de contenu
          captivant, nous mettons en place des actions ciblées pour optimiser
          votre présence en ligne.
        </p>
      </div>
      <div id="details">
        <h2>Notre approche</h2>
        <div id="details-container">
          <div class="detail-item">
            <i class="fa-solid fa-bullhorn"></i>
            <h3>Stratégie de contenu</h3>
            <p>
              Nous créons des contenus engageants et alignés sur votre marque
              pour captiver votre audience et renforcer votre image.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-hashtag"></i>
            <h3>Gestion des réseaux sociaux</h3>
            <p>
              Nous élaborons des campagnes sur mesure pour développer votre
              communauté et générer de l'engagement autour de votre marque.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-chart-line"></i>
            <h3>Analyse et ajustement</h3>
            <p>
              Nous analysons les performances de vos campagnes et ajustons les
              stratégies pour maximiser les résultats.
            </p>
          </div>

          <div class="detail-item">
            <i class="fa-solid fa-users"></i>
            <h3>Segmentation de l'audience</h3>
            <p>
              Nous ciblons les segments les plus pertinents pour optimiser
              votre budget et atteindre des clients potentiels de qualité.
            </p>
          </div>
        </div>
      </div>
      <div id="avantages">
        <h2>Avantages de notre marketing digital</h2>
        <div id="avantages-container">
          <p class="avantage-item">
            <i class="fa-solid fa-bullseye"></i>
            Accroître votre visibilité et attirer plus de clients
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-users-line"></i>
            Renforcer l'engagement et la fidélité de votre audience
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-chart-bar"></i>
            Mesurer et améliorer les performances en continu
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-dollar-sign"></i>
            Optimiser le retour sur investissement pour chaque action
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