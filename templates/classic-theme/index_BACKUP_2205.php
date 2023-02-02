<!DOCTYPE html>
<html lang="<?php _esc($config['lang_code']);?>" dir="<?php _esc($lang_direction);?>">
<head>
    <title><?php _esc($config['site_title']);?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="<?php _esc($config['site_title']);?>">
    <meta name="keywords" content="<?php _esc($config['meta_keywords']);?>">
    <meta name="description" content="<?php ($meta_desc == '')?_esc($config['meta_description']):_esc($meta_desc);?>">

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//google.com">
    <link rel="dns-prefetch" href="//apis.google.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com">
    <link rel="dns-prefetch" href="//gstatic.com">
    <link rel="dns-prefetch" href="//oss.maxcdn.com">

    <meta property="fb:app_id" content="<?php _esc($config['facebook_app_id']);?>"/>
    <meta property="og:site_name" content="<?php _esc($config['site_title']);?>"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:url" content="<?php _esc($page_link);?>"/>
    <meta property="og:title" content="<?php _esc($page_title); ?>" />
    <meta property="og:description" content="<?php _esc($meta_desc);?>"/>
    <meta property="og:type" content="<?php _esc($meta_content);?>"/>
    <?php if($meta_content == 'article'){ ?>
        <meta property="article:author" content="#"/>
        <meta property="article:publisher" content="#"/>
        <meta property="og:image" content="<?php _esc($meta_image);?>"/>
        <?php
    }
    if($meta_content == 'website'){
        echo '<meta property="og:image" content="'.$meta_image.'"/>';
    }
    ?>

    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="<?php _esc($page_title);?>">
    <meta property="twitter:description" content="<?php _esc($meta_desc);?>">
    <meta property="twitter:domain" content="<?php _esc($config['site_url']);?>">
    <meta name="twitter:image:src" content="<?php _esc($meta_image);?>"/>
    <link rel="shortcut icon" href="<?php _esc($config['site_url']);?>storage/logo/<?php _esc($config['site_favicon']);?>">

    <script async>
        var themecolor = '<?php _esc($config['theme_color']);?>';
        var mapcolor = '<?php _esc($config['map_color']);?>';
        var siteurl = '<?php _esc($config['site_url']);?>';
        var template_name = '<?php _esc($config['tpl_name']);?>';
    </script>

<link href="<?php _esc(TEMPLATE_URL);?>/assets/css/globaltax.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="<?php _esc(TEMPLATE_URL);?>/css/style.css"> -->
        <!-- CDN Assets -->
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>
        <!-- End CDN -->

        <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/vendors/line-awesome.min.css">
        <link rel="stylesheet" href="<?php _esc(TEMPLATE_URL);?>/assets/vendors/bootstrap.min.css">
        <link href="<?php _esc(TEMPLATE_URL);?>/assets/vendors/slick-master/slick/slick.css" rel="stylesheet" type="text/css">
        <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/vendors/style.css" rel="stylesheet" type="text/css">

        <script async>var ajaxurl = "<?php _esc($config['app_url']);?>user-ajax.php";</script>
    <script async type="text/javascript">
        $(document).ready(function() {
            $('.resend').click(function(e) { 						// Button which will activate our modal
                var the_id = $(this).attr('id');						//get the id
                // show the spinner
                $(this).html("<i class='fa fa-spinner fa-pulse'></i>");
                $.ajax({											//the main ajax request
                    type: "POST",
                    data: "action=email_verify&id="+$(this).attr("id"),
                    url: ajaxurl,
                    success: function(data)
                    {
                        $("span#resend_count"+the_id).html(data);
                        //fadein the vote count
                        $("span#resend_count"+the_id).fadeIn();
                        //remove the spinner
                        $("a.resend_buttons"+the_id).remove();

                    }
                });
                return false;
            });
        });
    </script>
      </head>
  <body data-role="page" class="<?php _esc($lang_direction);?>" id="page" data-ipapi="<?php _esc($config['live_location_api']);?>" data-showlocationicon="<?php _esc($config['location_track_icon']);?>">
    <!-- <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center">
            <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/template/loading.gif"></div>
        </div>
      </div>
    </div> -->
    <header class="header">
        <div class="container">
          <div class="main_header_dash_bg main-header">
            <div class="header-left">
              <div class="header-logo"><a class="navbar-header flex-grow-1 d-flex" href="<?php url("INDEX") ?>">
              <?php
                 $logo_dark = $config['site_url'].'storage/logo/'.$config['site_logo'];
                $logo_white = $config['site_url'].'storage/logo/'.$config['site_logo_footer'];
                ?>
              <img class="landing-logo" src="<?php _esc($logo_dark);?>" alt="<?php _esc($config['site_title']);?>"></a></div>
            </div>
            <div class="header-nav">
              <nav class="nav-main-menu">
                <ul class="main-menu">
  
                  <li class="catgo"><a href="category.php">Category</a>
                  </li>
                  <li class="catgo"><a>Post a Job</a>
                  </li>
                  <li class="catgo"><a href="login.php">Become an Advisor</a>
                  </li>
  
                </ul>
              </nav>
              <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
              <a class="mobile_signup_button" href="<?php url("SIGNUP") ?>">sign up</a>
            </div>
           
            <div class="lang_selctor_lap d-none d-lg-flex">
              <i class="fas fa-globe" style="font-size:17px!important;"></i>
              <select>
              <option value="1">English</option>
              <option value="2">العربيّة</option>
              <option value="3">Arabic</option>
              <option value="3">Deutsch</option>
              <option value="3">简体中文</option>
              </select>
              </div>
              
  
            <div class="header-right">
              <div class="block-signin">
