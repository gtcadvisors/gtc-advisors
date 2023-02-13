<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin="">
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page"> 
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/template/favicon.svg"> 
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/css/stylez.css" rel="stylesheet">
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/css/forms.css" rel="stylesheet">
    <title>No Saved Advisors</title>                 
  </head> 
  <body>
<?php

include('header_2.php');
?>
          <!-- Mobile Version -->
          <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
            <div class="mobile-header-wrapper-inner">
              <div class="mobile-header-content-area adv-font">
                <div class="perfect-scroll">
                  <a href="signup.html"><span class="signup-btn">Sign Up</span></a>
                  <div class="mobile-menu-wrap pt-40">
                    <a href=""><h6 class="adv-font mb-10 mt-35">Log In</h6></a>
                    <!-- mobile menu start-->
                    <nav>
                      <ul class="mobile-menu adv-font" style="list-style:none;">
                        <li class="adv-font has-children">
                          <a href="#">Expertise</a>
                          <ul class="adv-font sub-menu">
                            <li><a href="#">Tax Audit</a></li>
                            <li><a href="#">Tax Compliance</a></li>
                            <li><a href="#">Corporate Income Tax</a></li>
                            <li><a href="#">Personal Income Tax</a></li>
                            <li><a href="#">Transfer Pricing</a></li>
                            <li><a href="#">Tax Dispute</a></li>
                            <li><a href="#">Value Added Tax</a></li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                    
                  </div>
                  <div class="mobile-account">
                    <ul class="mobile-menu font-heading">
                      <li><a href="#">Become an Advisor</a></li>
                      <li><a href="#">General</a></li>
                      <li><a href="#">Home</a></li>
      
                      <li>
                        <div class="lang_selctor-m">
                          <i class="fas fa-globe"></i>
                          <select>
                          <option value="1">English</option>
                          <option value="2">العربيّة</option>
                          <option value="3">Arabic</option>
                          <option value="3">Deutsch</option>
                          <option value="3">简体中文</option>
                          </select>
                          </div>
                      </li>
                    </ul>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
          <!-- Mobile End -->



    <!-- This is the start of the Main page and the  -->
    <main class="main bg-white mb-200">    
     
        
          
      <div class="container-fluid d-none d-lg-flex flex-row justify-content-evenly" id="cat_header">
        <a class="mt-3 mb-3" href="#">Tax Audits</a>
        <a class="mt-3 mb-3" href="#">International</a>
        <a class="mt-3 mb-3" href="#">Sales Tax</a>
        <a class="mt-3 mb-3" href="#">Financial Plannning</a>
        <a class="mt-3 mb-3" href="#">Corporations</a>
        <a class="mt-3 mb-3" href="#">IRS Represntation</a>
        <a class="mt-3 mb-3" href="#">Individual Tax Preparation</a>
        <i class="mt-3 mb-3">See All</i>
      </div>
        <div class="container-fluid d-flex  d-lg-none flex-row justify-content-evenly" id="cat_header">
          <a class="mt-3 mb-3" href="#">Tax Pricing</a>
          <a class="mt-3 mb-3" href="#">Personal Income Tax</a>
          <a class="mt-3 mb-3" href="#">Tax Audits</a>
          <a class="mt-3 mb-3" href="#">Sales Tax</a>
          <!-- <a class="mt-3 mb-3" href="#">Corporations</a>
          <a class="mt-3 mb-3" href="#">IRS Represntation</a>
          <a class="mt-3 mb-3" href="#">Individual Tax Preparation</a>-->
          <!-- <i class="mt-3 mb-3">See All</i>  -->
        </div>
          <!-- <hr> -->
          <div id="cat_header_under">
            <p class="mt-4 mb-4 ml-45"> <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/home-2.png" alt="" width="17px" class="mr-5">Home &#10095;  <a id="under_1"> Saved Advisor</a> <br>
            </p>
          </div>
             
      <section class="section-box mt-30">
  <div class="container-fluid col-11">
      <p class="fs-5 text-dark"><b>Saved Advisors</b></p>
      <div id="unsaved_text" class="d-flex flex-lg-row flex-md-row  flex-column justify-content-lg-between justify-content-start justify-content-md-between">
          <p class="mt-10">Organize your go-to tax advisors and favourite services into saved advisor, you can <br>
          easily access and share with your team..</p>

            <button class="text-white"><a href="/category">&#43; Find Advisors</a></button>
      </div>


      <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Frame 199.png" alt="" class="mt-100 mb-80" height="450px">   
  </div>

  <hr id="hr_nse"> 
  <div class="slide-container swiper">
    
    <div class="slide-content">
      <div class="d-flex flex-row justify-content-between mb-50">
        <h5>Based on your activity</h5>
        <div class="swiper-button-next swiper-navBtn" id="swiper_navbtn"></div> 
        </div>
        <div class="card-wrapper swiper-wrapper">
          <div class="swiper-slide" id="card_deck">
            <img class="card-img-top" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Rectangle 753.png" alt="">
            <div class="card-body">
              <h5 class="card-title">Ade Lateef <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/User.png" alt=""></h5>
              <i class="" style="font-size:12px; color: #60c1f1;">Tax Audits, Financial Planning, IRS,  Representation, Sales Tax</i>
              <p class="card-text mt-10 fs-6" style="color: black;"> I am the perfect guy for the job, contact me blah and blah</p>
              <i class="mt-20" style="color: grey;">Response rate: <span>Replies within 1 hour</span></i>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between">
              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Vector.png" alt="" width="20px" height="20px">
              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/verified.png" alt="" height="30px">
            </div>
          </div>

          <div class="swiper-slide" id="card_deck">
            <img class="card-img-top" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Rectangle 753 (1).png" alt="">
            <div class="card-body">
              <h5 class="card-title">Ade Lateef <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/User.png" alt=""></h5>
              <i class="" style="font-size:12px; color: #60c1f1;">Tax Audits, Financial Planning, IRS,  Representation, Sales Tax</i>
              <p class="card-text mt-10 fs-6" style="color: black;"> I am the perfect guy for the job, contact me blah and blah</p>
              <i class="mt-20" style="color: grey;">Response rate: <span>Replies within 1 hour</span></i>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between">
              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Vector.png" alt="" width="20px" height="20px">
              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/verified.png" alt="" height="30px">
            </div>
          </div>


          <div class="swiper-slide" id="card_deck">
            <img class="card-img-top" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Rectangle 753 (2).png" alt="">
            <div class="card-body">
              <h5 class="card-title">Ade Lateef <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/User.png" alt=""></h5>
              <i class="" style="font-size:12px; color: #60c1f1;">Tax Audits, Financial Planning, IRS,  Representation, Sales Tax</i>
              <p class="card-text mt-10 fs-6" style="color: black;"> I am the perfect guy for the job, contact me blah and blah</p>
              <i class="mt-20" style="color: grey;">Response rate: <span>Replies within 1 hour</span></i>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between">
              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Vector (1).png" alt="" width="20px" height="20px">
              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/verified.png" alt="" height="30px">
            </div>
          </div>


          <div class="swiper-slide" id="card_deck">
            <img class="card-img-top" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Rectangle 753 (1).png" alt="">
            <div class="card-body">
              <h5 class="card-title">Ade Lateef <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/User.png" alt=""></h5>
              <i class="" style="font-size:12px; color: #60c1f1;">Tax Audits, Financial Planning, IRS,  Representation, Sales Tax</i>
              <p class="card-text mt-10 fs-6" style="color: black;" > I am the perfect guy for the job, contact me blah and blah</p>
              <i class="mt-20" style="color: grey;">Response rate: <span>Replies within 1 hour</span></i>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between">
              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Vector (1).png" alt="" width="20px" height="20px">
              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/verified.png" alt="" height="30px">
            </div>
          </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div> 
</section> 
</main>
     
<?php

include('footer_2.php');
?><!-- JAVASCRIPT LIBRARIES AND SCRIPTS LINKING -->
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/waypoints.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/wow.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/magnific-popup.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/select2.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/isotope.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/scrollup.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/noUISlider.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/slider.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/main.js?v=4.1"></script>
  </body>
</html>