<?php require_once __DIR__ ."/layout/header.php";?>

    <body>

        <header> 
            <?php require_once __DIR__ ."/layout/navbar.php";?>
        </header>

        <main>
                <!-- Carousel -->
            <div id="carouselCaptions" class="carousel slide mb-3 position-relative" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="img/slider1_biobon.png" class="d-block w-100 imageslider1" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="img/slider2_biobon.png" class="d-block w-100" alt="...">
                        
                    </div>
                    <div class="carousel-item">
                        <img src="img/Slider3_bonbon.png" class="d-block w-100" alt="...">
                    
                    </div>
                </div>
                <div class="position-absolute top-50 start-50 translate-middle container newsletter">
                    <div class=" couleur">
                        <h5 class="fs-1"> Rejoignez notre communauté sucrée et soyez au cœur de la gourmandise !</h5>
                        <div class="mb-3 mt-5 casen">
                            <label for="text" class="form-label" >Newsletter</label>
                            <input class="w-50 p-1" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
                            <button type="button" class="btn btn-danger mt-3">Je m'inscris</button>
                        </div>
                    </div>
                </div>
            </div>


            <section>
                <div class="container  mt-5">

                    <div class="row "> <!-- ça aligne -->

                        <div class="col-lg-6"> 
                            <div class="mb-3">
                                <img src="img/Image-couple.png" width="636px" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6"> 
                            <div class="border ">
                                <h2>Qui sommes nous ?</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, reprehenderit consectetur asperiores reiciendis doloribus odit! Modi, doloremque! Fugiat quia facilis fugit rem recusandae, quasi nulla, enim voluptate, eum iste et.</p>
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

    
    </body>
</html>
