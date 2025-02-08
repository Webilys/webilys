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
  <title>Création de Sites - Webilys | Conception Web Personnalisée</title>

  <meta name="description"
    content="Découvrez le service de création de sites Web sur mesure de Webilys. Transformez votre vision en un site moderne, performant et optimisé, conçu pour attirer et engager vos visiteurs." />
  <meta name="keywords"
    content="Webilys, création de site web, conception web, site sur mesure, design web, développement web, expérience utilisateur, UX, UI" />

  <meta property="og:title" content="Création de Sites - Webilys | Conception Web Personnalisée" />
  <meta property="og:description"
    content="Transformez votre vision en un site web moderne, performant et attractif grâce au service de création de sites de Webilys." />
  <meta property="og:url" content="https://webilys.fr/creation-de-site-web.php" />
  <meta name="twitter:title" content="Création de Sites - Webilys | Conception Web Personnalisée" />
  <meta name="twitter:description"
    content="Découvrez notre service de création de sites Web personnalisés pour engager vos clients." />
  <link rel="canonical" href="https://www.webilys.fr/creation-de-site-web.php" />
  <?php include './includes/links-head.php'; ?>

</head>

<body>
  <?php include './includes/header.php'; ?>

  <main>
    <section class="title-page">
      <h1>Création de Sites</h1>
    </section>

    <section id="services-pages">
      <div id="service-intro">
        <p>
          Chez Webilys, la création de sites est bien plus qu'une simple
          construction de pages web. Nous concevons des expériences en ligne
          sur mesure, alignées avec votre marque et orientées pour convertir
          vos visiteurs en clients. <br /><br />
          De la conception à la réalisation, chaque détail est pensé pour
          maximiser votre impact en ligne, que vous soyez une entreprise en
          plein essor, un entrepreneur ou une association.
        </p>
      </div>
      <div id="details">
        <h2>Notre approche</h2>
        <div id="details-container">
          <div class="detail-item">
            <i class="fa-solid fa-magnifying-glass"></i>
            <h3>Analyse des besoins</h3>
            <p>
              Nous débutons avec une étude approfondie de vos objectifs pour
              créer un site en phase avec votre stratégie et vos cibles.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-regular fa-object-group"></i>
            <h3>Design personnalisé</h3>
            <p>
              Nous concevons des interfaces modernes et intuitives, optimisées
              pour offrir une expérience utilisateur (UX) fluide et agréable.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-microchip"></i>
            <h3>Technologies de pointe</h3>
            <p>
              Nous utilisons des technologies fiables et performantes pour
              garantir que votre site soit rapide, sécurisé et optimisé pour
              le référencement naturel (SEO).
            </p>
          </div>

          <div class="detail-item">
            <i class="fa-solid fa-mobile-screen"></i>
            <h3>Responsive</h3>
            <p>
              Chaque site est adapté pour s’afficher parfaitement sur tous les
              appareils (ordinateurs, tablettes, smartphones).
            </p>
          </div>
        </div>
      </div>
      <div id="avantages">
        <h2>Avantages d'un site Web conçu par Webilys</h2>
        <div id="avantages-container">
          <p class="avantage-item">
            <i class="fa-solid fa-users-viewfinder"></i>
            Attirer et engager efficacement votre audience cible
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-user-tie"></i>
            Améliorer votre image de marque avec un design professionnel
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-magnifying-glass-chart"></i>
            Gagner en visibilité grâce à une structure SEO optimisée
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-cart-plus"></i>
            Augmenter les conversions avec un site pensé pour l'utilisateur
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