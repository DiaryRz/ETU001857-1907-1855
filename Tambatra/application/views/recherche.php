<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
                                <li><a href="#">Contacts</a></li>
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

<div class="blog__details__form">
    <h4>Leave A Commnet</h4>
    <form action="recherche">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <input type="text" placeholder="Mot Cles">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
            <select name="categorie"> 
            <option value="" > selectionner</option>
            <?php  for($i=0 ; $i<count($les_categories) ; $i++) { ?>
                    <option value="<?php echo $les_categories[$i]['IdCategorie'];  ?>" ><?php echo $les_categories[$i]['NomCategorie']  ?></option>
           <?php } ?>
        </select>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="site-btn">Send Message</button>
            </div>
        </div>
    </form>
</div>

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

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