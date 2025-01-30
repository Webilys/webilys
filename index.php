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
  <title>
    Webilys - Agence de Création Digitale | Création de sites Web, Refonte,
    optimisation SEO, Ads, Marketing digital & Design à Tarascon
  </title>
  <meta name="description"
    content="Webilys est une agence web créative spécialisée dans la création et la refonte de sites internet, l'optimisation SEO, la gestion de campagnes publicitaires et le design graphique. Donnez vie à vos projets web avec Webilys à Tarascon !" />
  <meta name="keywords"
    content="Webilys, agence web, création de site, refonte de site, optimisation SEO, Ads, marketing digital, design graphique, création digitale" />
  <meta name="author" content="Webilys" />
  <meta property="og:title" content="Webilys - Agence de Création Digitale | Sites Web, Marketing & Design" />
  <meta property="og:description"
    content="Découvrez Webilys, une agence créative offrant des services de création de sites, refonte, SEO, Ads et design graphique. Donnez vie à vos projets digitaux !" />
  <meta property="og:image" content="https://webilys.fr/assets/img/hero.webp" />
  <meta property="og:url" content="https://webilys.fr" />
  <meta property="og:type" content="website" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Webilys - Agence de Création Digitale | Sites Web, Marketing & Design" />
  <meta name="twitter:description"
    content="Webilys, l'agence digitale pour vos projets web : création de sites, refonte, SEO, Ads et design graphique." />
  <meta name="twitter:image" content="https://webilys.fr/assets/img/hero.webp" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://www.webilys.fr/index.php" />
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
    <section class="hero">
      <div class="hero-container">
        <img src="./assets/img/logo-webilys-white.png" alt="Logo Webilys Blanc" />
        <h1>L'Agence Web qui donne vie à vos projets !</h1>
        <button><a href="#services">Découvrir les services</a></button>
      </div>
    </section>
    <section id="services">
      <h2>Nos services</h2>
      <p>
        Chez Webilys, nous transformons vos idées en projets digitaux
        sur-mesure. Découvrez nos services et découvrez comment nous pouvons
        propulser votre présence en ligne avec des solutions digitales
        créatives et efficaces.
      </p>
      <div class="services-container">
        <a href="./creation-de-site-web.php">
          <div class="service-item">
            <i class="fa-regular fa-object-group"></i>

            <h3>Création de Sites</h3>
            <p>
              Conception de sites internet modernes et personnalisés pour
              refléter l’identité de votre marque et garantir une expérience
              utilisateur optimale.
            </p>
          </div>
        </a>
        <a href="./refonte-de-site-web.php">
          <div class="service-item">
            <i class="fa-regular fa-object-ungroup"></i>

            <h3>Refonte de Sites</h3>
            <p>
              Redonnez vie à votre site web existant avec une refonte
              complète, axée sur la modernité, la performance, et les
              dernières tendances design.
            </p>
          </div>
        </a>
        <a href="./optimisation-de-site-web-seo.php">
          <div class="service-item">
            <i class="fa-solid fa-magnifying-glass-chart"></i>

            <h3>Optimisation (SEO)</h3>
            <p>
              Améliorez votre visibilité sur les moteurs de recherche avec des
              stratégies de référencement naturel sur mesure, pour attirer
              davantage de visiteurs qualifiés.
            </p>
          </div>
        </a>
        <a href="./publicites-ads.php">
          <div class="service-item">
            <i class="fa-solid fa-chart-line"></i>
            <h3>Publicités Ads</h3>
            <p>
              Augmentez votre audience et vos conversions grâce à des
              campagnes publicitaires ciblées sur les plateformes de votre
              choix.
            </p>
          </div>
        </a>
        <a href="./marketing.php">
          <div class="service-item">
            <i class="fa-solid fa-comments-dollar"></i>

            <h3>Marketing Digital</h3>
            <p>
              Développez votre marque en ligne avec des stratégies marketing
              percutantes qui mettent en valeur votre offre et touchent votre
              cible.
            </p>
          </div>
        </a>
        <a href="./design-graphique.php">
          <div class="service-item">
            <i class="fa-solid fa-pen-ruler"></i>

            <h3>Design Graphique</h3>
            <p>
              Créez une identité visuelle unique avec nos solutions de design
              graphique qui captivent et représentent l’essence de votre
              marque.
            </p>
          </div>
        </a>
      </div>
    </section>
    <section id="nos-realisations" class="galerie">
      <div class="title-section">
        <h2>Quelques réalisations</h2>
        <div class="iconsChangement">
          <i class="fa-solid fa-chevron-left" onclick="precedent()"></i>
          <i class="fa-solid fa-chevron-right" onclick="suivant()"></i>
        </div>
      </div>
      <div class="galerie-container">
        <!-- <a href="https://news-mag.webilys.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/news-mag.png" alt="News Mag" />
            <p>News Mag</p>
          </div>
        </a> -->
        <a href="https://voice-converter.webilys.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/voice-converter.png" alt="Voice Converter" />
            <p>Voice Converter</p>
          </div>
        </a>
        <a href="https://cryptocurrency.webilys.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/cryptocurrency.png" alt="Cryptocurrency" />
            <p>Cryptocurrency</p>
          </div>
        </a>
        <a href="https://qrcode-generator.webilys.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/qrcode-generator.png" alt="QR Code Generator" />
            <p>QR Code Generator</p>
          </div>
        </a>
        <a href="https://webilys-images.webilys.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/webilys-images.png" alt="Webilys Images" />
            <p>Webilys Images</p>
          </div>
        </a>
        <a href="https://burger-code.webilys.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/burger-code.png" alt="Burger Code" />
            <p>Burger Code</p>
          </div>
        </a>
        <a href="https://fo-transport13.webilys.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/fo-transport13.png" alt="FO Transport 13" />
            <p>FO Transport 13</p>
          </div>
        </a>
        <a href="https://lesdelicesdeleana.webilys.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/les-delices-de-leana.png" alt="Les delices de Léana" />
            <p>Les délices de Léana</p>
          </div>
        </a>
        <a href="https://danyprovenceherbes.com" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/dany-provence-herbes.png" alt="Dany Provence Herbes" />
            <p>Dany Provence Herbes</p>
          </div>
        </a>
        <a href="https://ici-bebe.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/ici-bebe.png" alt="Ici Bébé" />
            <p>Ici Bébé</p>
          </div>
        </a>
        <a href="https://casadusud.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/casa-du-sud.png" alt="Casa du sud" />
            <p>Casa du Sud</p>
          </div>
        </a>
        <a href="https://dpartenr.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/dpartenr.png" alt="DParten'R" />
            <p>DParten'R</p>
          </div>
        </a>
        <a href="https://fashiongipsy.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/fashion-gipsy.png" alt="" />
            <p>Fashion Gipsy</p>
          </div>
        </a>
        <a href="https://institutdelatarasque.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/institut-de-la-tarasque.png" alt="Institut de la Tarasque" />
            <p>Institut de la Tarasque</p>
          </div>
        </a>
        <a href="https://sainte-marthe-tarascon.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/sainte-marthe.png" alt="Établissement privé catholique Sainte Marthe" />
            <p>Établissement Sainte Marthe</p>
          </div>
        </a>
        <a href="https://jcfamilles.webilys.fr" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/jcfamilles.png" alt="JC Familles" />
            <p>JC Familles</p>
          </div>
        </a>
        <a href="https://jplecaudey.com/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/jp-lecaudey.png" alt="JP Lecaudey" />
            <p>JP Lecaudey</p>
          </div>
        </a>
        <a href="https://7ounet.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/7-ou-net.png" alt="7 OU NET" />
            <p>7 OU NET</p>
          </div>
        </a>
        <a href="https://the-resto.webilys.fr/" target="_blank" class="galerie-item">
          <div>
            <img src="./assets/img/the-resto.png" alt="The resto" />
            <p>The resto</p>
          </div>
        </a>
      </div>
      <button><a href="./portfolio.php">Découvrir le portfolio</a></button>
    </section>

    <section id="a-propos">
      <div class="a-propos-container">
        <div class="a-propos-text">
          <h2>À propos</h2>
          <h3>
            Webilys, votre partenaire pour des solutions digitales sur mesure
            !
          </h3>

          <p>
            Chez Webilys, nous croyons que chaque entreprise mérite un site
            web qui incarne son identité, ses valeurs, et ses ambitions.
            Passionnée du web, notre agence a pour mission de donner vie à vos
            projets digitaux en créant des sites sur mesure, modernes, et
            performants.
            <br /><br />
            Nous accompagnons nos clients tout au long du processus, de la
            première idée à la mise en ligne, en passant par le design, le
            développement, et l’optimisation. Chaque détail est analysé pour
            vous offrir un site à la hauteur de vos attentes.
          </p>
        </div>
        <div class="a-propos-img">
          <img src="./assets/img/a-propos.webp" alt="" />
        </div>
      </div>
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