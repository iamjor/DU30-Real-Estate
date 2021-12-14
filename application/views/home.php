<?php
/** Home/Welcome Page of the web app */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.png" type="image/png">
        <title>Du30 Real Estate</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jquery-ui/jquery-ui.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/main-logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="<?php echo base_url() ?>">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="pages/view/sign-up">Sign Up Now</a></li>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content">
						<h5>A place you will love to live</h5>
						<h3>Let’s find a home that’s perfect for you</h3>
						<a class="main_btn" href="pages/view/sign-up">Sign Up Now</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================ Start footer Area  =================-->	
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-12 footer-text text-center">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Jomar Oliver Reyes </p>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/stellar.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/isotope/isotope-min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/jquery-ui/jquery-ui.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/mail-script.js"></script>
        <script src="<?php echo base_url() ?>assets/js/theme.js"></script>
    </body>
</html>