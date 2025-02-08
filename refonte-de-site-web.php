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
  <title>
    Refonte de Sites - Webilys | Modernisez votre Présence en Ligne
  </title>
  <meta name="description"
    content="Découvrez le service de refonte de sites de Webilys pour moderniser, optimiser et améliorer les performances de votre site actuel. Faites évoluer votre site pour attirer et convertir efficacement vos visiteurs." />
  <meta name="keywords"
    content="Webilys, refonte de site, optimisation de site web, amélioration site web, design moderne, SEO, expérience utilisateur, UX" />
  <meta property="og:title" content="Refonte de Sites - Webilys | Modernisez votre Présence en Ligne" />
  <meta property="og:description"
    content="Redonnez vie à votre site avec la refonte de Webilys. Transformez votre présence en ligne avec un site optimisé, moderne et performant." />
  <meta property="og:url" content="https://webilys.fr/refonte-de-site-web.php" />
  <meta name="twitter:title" content="Refonte de Sites - Webilys | Modernisez votre Présence en Ligne" />
  <meta name="twitter:description"
    content="Optimisez votre site actuel avec Webilys pour mieux convertir et engager votre audience." />
  <link rel="canonical" href="https://www.webilys.fr/refonte-de-site-web.php" />
  <?php include './includes/links-head.php'; ?>
</head>

<body>
  <?php include './includes/header.php'; ?>


  <main>
    <section class="title-page">
      <h1>Refonte de Sites</h1>
    </section>

    <section id="services-pages">
      <div id="service-intro">
        <p>
          Chez Webilys, la refonte de sites est une opportunité de redonner
          vie à votre présence en ligne. Nous modernisons, optimisons et
          améliorons votre site existant pour qu'il attire, engage et
          convertisse efficacement. <br /><br />
          Que ce soit pour rafraîchir le design, optimiser la vitesse ou
          améliorer l'expérience utilisateur, notre équipe s’assure que votre
          site reflète l’image actuelle de votre marque.
        </p>
      </div>
      <div id="details">
        <h2>Notre approche</h2>
        <div id="details-container">
          <div class="detail-item">
            <i class="fa-solid fa-chart-line"></i>
            <h3>Évaluation complète</h3>
            <p>
              Nous analysons les forces et les faiblesses de votre site actuel
              pour définir les axes d'amélioration.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-palette"></i>
            <h3>Design rafraîchi</h3>
            <p>
              Nous réinventons l'interface de votre site pour lui donner un
              look moderne et en phase avec votre identité.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-rocket"></i>
            <h3>Optimisation technique</h3>
            <p>
              Nous assurons des performances optimales en termes de vitesse,
              de sécurité et de SEO pour un meilleur classement et une
              meilleure expérience utilisateur.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-thumbs-up"></i>
            <h3>Amélioration de l'UX</h3>
            <p>
              Nous optimisons la navigation pour offrir une expérience
              utilisateur fluide et intuitive.
            </p>
          </div>
        </div>
      </div>
      <div id="avantages">
        <h2>Avantages d'une refonte par Webilys</h2>
        <div id="avantages-container">
          <p class="avantage-item">
            <i class="fa-solid fa-users"></i>
            Renforcez l'engagement et la satisfaction de vos visiteurs
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-bolt"></i>
            Bénéficiez d’un site plus rapide et plus performant
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-search"></i>
            Améliorez votre référencement et gagnez en visibilité
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-chart-line"></i>
            Boostez vos conversions grâce à une meilleure expérience
            utilisateur
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