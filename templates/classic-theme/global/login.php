<!DOCTYPE html>
<html lang="<?php _esc($config['lang_code']);?>" dir="<?php _esc($lang_direction);?>">
<head>
    <title><?php _esc($page_title); ?></title>
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

    <!--Loop for Theme Color codes-->
    <style>
        :root{
        <?php
        $themecolor = $config['theme_color'];
        $colors = array();
        list($r, $g, $b) = sscanf($themecolor, "#%02x%02x%02x");
        $i = 0.01;
        while($i <= 1){
            echo "--theme-color-".str_replace('.','_',$i).": rgba($r,$g,$b,$i);";
            $i += 0.01;
        }
        echo "--theme-color-1: rgba($r,$g,$b,1);";
        ?>
        }
    </style>
    <!--Loop for Theme Color codes-->
    <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/forms_header.css?ver=<?php _esc($config['version']);?>" rel="stylesheet"> 
    <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/forms.css?ver=<?php _esc($config['version']);?>" rel="stylesheet">
  </head>
  <body> 
    <!-- ############### THIS IS THE HEADER OF THE SIGNUP PAGE ##########################################-->
    <header class="header sticky-bar">
      <div class="container">
        <div class="main-header">
          <div class="burger-icon burger-icon-white float-left"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
         
          <div class="header-left">
          <?php
         $logo_dark = $config['site_url'].'storage/logo/'.$config['site_logo'];
         $logo_white = $config['site_url'].'storage/logo/'.$config['site_logo_footer'];
         ?>
            <div class="header-logo mr-30 d-none d-md-none d-lg-block">
            <a class="d-flex" href="<?php url("INDEX") ?>">
            <img src="<?php _esc($logo_dark);?>" alt="<?php _esc($config['site_title']);?>">
            </a></div>
            
            <div class="ml-140 d-md-none d-block d-lg-none">
            <a class="d-flex" href="<?php url("INDEX") ?>">
            <img  src="<?php _esc($logo_dark);?>" alt="<?php _esc($config['site_title']);?>">
            </a></div>
           
            <div class="header-logo d-none d-md-block d-lg-none" style="margin-left: 240px;">
            <a class="d-flex" href="<?php url("INDEX") ?>">
            <img src="<?php _esc($logo_dark);?>" alt="<?php _esc($config['site_title']);?>">
           </a></div>
          </div>

          <div class="header-nav">
            <nav class="nav-main-menu">
              <ul class="main-menu">
                <!-- Each li-tag has a class attr of (has-children for a drop down menu) -->

                <li class="ml-30" ><a style="font-family: 'Proxima Soft';" href="<?php url("CATEGORY") ?>">Expertise</a>

                   </li>
                <li class="#"><a href="#" style="font-family: 'Proxima Soft';">Post a Job</a>
                 </li>
                <li class="#"><a href="<?php url("LOGIN") ?>" style="font-family: 'Proxima Soft';">Become an Advisor</a>
                 </li> 
                </ul> 
            </nav>
             
              </div>
          <div class="header-right">
            <div class="block-signin">
              <a class="text-link-bd-btom hover-up" style="font-family: 'Proxima Soft';">
              <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/template/icons/Globe.png" alt="" width="15px;" style="margin-right: 5px;">English</a>
              <a class="text-link-bd-btom ml-10 hover-up" href="<?php url("LOGIN") ?>" style="font-family: 'Proxima Soft';">Log In</a>
              <a class="btn btn-default btn-shadow ml-40 hover-up d-block d-md-block d-lg-none" href="<?php url("SIGNUP") ?>" style="background-color: #2C76DC;">Sign Up</a>

            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- This is the sidebar of the mobile -->
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-search mobile-header-border mb-30">
              
              
                <a class="btn btn-default btn-shadow ml-40 hover-up d-block d-md-block d-lg-none" style="width: 100px;" href="<?php url("SIGNUP") ?>"> Sign Up</a>
          
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- Categories for mobile sidebar list -->
<?php

$result = ORM::for_table($config['db']['pre'].'catagory_main')
->order_by_asc('cat_order')
->limit(15)
->find_many();
foreach ($result as $info) {
if($config['lang_code'] != 'en' && $config['userlangsel'] == '1'){
$maincat = get_category_translation("main",$info['cat_id']);
$info['cat_name'] = $maincat['title'];
$info['slug'] = $maincat['slug'];
}
$category[$info['cat_id']]['slug'] = $info['slug'];
$category[$info['cat_id']]['name'] = $info['cat_name'];
$category[$info['cat_id']]['main_id'] = $info['cat_id'];
$category[$info['cat_id']]['link'] = $config['site_url'].'projects/'.$info['slug'];

if(trim($config['home_page']) == "home-freelance"){
$totalAdsMaincat = ORM::for_table($config['db']['pre'].'project')
    ->where(array(
        'category'=> $info['cat_id'],
        'status'=> 'open'
        ))
    ->count();
}
else{
$totalAdsMaincat = get_items_count(false,"active",false,null,$info['cat_id'],true);
}

$category[$info['cat_id']]['main_ads_count'] = $totalAdsMaincat;
$count = 1;

}

