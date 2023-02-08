<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$ListeObjet = $Liste;

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/elegant-icons.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plyr.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css">
</head>

<style>
	body{
		/* background-color: white; */
		color: black;
	}
</style>
<body>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="Afficher_profil">Profil</a></li>
                                <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Categories</a></li>
                                        <li><a href="./anime-details.html">Anime Details</a></li>
                                        <li><a href="./anime-watching.html">Anime Watching</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="./signup.html">Sign Up</a></li>
                                        <li><a href="./login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="ListeCategorieSelect">Ajouter objet</a></li>
                                <li><a href="page_Recherche">Recherche</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="Detruire"><span class="icon_profile"></span>Deconnexion</a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h1 style="color: White;">Takalo-Takalo</h1>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <?php
                             for($i = 0 ; $i < count($ListeObjet) ; $i++) {
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6" style="margin-left: 50px;">
                                <div class="product__item">
        
                                    <div class="product__item__pic set-bg" data-setbg="<?php  echo base_url("assets/image/".$ListeObjet[$i]['Image']) ; ?> ">
                                        <div class="ep"><?php echo $ListeObjet[$i]['NomObjet'] ?></div>
                                        <div class="view"><i></i> Prix : <?php echo $ListeObjet[$i]['Prix'] ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="RecupereIdObjet?IdObjet=<?php echo $ListeObjet[$i]['IdObjet'] ?>">Proposer</a></li>
                                            <li><a href="InfoPrio?IdProduit=<?php echo $ListeObjet[$i]['IdObjet'] ?>">Voir les proprietaires</a></li>
                                        </ul>
                                        <h5 style="color: White;">Description : <?php echo $ListeObjet[$i]['Description'] ?></h5>
                                    </div>

                                </div>
                            </div>
                            <?php
                             }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Footer Section Begin -->
<footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                  </div>
                  <div class="col-lg-7">
                             <h2>Etu001907 Razafinjatovo Diary Mickaella</h2>
                             <h2>Etu001857 Randriamahazo Navaloniaina</h2>
                             <h2>Etu001852 Rampanjatonirina Solondraibe Fehizoro`</h2>
                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form action="recherche" class="search-model-form">
                <span><input type="text" id="search-input" placeholder="Search here....."> </span>
                <select name="categorie"> 
                    <option value="" > selectionner</option>
                    <?php  for($i=0 ; $i<count($les_categories) ; $i++) { ?>
                            <option value="<?php echo $les_categories[$i]['IdCategorie'];  ?>" ><?php echo $les_categories[$i]['NomCategorie']  ?></option>
                    <?php } ?>
                </select>
     
                <span> <input type="submit" value="recherche"> </span>
                </form>
        </div>
    </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/player.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/mixitup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slicknav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
