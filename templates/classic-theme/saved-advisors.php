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
    <title>GTC - Favourite Advisors</title>                 
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
            <div id="unsaved_text" class="d-flex flex-column flex-md-row flex-lg-row justify-content-between">
                <p class="mt-10">Organize your go-to tax advisors and favourite services into saved advisor, you can <br>
                easily access and share with your team..</p>

                 <button class="text-white">&#43; Find Advisors</button>
            </div>


            <?php if(!$totalitem) {
                  echo '<img src="'. __(TEMPLATE_URL).'/assets/imgs/Frame 199.png" alt="" class="mt-100 mb-80" height="450px">';
              }?>
 
            
            <div class="col-lg-8 col-md-12 col-sm-12 col-10 float-left mt-100">
                <div class="content-page"> 
               
                  
                  <!-- <div class="row display-list"> -->
                     <?php foreach ($items as $item){ ?>
                  <div class="col-xl-12 col-12" style="width: max-content;">
                    <div class="d-flex flex-column flex-lg-row flex-md-row" id="cat_list">
                    <div class="image-box d-none d-md-block d-lg-block"><img src="<?php _esc($config['site_url'])?>storage/profile/<?php _esc($item['image'])?>" alt="<?php _esc($item['name'])?>" id="user"></div>
                    <div class="dropdown d-block d-md-none d-lg-none"> 
                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Vector (2).png" alt=""  class="love"></a>
                            <ul class="dropdown-menu dropdown-menu-right bg-white" id="drop_d" aria-labelledby="navbarDropdown"> 
                                <li><a class="dropdown-item text-dark" href="<?php url("SAVED-ADVISORS") ?> ? remove_fav=<?php _esc($item['id'])?>">Remove</a></li>
                                <li><hr class="dropdown-divider text-dark" /></li>
                                <li><a class="dropdown-item text-dark" href="#!">Share</a></li> 
                            </ul>
                        </li>
                    </ul>
                    <div class="image-box"><img src="<?php _esc($config['site_url'])?>storage/profile/<?php _esc($item['image'])?>" alt="<?php _esc($item['name'])?>" id="user"></div>
                        
                    </div>

                    <div class="d-flex flex-column flex-lg-column flex-md-column" id="cat_column">
                        <div class="d-flex flex-row justify-content-lg-between justify-content-md-between justify-content-center">
                            <p class="ml-lg-5 fs-5 mt-30 text-dark text-center text-lg-start"><?php _esc($item['name'])?> 
                            <?php if( $item['user_type'] == 'agency') { ?>
                          <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/employer.png" alt="agency">
                                <?php } else if( $item['user_type'] == 'freelancer') {?> 
                                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/User.png" alt="user">
                                  <?php } ?>
                            </p>
                            <div class="dropdown d-none d-md-block d-lg-block"> 
                            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Vector (2).png" alt=""  class="love"></a>
                                    <ul class="dropdown-menu dropdown-menu-end  bg-white" aria-labelledby="navbarDropdown"> 
                                        <a class="dropdown-item text-dark" href="<?php url("SAVED-ADVISORS") ?>?remove_fav=<?php _esc($item['id'])?> ">Remove</a>
                                        <li><hr class="dropdown-divider text-dark" /></li>
                                        <li><a class="dropdown-item text-dark" href="#!">Share</a></li> 
                                    </ul>
                                </li>
                            </ul>
                             
                            </div>
                            </div> 
                        <div class="container-fluid d-flex flex-column flex-lg-row flex-md-column justify-content-evenly justify-content-md-start" id="cat_header2">
                        <div class="d-flex flex-row   justify-content-evenly">  
                        <?php
                        $print_few = 0;
                        if($item['category'] != ""){
                          foreach($item['category'] as $item_category){
                          $num =  count($item['category']) - 3;
                         echo  '<a class="ml-0" href="#">';
                            _esc($item_category);
                         echo '</a>';

                          if (++$print_few > 1)
                            break;
                          }
                        }  
                        ?>
                      </div> 
                      <div class="d-flex flex-row  justify-content-evenly justify-content-md-start">
                      <?php
                        $print_few = 0;
                        if($item['category'] != ""){
                          
                          $num =  count($item['category']) - 3;
                          if(!empty($item['category'][2])){
                            echo  '<a class="ml-2" href="#">'.$item['category'][2].'</a>';
                            echo  '<a class="ml-2" href="#" id="cat_header2_a">+'.$num.'</a>';
                          }else{
                            echo  '<a class="ml-2" href="#" id="cat_header2_a">+0</a>';
                          }
                         

                          if (++$print_few > 1)
                            break;
                        }  
                        ?>
                    </div>
                    </div>
                    <p class="ml-5 text-dark text-lg-start text-md-start text-center">Response Rate: <span> replies in
                     <?php
                        if($item['rating'] != ""){
                            echo _esc($item['rating']).' hour(s)'; 
                        }else{
                          echo ' 24 hour';
                        }?> </span></p>
                        <p class="ml-5 text-dark text-lg-start text-md-start text-center">Location: <span ><?php _esc($item['city'])?> <?php _esc($item['country'])?></span></p>
                        <div class="d-flex flex-row justify-content-lg-start justify-content-md-start justify-content-center ml-20 mt-20 mb-20">
                        <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/verified.png" alt="acca-logo" id="b">
                        <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/acca-logo 1.png" alt="acca-logo" class="ml-40" id="b">
                        </div>
                    </div>
                    </div>
                    </div>   
              
                    <?php } ?>
          </div>
        </div>
        
      </div>
      <?php if($totalitem != "0"){ ?>
      <div class="paginations text-center">
        <ul class="pager">
        <?php
          foreach($pages as $page) {
              if ($page['current'] == 0){
                  ?>
                  <li><a href="<?php _esc($page['link'])?>" class="pager-number"><?php _esc($page['title'])?></a></li>
              <?php }else{
                  ?>
                  <li><a href="#" class="current-page pager-number"><?php _esc($page['title'])?></a></li>
              <?php }
          }
          ?>
          <!-- <li><a class="pager-prev" href="#"></a></li>
          <li><a class="pager-number" href="#">1</a></li>
          <li><a class="pager-number" href="#">2</a></li>
          <li><a class="pager-number" href="#">3</a></li>
          <li><a class="pager-number" href="#">4</a></li>
          <li><a class="pager-number" href="#">5</a></li> 
          <li><a class="pager-next" href="#"></a></li> -->
        </ul>
      </div>

      <?php } ?>
