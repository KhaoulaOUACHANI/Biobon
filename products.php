<?php
require_once 'layout/header.php'; 
require_once 'function/getProductById.php';
require_once 'functions.php';

$products = getAllProducts();
?>


    <h1 class="mt-5 pt-5 mb-4 text-center ">Nos produits</h1>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <form class="d-flex" role="search" action="search_results.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Entrez votre..." aria-label="Search" name="search">
        <button class="btn btn-outline-danger" type="submit">...Recherche</button>
        </form>
    </div>
    </nav>
        <div class="row mt-3 pt-3">

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

