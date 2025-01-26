<?php
$array = [
    "name" => "",
    "email" => "",
    "telephone" => "",
    "message" => "",
    "checkedAccept" => "",
    "nameError" => "",
    "emailError" => "",
    "telephoneError" => "",
    "messageError" => "",
    "checkedAcceptError" => "",
    "isSucces" => false,
];

$emailTo = "contact@webilys.fr";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Récupération et validation des données
    $array["name"] = verifyInput($_POST['name'] ?? "");
    $array["email"] = verifyInput($_POST['email'] ?? "");
    $array["telephone"] = verifyInput($_POST['telephone'] ?? "");
    $array["message"] = verifyInput($_POST['message'] ?? "");
    $array["checkedAccept"] = isset($_POST['checkedAccept']) ? "on" : "";

    $array["isSucces"] = true; // Par défaut, valide

    // Validation des champs
    if (empty($array["name"])) {
        $array["nameError"] = "Veuillez entrer votre nom et prénom.";
        $array["isSucces"] = false;
    }

    if (!isEmail($array["email"])) {
        $array["emailError"] = "Veuillez entrer une adresse email valide.";
        $array["isSucces"] = false;
    }

    if (!isPhone($array["telephone"])) {
        $array["telephoneError"] = "Veuillez entrer un numéro de téléphone valide.";
        $array["isSucces"] = false;
    }

    if (empty($array["message"])) {
        $array["messageError"] = "Veuillez décrire votre projet.";
        $array["isSucces"] = false;
    }

    if ($array["checkedAccept"] !== "on") {
        $array["checkedAcceptError"] = "Vous devez accepter la transmission de vos données.";
        $array["isSucces"] = false;
    }

    // Envoi de l'email si tout est valide
    if ($array["isSucces"]) {
        $emailText = "Nom : {$array["name"]}\n";
        $emailText .= "Email : {$array["email"]}\n";
        $emailText .= "Téléphone : {$array["telephone"]}\n";
        $emailText .= "Message : {$array["message"]}\n";
        $emailText .= "Acceptation des données : Oui\n";

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $headers .= "De : {$array["name"]} <{$array["email"]}>\r\n";
        $headers .= "Répondre à : {$array["email"]}";

        mail($emailTo, "Formulaire de contact Webilys", $emailText, $headers);
    }

    // Retour JSON
    echo json_encode($array);
}

// Fonctions utilitaires
function isPhone($var)
{
    return preg_match("/^[0-9 .\-+()]*$/", $var);
}

function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function verifyInput($var)
{
    return htmlspecialchars(trim(stripslashes($var)), ENT_QUOTES, 'UTF-8');
}
?>