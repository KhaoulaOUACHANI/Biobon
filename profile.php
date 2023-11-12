<?php
require_once 'classes/Utils.php';
require_once 'layout/header.php';

if (!isset($_SESSION['user_info'])) {
    $_SESSION['loginErrorMessage'] = "Vous devez être identifié pour accéder à cette page";
    Utils::redirect("connexion/login.php");
}
?>

<main class="prose mx-auto mt-5">
    <h1>Profil</h1>
    <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div> 
</main>

<?php require_once 'layout/footer.php';