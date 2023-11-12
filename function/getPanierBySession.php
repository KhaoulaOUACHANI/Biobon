<?php
require_once __DIR__ ."/getConnection.php";
function getPanierBySession() {

    // Vérifiez si la clé 'panier' existe dans la session
    if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {
        return $_SESSION['panier'];
    } else {
        return array(); // Retourne un tableau vide si la clé 'panier' n'existe pas ou n'est pas un tableau
    }
}
