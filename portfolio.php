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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio - Webilys | Réalisations de Sites Web et Design</title>

  <meta name="description"
    content="Explorez le portfolio de Webilys et découvrez nos projets de création et de refonte de sites web, ainsi que nos designs graphiques. Des solutions digitales sur mesure pour chaque client." />
  <meta name="keywords"
    content="Webilys, portfolio, création de site web, refonte de site, design graphique, solutions digitales, projets web" />
  <meta name="author" content="Webilys" />
  <meta property="og:title" content="Portfolio - Webilys | Réalisations de Sites Web et Design" />
  <meta property="og:description"
    content="Découvrez les projets réalisés par Webilys : création de sites, refonte, SEO et design graphique pour des marques variées." />
  <meta property="og:image" content="https://webilys.fr/assets/img/hero.webp" />
  <meta property="og:url" content="https://webilys.fr" />
  <meta property="og:type" content="website" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Portfolio - Webilys | Réalisations de Sites Web et Design" />
  <meta name="twitter:description"
    content="Explorez notre portfolio et laissez-vous inspirer par les projets de Webilys, agence web à Tarascon spécialisée en création digitale." />
  <meta name="twitter:image" content="https://webilys.fr/assets/img/hero.webp" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://www.webilys.fr/portfolio.php" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="./assets/img/favicon-webilys.png" />

  <link rel="stylesheet" href="./assets/css/index.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php include './includes/header.php'; ?>

  <main>
    <section class="title-page">
      <h1>Nos réalisations</h1>
    </section>

    <section id="intro-portfolio">
      <p>
        Découvrez nos réalisations, où chaque projet raconte une histoire
        unique. <br /><br />Notre expertise s'exprime à travers des sites web
        modernes, performants et des designs graphiques percutants, créés pour
        répondre aux besoins spécifiques de nos clients. <br /><br />Que vous
        cherchiez à lancer un site, à revitaliser votre présence en ligne ou à
        enrichir votre marque, découvrez ici comment nous transformons vos
        idées en expériences digitales captivantes. <br /><br />
        Explorez notre travail et imaginez le potentiel pour votre propre
        projet web.
      </p>
    </section>
    <section id="portfolio-portfolio">
      <?php include './includes/galerie-project.php'; ?>
    </section>

    <section id="contact">
      <h2>Vous êtes prêt à lancer votre projet ?</h2>
      <p>
        Webilys est là pour vous accompagner. Contactez-nous dès aujourd'hui
        pour une consultation gratuite.
      </p>
      <?php include './includes/form-contact.php' ?>

    </section>
  </main>
  <?php include './includes/footer.php'; ?>
  <?php include './includes/cookie-popup.php'; ?>
  <?php include './includes/button-call.php'; ?>

  <script src="./assets/js/index.js"></script>
</body>

</html>