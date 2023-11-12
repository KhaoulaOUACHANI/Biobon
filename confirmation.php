<?php

require_once __DIR__ . "/function/getUtilisateurById.php";


if (isset($_GET["id_utilisateur"])) {
    $id = $_GET["id_utilisateur"];
    $utilisateurbyId = getUtilisateursById($id);
    echo "Merci pour votre commande " . $utilisateurbyId['nom'] . " " . $utilisateurbyId['prenom'];
}

