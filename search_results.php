<?php
require_once 'layout/header.php'; 
require_once __DIR__ . "/classes/Utils.php";
require_once __DIR__ . "/function/getProductByName.php";

if (!isset($_GET['search'])) {
    Utils::redirect("panier.php");
}

['search' => $search] = $_GET;

$product = getProductByName($search);

if ($product) {
    ?>

<div class='pt-5 mt-5'> 
    <div class="container card mb-3 mt-5 pt-5 h-auto vw-100 pb-5">
        <div class="row g-0">
            <div class="col-md-4 mt-5">
                <img src="<?php echo $product['image_produit']?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['nom_produit']?></h5>
                    <p class="card-text"><?php echo $product['description_produit']?></p>
                    <p class="card-text"><small class="text-body-secondary"><?php echo $product['prix']?></small></p>
                    <a type="button" class="btn btn-outline-danger" href="panier/addpanier.php?id=<?php echo $product['id_produit']; ?>">Acheter</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
} else { ?>
    <div class="mb-3 mt-5 pt-5 pb-5"></div>
    <?php
    echo 'Pas de produit sélectionné';
}
?>
