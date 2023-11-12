<?php
require_once __DIR__ . "/layout/_header.php";
require_once __DIR__ . "/function/getProductById.php";
require_once __DIR__ . "/classes/Utils.php";
require_once __DIR__ . "/classes/AppError.php";

// Vérifie si l'utilisateur n'est pas connecté
if (!isset($_SESSION['user_info'])) {
    // Redirige vers la page de connexion avec un message d'erreur
    Utils::redirect('../connexion/login.php?error=' . AppError::LOGIN_CONNECTION);
}

// Initialise le panier si non défini
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

// Vérifie si l'ID est dans l'URL
if (isset($_GET["id"])) {
    $productId = $_GET['id'];

    // Produit complet à partir de l'ID
    $product = getProductById(intval($productId));

    // Vérification si getProductById a réussi
    if ($product !== false) {
        // Ajoute le produit à la session
        $_SESSION['panier'][] = $product;
    } else {
        // Si le produit n'a pas été trouvé = erreur
        echo "Le produit avec l'ID $productId n'a pas été trouvé.";
    }
}
?>