<<<<<<< HEAD
                <a class="catgo text-link-bd-btom ml-10 hover-up" href="login.php">Log In</a>
                <a class="catgo btn btn-default btn-shadow ml-40 hover-up" href="<?php url("SIGNUP") ?>">Sign Up</a>
=======
                <a class="catgo text-link-bd-btom ml-10 hover-up" href="<?php url("LOGIN") ?>"><?php _e("Log In") ?></a>
                <a class="catgo btn btn-default btn-shadow ml-40 hover-up" href="<?php url("SIGNUP") ?>" style="font-size:16px;">Sign Up</a>
>>>>>>> main
              </div>
            </div>
          </div>
        </div>
      </header>

    
      <!-- Mobile Version -->
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
          <div class="mobile-header-content-area adv-font">
            <div class="perfect-scroll">
              <a href=""><span class="signup-btn">Sign Up</span></a>
              <div class="mobile-menu-wrap pt-40">
                <a href="login.php"><h6 class="adv-font mb-10 mt-35">Log In</h6></a>
                <!-- mobile menu start-->
                <nav>
                  <ul class="mobile-menu adv-font" style="list-style:none;">
                    <li class="adv-font has-children"><a href="#">Expertise</a>
                      <ul class="adv-font sub-menu">
                      <?php foreach($category as $cat){ ?>
                        <li><a href="<?php echo $cat['link']; ?>"> </a>
                        </li>
                        <?php } ?>
                      </ul>
                    </li>
                  </ul>
                </nav>
                
              </div>
              <div class="mobile-account">
                <ul class="mobile-menu font-heading">
                  <li><a href="<?php url("LOGIN") ?>">Become an Advisor</a></li>
                  <li class="border-bottom"><a href="#">General</a></li>
                  <li class="pt-20"><a href="<?php url("INDEX") ?>">Home</a></li>
  
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
      <div class="bdrd-top"></div>
      <div class="container-fluid d-none d-md-flex flex-row justify-content-evenly border-bottom border-2 p-3">
        <div class="text-center">
          <div class="list-tabs">
            <ul class="nav nav-tabs" role="tablist">
            <?php foreach($category as $cat){ ?>
            <li class="mt-3 mb-3"><a href="<?php echo $cat['link']; ?>"><?php echo $cat['name']; ?>
            </a>
            </li>
              <?php } ?>
              <a class="pr-30" href="category.php"> See All</a>
            </ul>
          </div>
        </div>
        </div>
        <div class="container-fluid d-flex d-md-none flex-row border-bottom border-2 justify-content-evenly">
            <a href="#" class="pill blue-pill rounded-pill">Tax Pricing</a>
            <div class="pill blue-pill rounded-pill">Corporations</div>
            <div class="pill blue-pill rounded-pill">Tax Audits</div>
            <div class="pill blue-pill rounded-pill">Sales Tax</div>
        </div>
          <main class="main">
      <section class="section-box">
        <div class="banner-hero hero-2" style="background-image: url(<?php _esc($config['site_url']);?>storage/banner/<?php _esc($config['home_banner']);?>);">
          <div class="banner-inner">
            <div class="block-banner">
              <h1 class="text-42 color-white"><?php _e("Hire the perfect tax") ?> <br class="d-none d-lg-block"><?php _e("advisors for your business") ?></h1>
              <div class="font-lg font-regular color-white mt-20"><?php _e("Get access to millions of tax advisors who are verified, reliable, and experienced on Global Tax Compliance - your one-stop-shop for seamless tax advice services.") ?></div>
              <div class="form-find mt-40">
                <form autocomplete="off" method="get" action="<?php url("LISTING") ?>" accept-charset="UTF-8">
                    <input class="form-input input-keysearch color-white" type="text" name="" placeholder="<?php _e("What service are you looking for today?") ?>">
                     <button class="btn btn-default font-sm search-button"><li class="fa-2xxx fa fa-search" style="color:#2C76DC!important;"></i></button>
                   </form>
              </div>
              <div class="list-tags-banner mt-20 d-none d-lg-flex flex-row justify-content-evenly" data-wow-delay=".3s"><strong>Trending Searches:</strong><a href="#">Tax Audits</a>, <a href="#">Financial Planning</a>, <a href="#">Corporations</a>, <a href="#">Individual Tax Preparation</a></div>
              <!-- Mobile show -->
               <div class="mt-30 d-block d-lg-none trending-searches-container text-white" data-wow-delay=".3s" style="font-size: 0.625rem;">
                  <div class="row align-items-center justify-content-center gx-1">
                      <div class="col-auto me-2">Trending Searches:</div>
                      <div class="col-auto border border-light rounded-pill p-1 ps-2 pe-2 me-1 mb-1">Tax Pricing</div>
                      <div class="col-auto border border-light rounded-pill p-1 ps-2 pe-2 me-1 mb-1">Personal Income Tax</div>
                      <div class="col-auto border border-light rounded-pill p-1 ps-2 pe-2 me-1 mb-1">Sales Tax</div>
                  </div>
              </div>
            </div>
          </div>
          </div>

          <div class="container mt-60">
          <div class="d-none d-lg-flex left-trust col-lg-2 col-md-3 col-sm-3 col-3">
         <h6 class="d-none d-lg-flexcolor-text-paragraph-2 text-18">Trusted by:</h6>
          </div>
        <div class="trusted-logos slider">
      <div class="slide"><img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/trust/African centre for tax compliance 1.png" style="width:146px !important; height:56px !important" alt=""></div>
      <div class="slide"><img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/trust/MN_INNOVA_LOGO 1.png" style="width:200px !important; height:56px !important" alt=""></div>
      <div class="slide"><img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/trust/aton1 2.png" style="width:120px !important; height:56px !important;" alt=""></div>
      <div class="slide"><img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/trust/Kiota_Property_Logo 1.png" style="width:120px !important; height:56px !important" alt=""></div>
      <div class="slide"><img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/trust/Table Tennis Academy 2.png" style="width:150px !important; height:56px !important" alt=""></div>
   </div>
       </div>
   </section>

            </div>
        </div>
      </section>

      <section class="section-box mt-50">
        <div class="services-wrapper py-5">
          <div class="container">
            <div class="text-start">
              <h3 class="areaofexperts section-title mb-20">Areas of expertise</h3>
            </div>
          <div class="row service-slider">
          <div class="col-6">
          <div class="service">
          <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/expertise/pexels-ekaterina-bolovtsova-6077123 1.png">
          <h3><span class="tax-serv color-white font-xs">Abide by the law</span> <span class="tax-text color-white mb-5">Tax Compliance</span></h3>
          </div>
          </div>
          <div class="col-6">
            <div class="service">
            <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/expertise/pexels-nataliya-vaitkevich-6863202 2.png">
            <h3><span class="tax-serv color-white font-xs">Want to learn about tax?</span> <span class="tax-text color-white mb-5">Tax Law Research</span></h3>
            </div>
            </div>
          <div class="col-6">
          <div class="service">
          <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/expertise/pexels-fauxels-3183197 1.png">
          <h3><span class="tax-serv color-white font-xs">Want to cut operations cost?</span> <span class="tax-text color-white mb-5">Tax Planning</span></h3>
          </div>
          </div>
          <div class="col-6">
          <div class="service">
          <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/expertise/pexels-monstera-5849579 1.png">
          <h3><span class="tax-serv color-white font-xs">Contractual or administrative trouble?</span> <span class="tax-text color-white mb-5">Tax Dispute</span></h3>
          </div>
          </div>
            <div class="col-6">
            <div class="service">
            <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/expertise/pexels-olya-kobruseva-8962469 2.png" style="width:304px; height:380px;">
            <h3><span class="tax-serv color-white font-xs">Tax Dispute</span><span class="tax-text color-white mb-5"> Personal Income Tax</span></h3>
            </div>
            </div>
        
          </div>
          </div>
          </div>
      </section>


      <section class="section-box verified-user-home-bg mt-50 mb-30 bg-border-3 pt-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="pl-30">
                <h5 class="verified-title color-brand-2 mb-15 mt-15 text-white mb-32">Verified, Screened Advisors</h5>
                
                <img class="verified-expert-badge" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Verified-Expert-Badge.png">
                <p class="d-md-none d-xl-block verified-subtext font-lg verified-sub-text-smll-screen color-text-paragraph-2 text-left text-white text-md-left mt-32"><?php _e("Our advisors have been vetted and screened using best practices to ensure that they are real, reliable, and accredited advisors. On Global Tax Compliance, you have access to a catalogue of vetted advisors, making it easy to choose the best advisor for you and your business . ") ?></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="back-line"></div>
              <img class="verified-user-home" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/unsplash_wmFFRa51OoA.png" alt="">
              <div class="pl-30 mt-30 mb-40">
                <br /><br />
              <p class="mt-234 font-lg verified-sub-text-desktop verified-sub-text-mobile color-text-paragraph-2 text-left text-white text-md-left"><?php _e("Our advisors have been vetted and screened using best practices to ensure that they are real, reliable, and accredited advisors. On Global Tax Compliance, you have access to a catalogue of vetted advisors, making it easy to choose the best advisor for you and your business . ") ?></p>
            </div>
            </div>
          </div>
        </div>
      </section>

      <div class="userback-button-container" id="userback_button_container">
        <div class="userback-button userback-button-e" style="min-width: 120px;">Feedback</div></div>

        <section class="section-box bg-white mt-50 mb-30 bg-border-3 pt-10 pb-6">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
              <a href="#headerPopup" id="headerVideoLink" target="_blank" class="video-bttn position-relative d-block popup-modal">
              <img class="tab-img bdrd-10" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/pexels-daniel-xavier-1121796 1.png" alt="">
            </a>
            </div>
          <div id="headerPopup" class="mfp-hide embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/TdwqdNLByMQ?" frameborder="0" allow="; encrypted-media" allowfullscreen></iframe>
      </div>
              <div class="col-lg-6">
                <div class="pl-20 pl-lg-30">
                  <span class="tmonial_title"><?php _e("Mustapha Ndajiwo, Co-Founder |") ?></span><span><img class="tmonial_logo" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/MN_INNOVA_LOGO.png"></span>
                  <p class="tmonial_sub_title font-lg color-text-paragraph-2"><?php _e(" “We started this company in order to provide a seamless avenue for people to get direct contact with resources and professionals that can solve their tax problems ” ") ?></p>
                </div>
              </div>
            </div>
          </div>
        </section>
       
        <section class="section-box taxguid-bg mt-50">
          <div class="container">
            <div class="text-start">
              <h2 class="section-title mb-10">Tax Guides <div class="color-primary d-none d-sm-block float-right"><a href="#" style="color:#2C76DC;font-family:Proxima Soft; font-style: normal; font-weight:400; font-size: 16px;">See More Guides <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/arrow.png" alt=""></a></div></h2>
            </div>
          <div>

          <div class="row">
          <div class="col-lg-4">
          <div class="blog grid-blog aos aos-init aos-animate" data-aos="fade-up">
          <div class="blog-image">
          <a href="#">
          <img class="img-fluid" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/tax-guides/pexels-pixabay-209151 1.png" alt="">
        </a>
          </div>
          <div class="blog-content">
          <h3 class="tax-guid-txt">
            <a href="#"><?php _e("Become a Tax advisor and work from home") ?></a></h3>
          <p class="mb-0 tax-guid-sub"><?php _e(" A complete guide to becoming a Tax Advisor ") ?></p>
          </div>
        </div>
        </div>

          <div class="col-lg-4">
          <div class="blog grid-blog aos aos-init aos-animate" data-aos="fade-up">
          <div class="blog-image">
          <a href="#">
            <img class="img-fluid" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/tax-guides/pexels-anna-shvets-3727456 1.png" alt="">
          </a>
          </div>
          <div class="blog-content">
          <h3 class="tax-guid-txt">
            <a href="#"><?php _e("Personal Income Tax made easy ")?></a></h3>
          <p class="mb-0 tax-guid-sub"><?php _e("A practical guide to understand what is personal income tax.") ?></p>
          </div>
          </div>
          
          </div>
          <div class="col-lg-4">
          
          <div class="blog grid-blog aos aos-init aos-animate" data-aos="fade-up">
          <div class="blog-image">
          <a href="#">
          <img class="img-fluid" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/tax-guides/pexels-karolina-grabowska-4386367 1.png" alt="Post Image">
        </a>
          </div>
          <div class="blog-content">
          <h3 class="tax-guid-txt">
          <a href="#">Pay Tax for your busineses</a></h3>
          <p class="mb-0 tax-guid-sub">A step-by-step guide to pay your tax</p>
          </div>
          </div>
          
          </div>
          </div>
          </div>
          <div class="color-primary d-sm-block d-xl-none "><a href="#" style="color:#2C76DC;font-family:Proxima Soft; font-style: normal; font-weight:400; font-size: 16px;">See More Guides <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/arrow.png" alt=""></a></div>
          </div>
          </section>
    </main>

   <!-- footer start -->
