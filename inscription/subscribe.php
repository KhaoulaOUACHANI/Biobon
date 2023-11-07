<?php 
session_start();
require_once __DIR__ ."/../layout/header.php";
require_once __DIR__ ."/../layout/navbar.php";

if (isset($_SESSION['loginErrorMessage'])) { ?>
            <div class="p-4 bg-red-200 text-red-700">
                <?php echo $_SESSION['loginErrorMessage']; ?>
            </div>
        <?php
            unset($_SESSION["loginErrorMessage"]);
        } 
?>


<div class="row pt-5 image">
  <div class="col-3 "></div>
<form method="POST" action="inscription/subscribe_process.php" class="col-6 ">
  <div class="mb-3 mt-5 pt-5" >
    <h1>Inscription</h1>
  <h2 id="emailHelp" class="form-text mt-5">Ne partagez jamais vos identifiants de connexion. À la place, vous pouvez partager des Biobons !</h2>
  <label for="last_name" class="form-label"  >last_name</label>
    <input type="last_name" class="form-control mt-3 mb-3" id="last_name" aria-describedby="last_nameHelp" name="last_name" placeholder="Entrez votre prénom" required>
  <label for="name" class="form-label">name</label>
    <input type="name" class="form-control mt-3 mb-3" id="name" aria-describedby="nameHelp" name="name" placeholder="Entrez votre nom" required>
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control mt-3 mb-3" id="email" aria-describedby="emailHelp" name="email" placeholder="Entrez votre email" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label" >Mot de passe</label>
    <input type="password" class="form-control mt-3 mb-3" id="password" name="password" placeholder="Mot de passe" required>
    <label for="passwordconfirme" class="form-label" >Confirmer votre mot de passe</label>
    <input type="passwordconfirme" class="form-control mt-3 mb-3" id="passwordconfirme"  name="passwordconfirme" placeholder="Confirmer votre mot de passe" required>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>
<div class="col-3"></div>
</div>