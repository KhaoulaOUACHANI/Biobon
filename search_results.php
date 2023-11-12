<!-- search_results.php -->
<?php
// Assurez-vous que vous avez une connexion à la base de données

if (!isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Utilisez la variable $searchTerm pour interroger la base de données
    // Exécutez la requête SQL ou utilisez une méthode ORM selon votre structure

    // Exemple de requête SQL (utilisez la méthode que vous utilisez dans votre application)
    $sql = "SELECT * FROM produits WHERE nom_produit LIKE :searchTerm";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%');
    $stmt->execute();

    // Récupérez les résultats de la recherche
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichez les résultats
    foreach ($results as $result) {
        echo $result['nom_produit'] . "<br>";
    }
}
