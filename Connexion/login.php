<div class= "image">
<?php 
require_once __DIR__ ."/../layout/header.php";
require_once __DIR__ ."/../function/getErrorMessage.php";
?>
<div class="row mt-5 pt-5 pb-5 mb-5">
  <h1 class="text-center">Connexion</h1>
  <div class="col-3 "></div>
<form method="POST" action="connexion/login_process.php" class="col-6 ">
  <div class="mb-3 mt-4 pt-4" >
    
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Entrez votre email" >
    <div id="emailHelp" class="form-text">Ne partagez jamais vos identifiants de connexion. À la place, vous pouvez partager des Biobons !</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label" >Mot de passe</label>
    <input type="password" class="form-control" id="password"  name="password" placeholder="Entrez votre mot de passe" >
  </div>
  <div>
  <div class="row"> 
      <div class="col-3"></div>
      <?php
      if (isset($_GET['error'])) { ?>
                <div class="pt-4 pb-4 text-danger border border-danger col-6 text-center mb-4 ">
                    <?php echo getErrorMessage(intval($_GET['error'])); 
                    ?>
                </div>
            <?php
            } 
      ?>
      </div>
  </div>
  <button type="submit" class="btn btn-primary mt-4">Se connecter</button>
  <p class="pt-2">Pas encore inscrit? <a href="Biobon/../inscription/subscribe.php">Je m'inscris !</a></p>
</form>
<div class="col-3"></div>
</div>
</div>
