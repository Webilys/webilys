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
  <title>Design Graphique - Webilys | Création Visuelle Unique</title>
  <meta name="description"
    content="Découvrez le service de design graphique de Webilys. Nous créons des visuels percutants et professionnels pour donner vie à votre marque et attirer votre audience." />
  <meta name="keywords"
    content="Webilys, design graphique, identité visuelle, création visuelle, logos, branding, supports de communication, graphisme" />
  <meta property="og:title" content="Design Graphique - Webilys | Création Visuelle Unique" />
  <meta property="og:description"
    content="Renforcez votre image de marque avec des visuels professionnels et créatifs grâce au service de design graphique de Webilys." />
  <meta property="og:url" content="https://webilys.fr/design-graphique.php" />
  <meta name="twitter:title" content="Design Graphique - Webilys | Création Visuelle Unique" />
  <meta name="twitter:description"
    content="Démarquez-vous avec des créations visuelles qui captivent et engagent votre audience grâce à Webilys." />
  <link rel="canonical" href="https://www.webilys.fr/design-graphique.php" />
  <?php include './includes/links-head.php'; ?>

</head>

<body>
  <?php include './includes/header.php'; ?>


  <main>
    <section class="title-page">
      <h1>Design Graphique</h1>
    </section>

    <section id="services-pages">
      <div id="service-intro">
        <p>
          Chez Webilys, notre service de design graphique est centré sur la
          création d'identités visuelles uniques et percutantes pour captiver
          votre audience et renforcer votre marque. <br /><br />
          Que ce soit pour des logos, des supports de communication, ou des
          visuels de réseaux sociaux, nous transformons vos idées en designs
          qui inspirent.
        </p>
      </div>
      <div id="details">
        <h2>Notre approche</h2>
        <div id="details-container">
          <div class="detail-item">
            <i class="fa-solid fa-palette"></i>
            <h3>Identité visuelle</h3>
            <p>
              Nous créons une identité visuelle cohérente et distincte qui
              reflète l'âme de votre marque et captive l'attention de votre
              audience.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-pen-nib"></i>
            <h3>Logos sur mesure</h3>
            <p>
              Nous concevons des logos uniques, élégants et mémorables, qui
              mettent en valeur votre image de marque et renforcent votre
              présence.
            </p>
          </div>
          <div class="detail-item">
            <i class="fa-solid fa-file-lines"></i>
            <h3>Supports de communication</h3>
            <p>
              Cartes de visite, brochures, affiches… nous créons des supports
              de communication professionnels qui véhiculent vos valeurs et
              marquent les esprits.
            </p>
          </div>

          <div class="detail-item">
            <i class="fa-solid fa-images"></i>
            <h3>Visuels pour réseaux sociaux</h3>
            <p>
              Nous élaborons des visuels captivants et optimisés pour engager
              votre communauté et accroître votre présence en ligne.
            </p>
          </div>
        </div>
      </div>
      <div id="avantages">
        <h2>Avantages de notre design graphique</h2>
        <div id="avantages-container">
          <p class="avantage-item">
            <i class="fa-solid fa-eye"></i>
            Démarquez-vous avec des visuels uniques et professionnels
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-handshake"></i>
            Renforcez la crédibilité et la cohérence de votre marque
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-star"></i>
            Attirez et fidélisez vos clients grâce à une identité visuelle
            forte
          </p>
          <p class="avantage-item">
            <i class="fa-solid fa-chart-pie"></i>
            Optimisez vos interactions et votre impact visuel sur les réseaux
            sociaux
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