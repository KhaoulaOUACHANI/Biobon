<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php
    $email = $_GET['email'] ?? "";
    ?>
    <form method="POST" action="login_process.php" >
        <label for="">Email</label>
        <input type="email" placeholder="Entre votre email" id="email" name="email" required>
        <label for="">Mot de passe</label>
        <input type="password" placeholder="Entre votre mot de passe" id="password" name="password" required>
        <input type="submit" value="Se connecter" name="ok">
    </form>
</body>
</html>