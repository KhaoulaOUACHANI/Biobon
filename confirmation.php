<?php

require_once __DIR__ . "/function/getUtilisateurById.php";


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $utilisateurbyId = getUtilisateursById($id);
    echo "Merci pour votre commande " . $utilisateurbyId['nom'] . " " . $utilisateurbyId['prenom'];
}