?>
              <!-- mobile menu start-->
              <nav>
                <ul class="mobile-menu font-heading">
                  <li class="has-children">
                  <a class="active" href="<?php url("LOGIN") ?>">Log In</a></li>
                  <li class="has-children"><a href="#">Expertise</a>
                    <ul class="sub-menu">
                    <?php foreach($category as $cat){ ?>
                        <li><a href="<?php echo $cat['link']; ?>"><?php echo $cat['name']; ?></a>
                        </li>
                    <?php } ?>
                    </ul>
                  </li>
                  <li class="has-children"><a href="become">Become An Advisor</a></li> 
                    <li><h6 class="mb-10">General</h6></li>
                </ul>
              </nav>
            </div>
            <div class="mobile-account">
                <ul class="mobile-menu font-heading">
                <li><a href="<?php url("INDEX") ?>">Home</a></li>
                <li><a href="#">English <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/template/icons/Globe.png" alt="" width="15px;" style="margin-right: 5px; margin-top: 5px;"></a></li> 
              </ul>
            </div> 
          </div>
        </div>
      </div>

    </div>
    <!-- ####### THIS IS THE MAIN LOGIN FORM ################# -->
    <main class="main">
      <section class="pt-100 login-register">
        <div class="container-fluid"> 
          <div class="row login-register-cover">
            <div class="col-lg-4 col-md-8 col-sm-12 col-11 mx-4 mx-md-auto mx-lg-auto bg-white mb-100 pb-20 pl-60 pt-35 pr-60" id="login-register">
              <div class="text-center">
              <?php if($config['facebook_app_id'] != "" && $config['google_app_id'] != ""){ ?>
               <h6 class="mb-20 text-brand-1" style="font-style:normal;"> Log In to Global Tax Compliance</h6>      
                <?php if ($config['facebook_app_id'] != "") { ?>
                <button class="btn text-white social-login hover-up mb-20 text-center" style="background-color: #4267B2;font-family: 'Proxima Soft Semibold';" onclick="fblogin()"><img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/template/icons/fb.png" alt="gtc" id="imgicon"><strong class="text-center">Continue with Facebook</strong>
                </button>
                <?php } ?>
                <?php if ($config['google_app_id'] != "") { ?>
                <button class="btn social-login hover-up mb-20 text-center" style="font-family: 'Proxima Soft Semibold';" onclick="gmlogin()"><img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/template/icons/icon-google.svg" alt="gtc" id="imgicon1"><strong>Continue with Google</strong></button>
                <?php } ?>

                <button class="btn social-login hover-up mb-20 text-center" style="font-family: 'Proxima Soft Semibold';"><img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/template/icons/apple.png" alt="gtc" id="imgicon2"><strong>Continue with Apple</strong></button>
                <style>
                  img#imgicon1,img#imgicon2{ 
                     margin-right: 50px;
                  }
                  img#imgicon{ 
                     margin-right: 30px;
                  }
                 </style>
                <div class="divider-text-center"><span><?php _e("Or") ?></span></div>
              </div>
              <?php } ?>

              <?php
                if($error != ''){
                    echo '<span class="status-not-available">'.$error.'</span>';
                }
                ?>

                <div id="login-status" class="notification error" style="display:none"></div>

              <form method="post" class="login-register text-start mt-20"> 
                <div class="form-group"> 
                  <input class="form-control" id="input-2" id="username" type="text" required="" name="username" placeholder="<?php _e("Enter Username or") ?> / <?php _e("Email Address") ?>">
                </div> 
                <div class="form-group"> 
                    <input class="form-control" id="input-2" id="password" type="password" required=""  name="password" placeholder="Password" oninput="toggleFunc()">
                    <i class="fa fi-rr-eye-crossed" id="ieye" style="display:block"></i>
                  </div> 
                  <style>
                    i#ieye{
                        position: absolute; 
                        right: 20px;
                        left: auto;
                    }
                  </style>
                 <script>
                  var ieye = document.getElementById("ieye");
                  
                  function toggleFunc() {
                      if (ieye.style.display == "block"){
                          ieye.style.display = "none";
                       }
                     } 
                     
                </script>
                <div class="login_footer form-group d-flex justify-content-between">
                  
                </div>
                <div class="form-group">
                  <button class="btn btn-brand-1 hover-up w-100" type="submit" name="submit" style="background-color:#2C76DC;font-family:'Proxima Soft';">Continue</button>
                </div>

                   <div class="d-flex justify-content-between" style="font-size: 12px;">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked style="width: 15px; height:15px;">
                        <label class="form-check-label" for="#">Remember me</label>
                    </div>
                     <a href="<?php url("LOGIN") ?>?fstart=1">
                     <i class="text-primary"><?php _e("Forgot Password?") ?></i></a>
                   </div>
                    
                <hr>
                <div class="text-muted text-center mb-20">Not a Member? <a href="<?php url("SIGNUP") ?>" class="text-primary">Join Now</a></div>
              </form>
            </div>
         </div>
        </div>
      </section>
    </main>
    <!-- The javascript pages for the login pages -->
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/waypoints.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/wow.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/magnific-popup.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/select2.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/isotope.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/scrollup.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/main.js?ver=<?php _esc($config['version']);?>"></script>
  </body>
</html>