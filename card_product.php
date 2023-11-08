<?php 
require_once 'layout/header.php';
require_once 'functions.php';
?>

    <div class="border d-flex flex-column rounded text-center p-2 ">
        <a href="product_details.php?id=<?php echo $product['id_produit']; ?>">
            <img class="img-fluid" src="<?php echo $product['image_produit']; ?>" alt="<?php echo $product['nom_produit']; ?>">
        </a>
            <h3><?php echo $product['nom_produit']; ?></h3>
        
            <!-- <p><?php echo $product['description_produit']; ?></p> -->
            <span class="price fw-bold"><?php echo $product['prix']; ?>€</span>
            <button type="button" class="btn btn-outline-danger">Acheter</button>
        
    </div>