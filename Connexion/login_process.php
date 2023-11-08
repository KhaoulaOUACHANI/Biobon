<?php
require_once __DIR__ . "/../function/Redirection.php";
require_once __DIR__ . '/../function/getConnection.php';
require_once __DIR__ . "/../classes/Utils.php";
require_once __DIR__ . "/../classes/MailsError.php";

$pdo = getConnection();

if (!isset ($_POST)) {
    Utils::redirect("login.php?error=" . MailsError::EMPTY);
}
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM utilisateurs WHERE adresse_mail =  :email";
    $req = $pdo->prepare($query);
    $req->bindValue("email", $email);
    $req->execute();
    $rep = $req->fetch();

    if (empty($rep)) {
        Utils::redirect('login.php?error='. MailsError::USER_NOT_FOUND);
    }

    if (empty(!password_verify ($password, $rep['mot_de_passe']))) {
        //Si les deux sont pas bon rediriger vers login avec message d'erreur
            Utils::redirect('login.php?error='. MailsError::PASSWORD_ERROR);
    }
    // Stocker l'id de rep dans le $_SESSION['user_info']['id'] rediriger vers la page profile  
    $_SESSION['user_info'] = [
        'id'    => $rep['id'],
        'email' => $email 
    ];
    Utils::redirect('profile.php');

?>
