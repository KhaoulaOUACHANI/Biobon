<?php
require_once __DIR__ ."/../layout/_header.php";
require_once __DIR__ ."/../function/getProduictById.php";


?>

<div class="mt-5 pt-5 container">
    <?php

    if (isset($_GET["id"])) {
        $_SESSION['panier'][] =  $_GET['id'];
    }
    ?> 
    <table class="table">
        <thead>
            <tr>
            <th scope="col">
                image
            </th>
            <th scope="col">Nom</th>
            <th scope="col">Prix</th>
            <th scope="col">Quantité</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">
                <?php foreach ($_SESSION['panier'] as $id) { 
                    $product = getProductById($id) ?>
                <img class="img-fluid" width="100px" src="<?php echo $product['image_produit']; ?>" alt="<?php echo $product['nom_produit']; ?>">
            </th>
            <td>
                <h3><?php echo $product['nom_produit']; ?></h3>
            </td>
            <td>
            <span class="price fw-bold"><?php echo $product['prix']; ?>€</span>
            </td>
            <td>
            <a href="/delete.php?id=<?php echo $product['id_produit']; ?>" alt="<?php echo $product['id_produit']; ?>"><i class="fa-solid fa-trash" style="color: #000000;"></i></a>
            </td>
            </tr>
            <?php    }?>
        </tbody>
        </table>
    <table class="table table-success table-striped">


        <div class="col-lg-3">
            
        </div>
    </table>
</div>
    

