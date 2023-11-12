<?php
require_once __DIR__ ."/getConnection.php";
function getUtilisateurBySession() {

    if (isset($_SESSION['info_user']) && is_array($_SESSION['info_user'])) {
        return $_SESSION['info_user'];
    } else {
        return array(); 
    }
}
