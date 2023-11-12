<?php
require_once __DIR__ . "/../layout/_header.php";
require_once __DIR__ . "/../function/getProduictById.php";
require_once __DIR__ . "/../classes/Utils.php";
require_once __DIR__ . "/../classes/AppError.php";


if (!isset($_SESSION['user_info'])) {

// Vérifie si l'ID est dans l'URL
if (isset($_GET["id"])) {
    $productId = $_GET['id'];

    // produit complet à partir de l'ID
    $product = getProductById(intval($productId));

    // Vérification si getProductById a réussi
    if ($product !== false) {
        // Ajoute le produit à la session
        $_SESSION['panier'][] = $product;
    } else {
        // Si le produit n'a pas été trouvé = erreur
        echo "Le produit avec l'ID $productId n'a pas été trouvé.";
    }
}

    
}     Utils::redirect('../connexion/login.php?error=' . AppError::LOGIN_CONNECTION);
?>

<div class="mt-5 pt-5 container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Quantité</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Affichez les produits du panier
            foreach ($_SESSION['panier'] as $product) {
                ?>
                <tr>
                    <td>
                        <?php
                        // Vérifiez si la clé 'image_produit' existe dans le tableau $product
                        if (isset($product['image_produit'])) {
                            echo '<img class="img-fluid" width="100px" src="' . $product['image_produit'] . '" alt="' . $product['nom_produit'] . '">';
                        } else {
                            echo 'Image non disponible';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        // Vérifiez si la clé 'nom_produit' existe dans le tableau $product
                        if (isset($product['nom_produit'])) {
                            echo '<h3>' . $product['nom_produit'] . '</h3>';
                        } else {
                            echo 'Nom non disponible';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        // Vérifiez si la clé 'prix' existe dans le tableau $product
                        if (isset($product['prix'])) {
                            echo '<span class="price fw-bold">' . $product['prix'] . '€</span>';
                        } else {
                            echo 'Prix non disponible';
                        }
                        ?>
                    </td>
                    <td>
                        <a href="./clear_panier.php?id=<?php
                            // Vérifiez si la clé 'id_produit' existe dans le tableau $product
                            echo isset($product['id_produit']) ? $product['id_produit'] : '';
                        ?>" alt="<?php echo isset($product['id_produit']) ? $product['id_produit'] : ''; ?>">
                            <i class="fa-solid fa-trash" style="color: #000000;"></i>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <table class="table table-success table-striped">
        <div class="col-lg-3">

        </div>
    </table>

    <div>
    <a type="button" class="btn btn-outline-danger mb-5 me-3" href="confirmation.php?id=<?php echo $product['id_produit']; ?>">Valider le panier</a>

    </div>
</div>

