<?php
if (!isset($_COOKIE['cookieWebilys'])) {
    // Si le cookie n'existe pas, afficher le popup
    $showPopup = true;
} else {
    // Si le cookie existe, ne pas afficher le popup
    $showPopup = false;
}
?>