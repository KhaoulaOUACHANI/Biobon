<?php
require_once __DIR__ . "/layout/_header.php";
require_once __DIR__ . "/function/getProductById.php";
require_once __DIR__ . "/classes/Utils.php";
require_once __DIR__ . "/classes/AppError.php";

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

?>
