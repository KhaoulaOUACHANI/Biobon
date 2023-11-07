<?php
require_once 'layout/header.php'; 
require_once 'function/getProduictById.php';
require_once 'functions.php';

$products = getAllProducts();
?>


<h1 class="mt-5 pt-5 mb-4 text-center ">Nos produits</h1>
<div class="container">
    <div class="row mt-5 pt-5">

            <?php foreach ($products as $product) {
            ?>
                <div class="col-lg-4 mt-2 mb-2"> 
                <?php
                require 'card_product.php';
                ?>
                </div>
            <?php
            } ?>   

    </div>
</div>

<?php
require_once 'layout/footer.php'; 

