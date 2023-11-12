<div class="pb-5 mb-5"></div>
<?php
ob_start(); // permet de commencer la mémoire tampon (il envoie les entête au navigteur en priorité)
require_once __DIR__ . "/layout/_header.php";
require_once __DIR__ . "/function/getProductById.php";
require_once __DIR__ . "/function/removeProductById.php";
require_once __DIR__ . "/classes/Utils.php";

if (isset($_GET['id']) && !empty($_SESSION['panier'])) {
    $productId = $_GET['id'];
    // Suprimer une ligne du panier
    foreach ($_SESSION['panier'] as $key => $product) {
        if (isset($product['id_produit'], $product['id_produit']) && $product['id_produit'] == $productId) {
            unset($_SESSION['panier'][$key]);
            break;
        }
    }
}


// Rediriger vers la page du panier
Utils::redirect('panier/addpanier.php');
exit();
