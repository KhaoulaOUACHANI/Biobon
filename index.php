<?php 
    require_once __DIR__ ."/layout/header.php";
    require_once __DIR__ . '/function/getConnection.php';
    require_once __DIR__ .'/functions.php';

    $pdo = getConnection();
    $products = getAllProducts();
?>
        
    <div class="image">
        <header> 
        
        <?php require_once __DIR__ . "/layout/navbar.php"; ?>
        
        </header>

        <main>
        
        <section class="mt-5 pt-5">
            <!-- LE NOM DE MA SECTION EN COMMENTAIRE -->
            <div class="container justify-content-center"> <!-- container si je touche pas les bords pas de container si je touche les bords)-->
                
                <div class="row "> <!-- ça aligne -->
                    <div class="col-lg-4 "> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class=" mb-3 ">
                            <img src="img/image_gauche.png"  class="img-fluid " alt="">
                        </div>
                    </div>
                    <div class="col-lg-4"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class=" mb-3">
                            <img src="img/Image_centre.png"  class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4"> <!-- On copie ça le nombre de fois ou on a besoin -->
                        <div class=" mb-3">
                            <img src="img/Image_droite.png"  class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>    
        </section>
    </div>
        

            
            <section>
                <div class="container  mt-5">

                    <div class="row "> <!-- ça aligne -->

                        <div class="col-lg-6"> 
                            <div class="mb-3">
                                <img src="img/Image-couple.png" width="636px" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6  align-self-center"> 
                            <div>
                                <h2>Qui sommes nous ?</h2>
                                <p>Bienvenue chez Biobon, où la douceur rencontre la durabilité. Nous sommes Ana et Alex, un couple passionné qui a créé Biobon pour offrir des bonbons bio délicieux, exempts d'ingrédients artificiels, tout en préservant notre planète. Chez Biobon, nous sommes déterminés à vous proposer des douceurs savoureuses et éthiques, fabriquées à partir d'ingrédients biologiques et emballées de manière respectueuse de l'environnement. Rejoignez-nous pour une expérience sucrée qui fait du bien à votre palais et à la Terre.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>


            <section class="image pb-5 pt-4 mt-5"><!-- notre philosophie section 3 -->
                <div class="container  mt-5 mb-5 ">

                    <div class="row "> <!-- ça aligne -->

                        <div class="col-lg-6"> 
                            <div class="mb-3 ">
                                
                            </div>
                        </div>
                        <div class="col-lg-6"> 
                            <div class="">
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                    
                                    <a href="product_details.php?id=<?php echo $produit->getImage(); ?>">
                                        <img class="img-fluid" src="<?php echo $product['image_produit']; ?>" alt="<?php echo $product['nom_produit']; ?>">
                                    </a>
                                        <h3><?php echo $product['nom_produit']; ?></h3>
                                    
                                        <!-- <p><?php echo $product['description_produit']; ?></p> -->
                                        <span class="price fw-bold"><?php echo $product['prix']; ?>€</span>
                                        <button type="button" class="btn btn-outline-danger">Acheter</button>

                                    
                                    <div class="carousel-item" data-bs-interval="2000">
                                    <img src="..." class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="..." class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </main>

<?php require_once __DIR__ . "/layout/footer.php"?>