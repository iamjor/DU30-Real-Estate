<!--
 - Author: Jomar Oliver Reyes
 - Author URL: https://www.jomaroliverreyes.com
-->

<!-- Thank You Page, displays data entered by customers after form inputs have been submitted to database -->

<!DOCTYPE html>
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
        <style type="text/css">
            /*** Start: Sign Up Form CSS **/
            #sign-up-form{
              margin:0 auto;
              background-color: #0e0c91;
              padding: 40px;
              max-width: 400px;
              border-radius: 25px;
            
            input{
                border-radius: 10px;
                padding: 5px;
                max-width: 300px;
            }
            /** End: Sign Up Form CSS ***/
        </style>
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
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">Home</a></li> 
                                <li class="nav-item active"><a class="nav-link" href="sign-up">Sign Up Now</a></li>                  
        </header>
        <!--================Header Menu Area =================-->      
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
            <div class="container">
                <div class="main_title">
                    <!-- Display logo of website --->
                    <img src="<?php echo base_url() ?>assets/img/main-logo1.png"> 
                    <br/>     
                    <br/> 
                    <h2>Thank You!</h2>
                    <p>You will be contacted by one of our representatives soon.</p>
                    <p>Below are the details that you have entered:</p>
                </div>
                <div class="row feature_inner" id="sign-up-form">
                              
                    <?php                       
                        
                        //display inputs entered by customers in sign-up page
                        echo 'First Name: '.$fname.'<br/>';
                        echo 'Last Name: '.$lname.'<br/>';
                        echo 'Where you\'d like to be contacted: '.$contact.'<br/>';
                        echo 'Email: '.$email.'<br/>';
                        echo 'Phone Number: '.$phone.'<br/>';
                        echo 'City: '.$city.'<br/>';
                        echo 'Comments: '.$comment.'<br/>';
                        
                    ?>
                    
                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================ start footer Area  =================-->    
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