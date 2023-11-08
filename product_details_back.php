<?php
require_once 'layout/header.php'; 
require_once 'functions.php';
require_once 'function/getProduictById.php';

if (!isset($_GET['id'])) {
    http_response_code(404);
    echo "Produit non trouvé";
    exit;
}

['id' => $id] = $_GET;

if (!is_numeric($id)) {
    http_response_code(404);
    echo "Produit non trouvé";
    exit;
}

$id = intval($id);

$product = getProductById($id);

if (!$product) {
    http_response_code(404);
    echo "Produit non trouvé";
    exit;
}

$produitbyId = getProductById($id);
?>