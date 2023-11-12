<?php
require_once __DIR__ ."/function/getProduictById.php";

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    $productDetails = getProductById($productId);



    if ($productDetails) {
        // Ajoutez le produit au panier
        $_SESSION['panier'][] = $productDetails;

        // Redirigez l'utilisateur vers la page boutique 
        Utils::redirect('Location: addpanier.php');
        exit;
    }
}
?>
