<?php
session_start();
require_once __DIR__ . "/../layout/header.php";
require_once __DIR__ . "/../function/Redirection.php";
require_once __DIR__ . '/../function/getConnection.php';

$pdo = getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_name = $_POST["last_name"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!empty($email) && !empty($password)) {
        // Hachez le mot de passe avant de le stocker dans la base de données
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $req = $pdo->prepare("INSERT INTO Utilisateurs (nom, prenom, adresse_mail, mot_de_passe) VALUES (:last_name, :name, :email, :password)");
        $req->execute(array(':last_name' => $last_name, ':name' => $name, ':email' => $email, ':password' => $hashedPassword));

        // Inscription réussie, vous pouvez rediriger ou effectuer d'autres actions.
    } else {
            Utils::redirect('subscribe.php?error=' . AppError::DB_CONNECTION);
    }
}

// ... (votre code précédent pour la connexion)

?>
