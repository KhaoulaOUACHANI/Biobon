<div class="pb-5 mb-5"></div>
<?php
require_once __DIR__ . "/layout/_header.php";
require_once __DIR__ . "/function/getProduictById.php";
require_once __DIR__ . "/classes/Utils.php";

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Supprimer le produit du panier en fonction de l'ID
    if (!empty($_SESSION['panier'])) {
        foreach ($_SESSION['panier'] as $key => $product) {
            if (isset($product['id_produit'])) {
                unset($_SESSION['panier'][$key]);
                break; // Sortir de la boucle une fois que le produit est supprimé
            }
        }
    }
}
// Rediriger vers la page du panier
Utils::redirect('panier/addpanier.php');
exit();
?>
