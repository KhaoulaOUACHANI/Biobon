<?php
require_once __DIR__ . "/../layout/_header.php";
require_once __DIR__ . "/../function/getProductById.php";
require_once __DIR__ . "/../function/getUtilisateurById.php";
require_once __DIR__ . "/../classes/Utils.php";
require_once __DIR__ . "/../classes/AppError.php";

$produitbyId = getProductById("id");
$nomById = getUtilisateursById("id_utilisateur");

// Vérifie si l'utilisateur n'est pas connecté
if (!isset($_SESSION['user_info'])) {
    // Redirige vers la page de connexion avec un message d'erreur
    Utils::redirect('../connexion/login.php?error=' . AppError::LOGIN_CONNECTION);
}


// Vérifie si l'id est dans l'URL
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
?>

<div class="mt-5 pt-5 container">
<div class='pt-5 mt-5'> 
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
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        // Vérifiez si la clé 'nom_produit' existe dans le tableau $product
                        if (isset($product['nom_produit'])) {
                            echo '<h3>' . $product['nom_produit'] . '</h3>';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        // Vérifiez si la clé 'prix' existe dans le tableau $product
                        if (isset($product['prix'])) {
                            echo '<span class="price fw-bold">' . $product['prix'] . '€</span>';
                        }
                        ?>
                    </td>
                    <td>
                        <a href="clear_panier.php?id=<?php
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

    <table class="table table-success table-striped ">
        <div class="col-lg-3 container">
        <a href="confirmation.php?id=<?php echo $utilisateurById['id_utilisateur']; ?>">
            <button type="button" class="btn btn-outline-danger">Valider mon panier</button>
        </a>
        
        </div>
    </table>
</div>
</div>
    

