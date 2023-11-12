<?php
require_once __DIR__ ."/getConnection.php";
function getPanierBySession() {

    if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {
        return $_SESSION['panier'];
    } else {
        return array(); 
    }
}
