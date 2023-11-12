<?php
ob_start(); // Commence la mémoire tampon
?>

<!--navbar-->
<nav class="navbar navbar-expand-lg fixed-top p-3 mb-5 rounded text-dark">
                
                <div class="container ps-3 pe-3 bg-light shadow-lg">
                <!--Navbar gauche-->
                    <div class="collapse navbar-collapse order-lg-1 order-3 navigation-menu">
                        <ul class="navbar-nav ">
                            <li class="nav-item hover-underline-animation me-3">
                                <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item hover-underline-animation me-3">
                                <a class="nav-link" href="#">À Propos</a>
                            </li>
                            <li class="nav-item hover-underline-animation me-3">
                                <a class="nav-link" href="products.php">Produits</a>
                            </li>
                        </ul>
                    </div>
                    <!--gauche-->


                    <a class="navbar-brand order-1 logo" href="#">Biobon</a>
                    <button class="navbar-toggler order-2" type="button" data-bs-toggle="collapse" data-bs-target=".navigation-menu">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <!--Navbar droite-->
                    <div class="collapse navbar-collapse order-lg-3 order-4 navigation-menu justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item hover-underline-animation me-5">
                            <a class="nav-link telephone " aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg></a>
                        </li>
                        <li class="nav-item hover-underline-animation me-5">
                            <a class="nav-link connexion" href="connexion/login.php"><svg width="35" height="27" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="35" height="34" fill="url(#pattern0)"/>
                                <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_739_247" transform="matrix(0.00971429 0 0 0.01 0.0142857 0)"/>
                                </pattern>
                                <image id="image0_739_247" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFQElEQVR4nO2ca4xdUxTHf+20nUSnaEs9ShG+CH14l/QR0gcS8UrDR9IYQoUPTSSeIRWENqkQEUVoS1QbryBDVD8QoaGktBiqHjOIloRO0VSP7FhoZu5e59w7555z9t3rl+zkJnPnnv/a+5x91l5r7Q2GYRiGYRiGYRiGYRiGYRiGYRj/MQY4HTgPuFSa+zxV/mY0mf2Ay4GngF4gSWk9wErgMmBfG538mAQsB3ZmGARfc//7JDDRBqZxJgCrgT2DGIj+zf3WKuBwG5j6WADsyHEg+jf321fboKTTIU9FUlBzT8tIG5jaHAC820Cn/iYv8B75XO//vwOMtUEZ6EF9mLEDtwB3AXOAA2t05DhgLnA38FXG39xgntj/DAfWZei0T4DzgSF13M3uuxcAmzL8/lrREj2LM0xJVwBtg+ipYcCVGRyFe2IfjVkpbu1WYHKO1zsB+Fq5ntNyFpHSDnymdM5GeR/kzUEy/fmuuxkYQYRcp3TKT8BRTbz20cA25fpuHRQV7g781tMZu4GZBWhwU9NfHg3fxPaUXKLcncsK1PGEomMeEfGypxN+LzjONF4JWr5IJLhQxZ+eTlhagp4HPFr+APYhAuYq08SUEvScrOiZTQTc6jG+pyQ9bjX/vUfTzUTASiXyWha+CLNLjLU8b3uMv6NETYs8mt4iAjZ6jL+mRE3XejR9RAR84TF+foma5ns0dRMBGwJ6Qj4gAtYF9A5ZSwQ87TH+2RI1rfFoch5hy3ODx/jeCq5DFhIBc5SV8Ykl6DlF0eMSaFGU+vgCeveXoOdBj5a+mEqEnlOivRMK1HGkBBFraXGr92jQ8iGPF6hjuaIjqnzIcClg8GUMzyxAwywlY7hFKlWiYoFyd26TvHezOAbYrly/zEVqqVUnm5VO+VgqRPLm4JTCuU2x5dP3ZkZKXdZ3kkDKiynKVJmIliKmy0qzROmgRKoNrxrknD5MpqG+lGvdm6NdweI6642UjkpkeruwztreocBFwKcZfv/1QZarthRjJbKaZGhb5U4+x/OOce+Ic4H7UspG927v20bRgYwB1mfswP5TWq+0RnZduT0powu46YJklOTWk4LaMxLKMVJYVsBgPGKjkM404LUCn5Au4AwbmNpBvtUFDkStrdJH2MD848J2NrhZM8m59UnyzLnK0XpVrzTQcTvFG1shVZALZVA75fNtknpd3+DpDy/F6HUdV8cO2QT4UgoRZkgMLCvtstfkTong1nO9Y4kE16m/ZJzbn5fv17M69zFEBueFjMd1bBcno6WZmSGelACvAsc3+UCbrgw63EJzOi3KqRle3j8AFxeoyWUFf0zR9GvOEedKMF5C6ZrhbwKHlqBtXIanpbeVThBql+CdZvBDJUda24CHUzS+1yqJq7R8h/OeqsKiFK3u1ImgmZ7i0bj9fSHdQHtC9rzaU3LXqyq6Kh6q1Pr+m+sP8pCa6xWjuit+MOWolCxjcCc9dCjupKu7Ookw3PTdins+slWejjL2oudd95vIJp8gaJNYkK8Azp0eFwr7Az8r024V34EDmK3cVS46Gxq3K/YEcbbWY0pcaHSgaYIdHpseJYDpyveIu5OlQ2WFEhGudC3X1BbdjXS2YpfzxirLjUrENOTy/hHKtOXSvpXFt8J152OFTpdS21VZuj2ibyJ8bvHY9jkVxb3cdnlEu4Ln0JnnsW1XVdcjhykvvmamY4tikmJfGYm1VCYrgpuxE6poDlHsmxiay9sKZxd2KPadRkXvoE5Py6OMpypVlrWas90wDMMwDMMwDMMwDMMwDMMwDCrJ3xdXmI/qHsxyAAAAAElFTkSuQmCC"/>
                                </defs>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item hover-underline-animation ">
                            <a class="nav-link panier " href="panier/addpanier.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg></a>
                        </li>
                        <?php if (isset($_SESSION['user_info'])) { ?>
                        <li class="nav-item hover-underline-animation ms-5 mt-1">
                            <a class="nav-link panier " href="panier/addpanier.php" ><i class="fa-solid fa-power-off" style="color: #000000;"></i></a>
                        </li>
                        <?php } ?>
                    </ul>                   
                
                    <!--droite-->
                </div>
            </div>

</nav>

