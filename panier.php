<?php


$_SESSION['connected'] = false;

if(isset($_SESSION['utilisateur_connecte'])) {
    
    echo "Contenu du panier ici";
} else {
    
    echo "Connectez-vous pour accéder à votre panier.<br>";
    echo "<a href='page_de_connexion.php'>Se connecter</a>";
}