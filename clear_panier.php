<div class="pb-5 mb-5"></div>
<?php
ob_start(); // Envoie les entête au navigteur en priorité
require_once __DIR__ . "/layout/_header.php";
require_once __DIR__ . "/function/getProductById.php";
require_once __DIR__ . "/function/removeProductById.php";
require_once __DIR__ . "/classes/Utils.php";

if (isset($_GET['id']) && !empty($_SESSION['panier'])) {
    $productId = $_GET['id'];
    // Suprime une ligne du panier
    foreach ($_SESSION['panier'] as $key => $product) {
        if (isset($product['id_produit'], $product['id_produit']) && $product['id_produit'] == $productId) {
            unset($_SESSION['panier'][$key]);
            break;
        }
    }
}

Utils::redirect('panier/addpanier.php');
exit();
