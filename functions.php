<?php
require_once 'function/getConnection.php';
function getAllProducts()
{
    $pdo = getConnection();
    $sql = "SELECT id_produit, nom_produit, prix, description_produit, reference_produit, image_produit FROM produits";
    $stmt = $pdo->query($sql);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $products;
}
