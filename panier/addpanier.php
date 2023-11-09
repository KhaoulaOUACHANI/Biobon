<?php
require_once __DIR__ ."/../layout/_header.php";
require_once __DIR__ ."/../function/getProduictById.php";
?>

<div class="mt-5 pt-5">
    <?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $product = getProductById($id);
        if(empty($product)) {
            die("Ce produit n'existe pas");
        }var_dump($product);
        
    } else {
        die("Vous n'avez pas sélectionné de produit à ajouter au panier");
    }
    ?>
</div>
