<!--
 - Author: Jomar Oliver Reyes
 - Author URL: https://www.jomaroliverreyes.com
-->

<!-- Sign-Up Page, displays the form to be filled up by customers -->

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
        <script type="text/javascript">
            function showEmail(){
                document.getElementById('email-form').style.display='block';
            }
            function showPhoneNum(){
                document.getElementById('number-form').style.display='block';
            }
             function hideEmail(){
                document.getElementById('email-form').style.display='none';
            }
            function hidePhoneNum(){
                document.getElementById('number-form').style.display='none';
            }

        </script>
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
						</ul>
                    </header>
        <!--================Header Menu Area =================-->
              
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Sign Up Now!</h2>
        			<p>Live With Us Today!</p>
        		</div>
        		<div class="row feature_inner" id="sign-up-form">
        			<?php

                        //start of form, displays title of form
                        echo form_fieldset("Fill up the following:");

                        echo '<hr>';

                        //calls method that will validate errors
                        echo validation_errors();

                        //call submit method of signup controller when form is submitted
                        echo form_open('signup/submit');

                            //display input fields
                            echo form_input('first-name','','id="fn-input" placeholder="First Name"').'<br/>'.'<br/>';

                            echo form_input('last-name','','id="ln-input" placeholder="Last Name"').'<br/>'.'<br/>';

                            /** ==== Start: Choose where to contact (Email or Phone Number) ==== ***/
                            echo form_label('Choose where you like to be contacted', 'fd-1').'<br/>';                           
                            echo form_radio('contact', 'Email', NULL, 'id="cem" onclick="showEmail()" onchange="hidePhoneNum()"'.set_radio('contact', 'Email')).form_label('Email', 'con-em').'<br/>';
                            echo form_radio('contact', 'Phone Number', NULL, 'id="cpn" onclick="showPhoneNum()" onchange="hideEmail()"'.set_radio('contact', 'Phone Number')).form_label('Phone Number', 'con-pn').'<br/>';
                            /** === End: Choose where to contact (Email or Phone Number) ==== ***/

                            //=== for email input --> will only show if email is chosen on contact dropdown
                            echo '<div style="display: none;" id="email-form">';
                            echo form_input('email','','id="em-input" placeholder="Email"').'<br/>'.'<br/>';
                            $this->form_validation->set_rules('Email', 'Email', 'required|trim|xss_clean|valid_email');
                            echo '</div>';

                            //for phone number input --> will only show if phone number is chosen on contact dropdown
                            echo '<div style="display: none;" id="number-form">';
                            echo form_input('phone-number','','id="pNum" placeholder="Phone Number"').'<br/>'.'<br/>';
                            $this->form_validation->set_rules('Phone Number', 'Phone Number', 'required|min_length[11]');
                            echo '</div>';

                            //Start: City Dropwdown
                            $options = array(

                                'Manila' => 'Manila',
                                'Parañaque' => 'Cebu',
                                'Makati' => 'Davao'
                            );

                            echo form_label('Choose a City', 'city').'<br/>';
                            echo form_dropdown('cities', $options, 'city').'<br/>'.'<br/>'.'<br/>';
                            //End: City Dropwdown

                            //for comments input
                            echo form_textarea('comment','','id="comInput" placeholder="Write a comment here about the property"').'<br/>'.'<br/>';
                           

                            echo form_submit('submit', 'Submit');

                        echo form_close();
                        echo form_fieldset_close();

                    ?>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================ start footer Area  =================-->	
                </div>
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