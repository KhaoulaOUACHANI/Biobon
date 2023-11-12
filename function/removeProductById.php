<?php

function removeProductById($productId, $cart) {
    return array_filter($cart, function ($product) use ($productId) {
        return !(isset($product['id_produit']) && $product['id_produit'] == $productId);
    });
}
?>
