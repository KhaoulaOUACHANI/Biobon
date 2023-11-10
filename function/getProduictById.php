<?php
require_once __DIR__ ."/getConnection.php";
function getProductById($productId) {
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM Produits WHERE id_produit = :productId");
    $stmt->bindValue(':productId', $productId);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}