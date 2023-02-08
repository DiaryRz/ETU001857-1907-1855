
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Takalo-Takola</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/elegant-icons.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plyr.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css">
</head>

<body>

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


    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <?php
                            for($i=0 ; $i<count($information) ; $i++){
                        ?>
                            <div class="col-lg-12">
                                <div class="blog__item set-bg" data-setbg="img/blog/blog-1.jpg">
                                    <div class="blog__item__text">
                                        <p> description : <?php echo $information[$i]['Description'] ?></p>
                                        <p>prix : <?php echo $information[$i]['Prix'] ?></p>
                                        <p>nom de l'objet : <?php echo $information[$i]['NomObjet'] ?></p>
                                        <?php  echo "assets/image/".$information[$i]['image'] ; ?>
                                        <p> image : <img src="  <?php echo base_url( "assets/image/".$information[$i]['image'] )?>" width="200" alt="Pas d'image"> </p>
                                        <p><span class="icon_calendar"></span> 01 March 2020</p>
                                        <h4><a href="<?php echo site_url("control/supprimer_objet") ?>?idObjet=<?php echo $information[$i]['IdObjet'] ?>"> supprimer</a></h4>
                                        <h4><a href="<?php echo site_url("control/page_modifier_objet") ?>?idObjet=<?php echo $information[$i]['IdObjet'] ?>"> modifier</a></h4>
                                        <h4> <a href="InfoPrio?IdProduit=<?php echo $information[$i]['IdObjet'] ?>"> Voir les proprietaires </a> </p></a></h4>
                                        <h4><a href="ControlProposition/Allproposition?idObjet=<?php echo $information[$i]['IdObjet'] ?>&&idUtilisateur=<?php $information[$i]['IdUtilisateur'] ?>">Voir les proposition</a></h4>
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
    </section>


    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                      <div class="col-lg-7">
                             <h2>Etu001907 Razafinjatovo Diary Mickaella</h2>
                             <h2>Etu001857 Randriamahazo Navaloniaina</h2>
                             <h2>Etu001852 Rampanjatonirina Solondraibe Fehizoro`</h2>
                  </div>
                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->

    <!-- Js Plugins -->

    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/player.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/mixitup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slicknav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>

</body>

</html>