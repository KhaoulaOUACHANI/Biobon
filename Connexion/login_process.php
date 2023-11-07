<?php
require_once __DIR__ . "/../layout/header.php";
require_once __DIR__ . "/../function/Redirection.php";
require_once __DIR__ . '/../function/getConnection.php';

$pdo = getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email != "" && $password != "") {

        $req = $pdo->query("SELECT * FROM utilisateurs WHERE adresse_mail = '$email' AND mot_de_passe = '$password'");
        $rep = $req->fetchAll();
        
        if ($rep['id_utilisateurs'] != false) {
            header("Location: profile.php");
            exit();
        } else {
            $_SESSION['error_msg'] = "Email ou mdp incorrect";
            Redirection::redirect("login.php");
        }
    } 
}


/*
if (!empty($email) && !empty($password)) {
$hashedPassword = password_hash($password, //PASSWORD_DEFAULT);

$req = $pdo->prepare("SELECT * FROM Utilisateurs WHERE adresse_mail = :email AND mot_de_passe = :password");
$req->execute(array(
    ':email'    => $email, 
    ':password' => $password,
));
$rep = $req->fetch();*/
?>