</div>

  <hr id="hr_nse"> 
       
<div class="slide-container swiper d-none d-lg-block">

<div class="slide-content">
  <div class="d-flex flex-row justify-content-between mb-50">
    <h5>Based on your activity</h5>
    <div class="swiper-button-next swiper-navBtn" id="swiper_navbtn"></div>
    <!-- <div class="swiper-button-prev swiper-navBtn"></div> -->
    </div>
    <div class="card-wrapper swiper-wrapper">
      <!-- This is the down swipe page for just mobile --> 
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
<!-- #################################################################################### -->

  <div class="slide-container swiper d-flex d-lg-none">
      
    <div class="slide-content">
      <div class="d-flex d-lg-none flex-row justify-content-between mb-50">
        <h5>Based on your activity</h5>
        <div class="swiper-button-next swiper-navBtn" id="swiper_navbtn"></div>
        <!-- <div class="swiper-button-prev swiper-navBtn"></div> -->
        </div>
        <div class="card-wrapper swiper-wrapper">
          <!-- <div class="container d-flex d-lg-none flex-row justify-content-between"> -->
          <!-- This is the down swipe page for just mobile -->  
            <div class="swiper-slide" id="card_deck">
              <img class="card-img-top" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Rectangle 753 (2).png" alt="">
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
            </div>
    </div>

    
    <div class="swiper-pagination"></div>
</div> 
      </section> 
    </main>
    <?php

    include('footer_2.php');
    ?>
        <!-- JAVASCRIPT LIBRARIES AND SCRIPT LINKING -->
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





  <!-- This is the down swipe page for just mobile -->
</div>