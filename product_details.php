<?php
require_once 'layout/header.php'; 
require_once 'functions.php';
require_once 'function/getProduictById.php';
require_once 'product_details_back.php'
?>

<div class='pt-5 mt-5'> 
    <div class="container card mb-3 mt-5 pt-5 h-auto vw-100 pb-5">
        <div class="row g-0">
            <div class="col-md-4 mt-5">
                <img src="<?php echo $produitbyId['image_produit']?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produitbyId['nom_produit']?></h5>
                    <p class="card-text"><?php echo $produitbyId['description_produit']?></p>
                    <p class="card-text"><small class="text-body-secondary"><?php echo $produitbyId['prix']?></small></p>
                    <a type="button" class="btn btn-outline-danger" href="panier/addpanier.php?id=<?php echo $product['id_produit']; ?>">Acheter</a>
                </div>
            </div>
        </div>
    </div>
</div>

        

<?php
require_once 'layout/footer.php'; 
?>
