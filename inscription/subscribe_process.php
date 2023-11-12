<?php
require_once __DIR__ . "/../classes/Utils.php";
require_once __DIR__ . '/../function/getConnection.php';
require_once __DIR__ . "/../classes/Utils.php";
require_once __DIR__ . "/../classes/AppError.php";

$pdo = getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_name = $_POST["last_name"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmedpassword = $_POST["confirmedpassword"];


    if(empty($last_name)){
        Utils::redirect('subscribe.php?error='. AppError::LAST_NAME_EMPTY);
    }

    if(empty($name)){
        Utils::redirect('subscribe.php?error='. AppError::NAME_EMPTY);
    }

    if(empty($email)) {
        Utils::redirect('subscribe.php?error='. AppError::EMAIL_EMPTY);
    }

    if(empty($password) || empty($confirmedpassword)) {
        Utils::redirect('subscribe.php?error='. AppError::PASSWORD_EMPTY);
    }

    if ($password !== $confirmedpassword){
        Utils::redirect('subscribe.php?error='. AppError::PASSWORD_INVALID);
    }

    if (!empty($email) && !empty($password)) {
        // Hashage du mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $req = $pdo->prepare("INSERT INTO Utilisateurs (nom, prenom, adresse_mail, mot_de_passe) VALUES (:last_name, :name, :email, :password)");
        $req->execute(array(':last_name' => $last_name, ':name' => $name, ':email' => $email, ':password' => $hashedPassword));

        Utils::redirect('../connexion/login.php');
    }

}

?>
