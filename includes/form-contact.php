<?php
echo '<form action="https://formspree.io/f/xdkozwew" method="POST">
    <input type="text" name="nomEtPrenom" id="nomEtPrenom" placeholder="Nom et prénom*" required />
    <input type="tel" name="tel" id="tel" placeholder="Téléphone*" required />
    <input type="email" name="email" id="email" placeholder="Email*" required />
    <textarea name="message" id="message" cols="30" rows="6" placeholder="Décrivez votre projet*"
      required></textarea>
    <div id="checkbox-div">
      <span class="checked">
        <input type="checkbox" id="acceptTransmissionDonnees" name="acceptTransmissionDonnees" required />
      </span>
      <label for="acceptTransmissionDonnees">J’accepte que mes données soient utilisées conformément à la
        <a href="./confidentialite.php">Politique de confidentialité</a>.</label>
    </div>
    <button type="submit">Envoyer</button>
  </form>';

?>