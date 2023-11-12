<?php
require_once __DIR__ ."/getConnection.php";
function getUtilisateursById($utilisateurId) {
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM Utilisateurs WHERE id_utilisateur = :utilisateurId");
    $stmt->bindValue(':utilisateurId', $utilisateurId);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}