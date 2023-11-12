<?php
require_once __DIR__ . "/../layout/_header.php";
require_once __DIR__ . "/../function/getProductById.php";
require_once __DIR__ . "/../function/getUtilisateurById.php";
require_once __DIR__ . "/../classes/Utils.php";
require_once __DIR__ . "/../classes/AppError.php";

// Vérifie si l'utilisateur n'est pas connecté, le beug viens de là
if (!isset($_SESSION['user_info'])) {
    Utils::redirect('../connexion/login.php?error=' . AppError::LOGIN_CONNECTION);
}

$id_utilisateur = $_SESSION['user_info']['id_utilisateur'];
$utilisateurById = getUtilisateurById($id_utilisateur);

// Vérifie si l'id est dans l'URL
if (isset($_GET["id"])) {
    $productId = $_GET['id'];

    $product = getProductById(intval($productId));

    if ($product !== false) {
        $_SESSION['panier'][] = $product;
    } else {
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
            foreach ($_SESSION['panier'] as $product) {
                ?>
                <tr>
                    <td>
                        <?php
                        if (isset($product['image_produit'])) {
                            echo '<img class="img-fluid" width="100px" src="' . $product['image_produit'] . '" alt="' . $product['nom_produit'] . '">';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if (isset($product['nom_produit'])) {
                            echo '<h3>' . $product['nom_produit'] . '</h3>';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if (isset($product['prix'])) {
                            echo '<span class="price fw-bold">' . $product['prix'] . '€</span>';
                        }
                        ?>
                    </td>
                    <td>
                        <a href="clear_panier.php?id=<?php
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


        <div class="col-lg-3 container">
            <form action="confirmation.php" method="POST">
                <input type="hidden" name="id_utilisateur" value="<?php echo $utilisateurById['id_utilisateur']; ?>">
                <button class="btn btn-outline-danger">Valider mon panier</button>
            </form>

                    
        </div>

</div>
</div>
    

