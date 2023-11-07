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
<div class='pt-5 mt-5'> 
    <div class="container card mb-3 mt-5 pt-5" style="max-width: 700px;">
  <div class="row g-0">
    <div class="col-md-4">
                <img src="<?php echo $produitbyId['image_produit']?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produitbyId['nom_produit']?></h5>
                    <p class="card-text"><?php echo $produitbyId['description_produit']?></p>
                    <p class="card-text"><small class="text-body-secondary"><?php echo $produitbyId['prix']?></small></p>
                    <button type="button" class="btn btn-outline-danger">Acheter</button>
                </div>
                </div>
            </div>
                </div>
            </div>

        

<?php
require_once 'layout/footer.php'; 
?>
