<?php 

require_once __DIR__ ."/../layout/header.php";
require_once __DIR__ ."/../layout/navbar.php";
?>
<div class="row mt-5 pt-5">
  <h1 class="text-center mt-5">Connexion</h1>
  <div class="col-3 "></div>
<form method="POST" action="connexion/login_process.php" class="col-6 ">
  <div class="mb-3 mt-4 pt-4" >
    
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">Ne partagez jamais vos identifiants de connexion. À la place, vous pouvez partager des Biobons !</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label" >Mot de passe</label>
    <input type="password" class="form-control" id="password"  name="password" required>
  </div>
  <div>
    <?php 
      if (isset($_SESSION['error_msg'])) { ?>
            <div class="p-4 bg-red-200 text-red-700">
                <?php echo $_SESSION['error_msg']; 
                ?>
            </div>
        <?php
            unset($_SESSION['error_msg']);
        } 
        ?>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>
<div class="col-3"></div>
</div>