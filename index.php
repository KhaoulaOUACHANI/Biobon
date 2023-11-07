<?php 
    require_once __DIR__ ."/layout/header.php";
    require_once __DIR__ . '/function/getConnection.php';

    $pdo = getConnection();?>


        
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
                        <div class="col-lg-6 border "> 
                            <div class="border ">
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
                                <h3>Notre</h3>
                                <h2>Philosophie</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit a modi odio sint soluta id consequuntur alias, fuga itaque eum quis cumque sit. Ex officiis quasi aspernatur <br> <br>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae eaque tempora vero totam doloremque facilis dolores facere harum voluptatibus commodi, omnis sit earum vel fuga reprehenderit officia autem. Ipsa, id.</p>
                                
                                <p class="gras mb-4"> We try to do our best to help you and provide with a high-quality services.</p>

                                <a class="btn" href="">En savoir plus</a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </main>

<?php require_once __DIR__ . "/layout/footer.php"?>