<footer class="footer mt-50">
      <div class="container">
        <div class="row">
          <div class="d-none d-lg-flex footer-col-1 col-md-8 col-sm-12">
            <a href="#">
            <?php
            $logo_dark = $config['site_url'].'storage/logo/'.$config['site_logo'];
            $logo_white = $config['site_url'].'storage/logo/'.$config['site_logo_footer'];
            ?>
            <img alt="" src="<?php _esc($logo_dark);?>" alt="<?php _esc($config['site_title']);?>"></a>
            <div class="mt-20 mb-20 font-xs color-text-paragraph-2 text-white"> </div>
          </div>
          <div class="footer-col-2 col-md-4 col-xs-6">
            <h6 class="mb-20 text-white">Company</h6>
            <ul class="menu-footer">
              <li><a href="<?php url("INDEX") ?>">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Terms and conditions</a></li>
            </ul>
          </div>
          <div class="footer-col-3 col-md-4 col-xs-6">
            <h6 class="mb-20 text-white">Services</h6>
            <ul class="menu-footer">
              <li><a href="category.php">Categories</a></li>
              <?php
                if($config['country_type'] == "multi") {
                echo '<li><a href="'.url("COUNTRIES",false).'">'.__("Countries").'</a></li>';
                }
            ?>
              <li><a href="become_advisor.php">Become an Advisor</a></li>
              <li><a href="category.php">Hire an Advisor</a></li>
              <li><a href="#">Post a job</a></li>
            </ul>
          </div>
          <div class="footer-col-4 footer-middle col-md-4 col-xs-6">
            <h6 class="mb-20 text-white">Products</h6>
            <ul class="menu-footer">
              <li><a href="#">Tax guides</a></li>
              <li><a href="#">Chrome Extensions</a></li>
              <li><a href="#">Tax portals</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom mt-50">
          <div class="row justify-content-center">
            <div class="d-flex d-lg-none"><img class="footer-logo" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/template/gtclogo.png" alt="gtclogo" style="width:120px;height:40.31px;top:5.96px;left:425px;"> </div>
            <div class="col-12 col-md-6 footer-last-col"> 
            <span class="copyright-text">
              &copy; 2022 Global Tax Compliance inc. all rights reserved.</span></div>
            <div class="col-12 col-md-6 footer-social-icons text-center">
                <div class="row gy-2">
              <div class="footer-social col-auto text-center">
                <a class="icon-socials lab la-twitter" href="#"></a> 
                 <a class="icon-socials lab la-facebook" href="#"></a> 
                <a class="icon-socials lab la-instagram" href="#"></a>  
                <a class="icon-socials lab la-linkedin" href="#"></a>
              </div>
                <div class="lang_selctor-footer col-auto">
                  <img class="lang-img" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/template/icons/Globe.png" alt="">
                  <select class="text-uppercase">
                  <option value="1">English</option>
                  <option value="2">العربيّة</option>
                  <option value="3">Arabic</option>
                  <option value="3">Deutsch</option>
                  <option value="3">简体中文</option>
                  </select> 
                </div>
            </div>    
            </div>
          </div>
        </div>
      </div>
    </footer> 
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/waypoints.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/wow.js"></script>

    <script src="<?php _esc(TEMPLATE_URL);?>/assets/vendors/slick-master/slick/slick.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/custom.js"></script>
 
    
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/magnific-popup.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/select2.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/isotope.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/scrollup.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/counterup.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/main.js?ver=<?php _esc($config['version']);?>"></script>
    <script>
      $(document).ready(function(){
    $('.trusted-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
    </script>
    <script>
  $( document ).ready(function() {
	$('#headerVideoLink').magnificPopup({
	type:'inline',
	midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});
});
   
</script>
  </body>
</html>