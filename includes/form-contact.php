<?php
echo '<form id="contact-form" method="post" action="" role="form" novalidate>
    <div class="form-group">
        <input type="text" name="name" id="name" class="form-field" placeholder="Nom et prénom*" />
        <p class="comments" id="nameError"></p>
    </div>

    <div class="form-group">
        <input type="tel" name="telephone" id="telephone" class="form-field" placeholder="Téléphone*" />
        <p class="comments" id="telephoneError"></p>
    </div>

    <div class="form-group">
        <input type="email" name="email" id="email" class="form-field" placeholder="Email*" />
        <p class="comments" id="emailError"></p>
    </div>

    <div class="form-group">
        <textarea name="message" id="message" class="form-field" cols="30" rows="6" placeholder="Décrivez votre projet*"></textarea>
        <p class="comments" id="messageError"></p>
    </div>

    <div class="form-group" id="checkbox-div">
        <input type="checkbox" id="checkedAccept" name="checkedAccept" />
        <label for="checkedAccept">
            J’accepte que mes données soient utilisées conformément à la
            <a href="./confidentialite.php">Politique de confidentialité</a>.
        </label>
        <p class="comments" id="checkedAcceptError"></p>
    </div>

    <button type="submit">Envoyer</button>
</form>';
?>