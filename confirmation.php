<?php
session_start();

require_once __DIR__ . "/function/getUtilisateurById.php";
require_once __DIR__ . "/function/getPanierBySession.php";
require_once __DIR__ . "/function/getUtilisateurBySession.php";
require_once __DIR__ . "/classes/Utils.php";

// Vérifie si l'utilisateur est connecté, le beug venait de là
if (!isset($_SESSION['user_info'])) {
    Utils::redirect('/../connexion/login.php?error=' . AppError::LOGIN_CONNECTION);
    exit(); 
}

$id_utilisateur = $_SESSION['user_info']['id_utilisateur'];
$utilisateurById = getUtilisateurBySession();
$panier = getPanierBySession();

?>
<div>
    
<h1>Merci pour votre commande, <?php echo $utilisateurById['nom'] . " " . $utilisateurById['prenom']; ?></h1>

<?php if (!empty($panier)){ ?>
    <h2>Produits commandés :</h2>
    <ul>
        <?php foreach ($panier as $produit){ ?>
            <li><?php echo $produit['nom_produit']; ?></li>
        <?php } ?>
    </ul>
<?php } else{ ?>
    <p>Votre panier est vide.</p>
<?php } ?>

</div>


</body>
</html>
