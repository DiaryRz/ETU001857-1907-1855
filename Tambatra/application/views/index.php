<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
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

	<!-- Contenue -->
			
			<?php
			
			if($this->session->has_userdata('page')){
				//echo site_url("applicaton/view/".$this->session->userdata('page').".php");
				$this->load->view(''.$this->session->userdata('page')); 
			}
			?>


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

    <!-- Js Plugins -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/player.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/mixitup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slicknav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
