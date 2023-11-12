<?php
require_once __DIR__ ."/getConnection.php";
function getProductByname($productName) {
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM Produits WHERE nom_produit = :productName");
    $stmt->bindValue(':productName', $productName);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}