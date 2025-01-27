<?php
echo '<form id="contact-form" action="https://formspree.io/f/xdkozwew" method="POST">
    <input type="text" name="name" id="name" class="form-field" placeholder="Nom et prénom*" required/>
        <input type="tel" name="telephone" id="telephone" class="form-field" placeholder="Téléphone*" required/>
        <input type="email" name="email" id="email" class="form-field" placeholder="Email*" required/>
        <textarea name="message" id="message" class="form-field" cols="30" rows="6" placeholder="Décrivez votre projet*" required></textarea>
        <div id="checkbox-div">
        <input type="checkbox" id="checkedAccept" name="checkedAccept" required/>
        <label for="checkedAccept">
            J’accepte que mes données soient utilisées conformément à la
            <a href="./confidentialite.php">Politique de confidentialité</a>.
        </label>
    </div>

    <button type="submit">Envoyer</button>
</form>';
?>