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
    <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/globaltax.css" rel="stylesheet">
    <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/mobile.css">
    <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/litepicker.css" rel="stylesheet" />
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/feather.min.js"></script>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/vendors/line-awesome.min.css">
    <link href="<?php _esc(TEMPLATE_URL);?>/assets/vendors/slick-master/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/vendors/style.css" rel="stylesheet" type="text/css">
    <script src="<?php _esc(TEMPLATE_URL);?>/js/jquery-3.4.1.min.js"></script>
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

    <!-- ===External Code=== -->
    <?php _esc($config['external_code']);?>
    <!-- ===/External Code=== -->
  </head>
  <body class="<?php _esc($lang_direction);?>" id="page" data-ipapi="<?php _esc($config['live_location_api']);?>" data-showlocationicon="<?php _esc($config['location_track_icon']);?>" style="overflow-x: hidden !important">

   <header class="header">
      <div class="container">
        <div class="loged-header main-header">
          <div class="header-left">
            <div class="header-logo2">
              <a class="navbar-header-2 d-flex" href="<?php url("INDEX") ?>">
              <?php
                            $logo_dark = $config['site_url'].'storage/logo/'.$config['site_logo'];
                            $logo_white = $config['site_url'].'storage/logo/'.$config['site_logo_footer'];
                            ?>
                <img class="logo-left" src="<?php _esc($logo_dark);?>" data-sticky-logo="<?php _esc($logo_dark);?>" data-transparent-logo="<?php _esc($logo_white);?>" alt="<?php _esc($config['site_title']);?>"></a>
            </div>
          </div>
          <div class="header-nav">
            <div class="loged-form-find d-none d-lg-block">
            <form autocomplete="off" method="get" action="<?php url("LISTING") ?>" accept-charset="UTF-8">
                 <input class="loged-form-input input-keysearch color-white mr-1" type="text" name="" placeholder="<?php _e("What service are you looking for today?") ?>">
                  <button class="btn btn-default font-sm loged-search-button"><li class="fa-22x fas fa-search fa-lg"></i></button>
                </form>
              </div>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>
          <?php
            if($is_login){
             ?>

          <div class="header-right">
            <nav class="topnav navbar navbar-expand justify-content-between justify-content-sm-start navbar-light">
            
           <!-- Navbar Items-->
           <ul class="navbar-nav align-items-center ms-auto">
            <!-- favorite Dropdown-->
            <li class="nav-item no-caret d-none d-sm-block mr--1 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="saved_experts.php"><i class="fa-regular fa fa-heart fa-2x"></i></a>
            </li>

             <!-- Messages Dropdown-->
             <li class="nav-item dropdown no-caret d-none d-sm-block mr--1 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-regular fa fa-envelope fa-2x"></i></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="me-2 fa-regular fa fa-envelope fa-1xx"></i>
                        <?php _e("Inbox") ?> (<?php
                                        if($unread_message != 0){
                                            echo '<span>'.$unread_message.'</span>';
                                        } ?>)
                    </h6>
                    <div class="dropdown-divider"></div>
                    <?php foreach($chat as $msg){ ?>
                    <a class="dropdown-item dropdown-notifications-item" href="<?php url("MESSAGE") ?>">
                        <img class="dropdown-notifications-item-img status-<?php _esc($msg['status']) ?>" src="<?php _esc($config['site_url']);?>storage/profile/<?php _esc($msg['image']) ?>" />
                        <div class="dropdown-notifications-item-content">
                          <div class="dropdown-notifications-item-content-details"><?php _esc($msg['from_name']) ?></div>
                          <div class="dropdown-notifications-item-content-text text-truncate" style="width:15rem;"><?php _esc($msg['message']) ?></div>
                          <div class="dropdown-notifications-item-date"><?php _esc($msg['time']) ?></div>
                        </div>
                    </a>
                    <?php } ?>
                    <a class="dropdown-item dropdown-notifications-footer" href="<?php url("MESSAGE") ?>"><?php _e("See all in Inbox") ?></a>
                </div>
            </li>

            <!-- Alerts Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block mr--1 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-regular fa fa-bell bx-tada fa-2x"></i></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="fa-regular fa fa-bell fa-1xx me-2"></i>
                        Notifications (<?php
                                        if($unread_note_count != 0){
                                            echo '<span>'.$unread_note_count.'</span>';
                                        } ?>)
                    </h6>
                    <div class="dropdown-divider"></div>
                    <!-- Example Alert 1-->
                    <?php
                    foreach($notification as $note){
                    $id = $note['product_id'];
                    $sender = $note['sender_name'];
                    $title = $note['product_title'];
                    $msg = $note['message'];
                    ?>
                    <?php if($note['type'] == "milestone_created"){ ?>
                    <a class="dropdown-item dropdown-notifications-item" href="<?php url("MILESTONE") ?>/<?php _esc($id) ?>">
                        <div class="dropdown-notifications-item-icon bg-warning">
                          <i class="fa-regular fa fa-bell fa-2xx"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">Update</div>
                            <div class="dropdown-notifications-item-content-text  text-truncate" style="width:15rem;"><?php _esc($sender) ?> <?php _e("created a milestone") ?> <?php _esc($msg) ?> <?php _e("for") ?> <span class="color"><?php _esc($title) ?></span></div>
                           <div class="dropdown-notifications-item-date">4 Months</div> 
                        </div>
                    </a>
                    <?php }elseif($note['type'] == "milestone_request_release"){ ?>

                    <a class="dropdown-item dropdown-notifications-item" href="<?php url("MILESTONE") ?>/<?php _esc($id) ?>">
                        <div class="dropdown-notifications-item-icon bg-warning">
                          <i class="fa-regular fa fa-bell fa-2xx"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">Update</div>
                            <div class="dropdown-notifications-item-content-text  text-truncate" style="width:15rem;"><?php _esc($sender) ?> <?php _e("Request for release") ?> <?php _e("Milestone") ?> <?php _esc($msg) ?> <?php _e("for") ?> <span class="color"><?php _esc($title) ?></span></div>
                           <div class="dropdown-notifications-item-date">4 Months</div> 
                        </div>
                    </a>
                    <?php }elseif($note['type'] == "milestone_released"){ ?>
                    <a class="dropdown-item dropdown-notifications-item" href="<?php url("MILESTONE") ?>/<?php _esc($id) ?>">
                        <div class="dropdown-notifications-item-icon bg-warning">
                          <i class="fa-regular fa fa-bell fa-2xx"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">Update</div>
                            <div class="dropdown-notifications-item-content-text  text-truncate" style="width:15rem;"><?php _esc($sender) ?> <?php _e("Milestone") ?> <?php _e("Released") ?> <?php _esc($msg) ?> <?php _e("for") ?> <span class="color"><?php _esc($title) ?></span></div>
                           <div class="dropdown-notifications-item-date">4 Months</div> 
                        </div>
                    </a>
                    <?php }else{ ?>

                </a>
                <?php } ?>
                <?php } ?>

                    <a class="dropdown-item dropdown-notifications-footer" href="<?php url("NOTIFICATIONS") ?>"><?php _e("See all Notifications") ?></a>
                </div>
            </li>
           
            <!-- User Dropdown-->
            <li class="nav-item dropdown mr--1 no-caret dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="icon-container">
                  <img class="rounded-circle" src="<?php _esc($config['site_url']);?>storage/profile/<?php _esc($userpic)?>" alt="<?php _esc($username);?>" style="width: 45px; height: 45px" /><div class="status-circle"></div></div></a>
                <div class="dropdown-menu dropdown-menu-end border-0" aria-labelledby="navbarDropdownUserImage">
                    <a class="dropdown-item" href="<?php url("PROFILE") ?>/<?php _esc($username)?>">
                      <div class="dropdown-item-icon"><i class=""></i></div>
                      Profile
                  </a>
                  <a class="dropdown-item" href="<?php url("BECOME-AN-ADVISOR") ?>">
                    <div class="dropdown-item-icon"><i class=""></i></div>
                    Become an Advisor
                </a>
                <a class="dropdown-item" href="<?php url("CATEGORY") ?>">
                  <div class="dropdown-item-icon"><i class=""></i></div>
                  Hire an Advisor
                </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php url("EDITPROFILE") ?>">
                      <div class="dropdown-item-icon"><i class=""></i></div>
                      <?php _e("Account Settings") ?>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="dropdown-item-icon"><i class=""></i></div>
                      Help & Support
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        English <div class="ml-5 dropdown-item-icon"></div>
                    </a>
                    <a class="dropdown-item" href="<?php url("LOGOUT") ?>">
                        <div class="dropdown-item-icon"><i class="fa-regular fa fa-log-out"></i></div>
                        <?php _e("Logout") ?>
                    </a>
                </div>
            </li>
        </ul>
    </nav>
 </div>
        </div>
      </div>
      <!-- Mobile Search -->
      <div class="mobile-form-find mb-30 d-xxl-none d-lg-block wow animate__animated animate__fadeIn" data-wow-delay=".2s">
      <form autocomplete="off" method="get" action="<?php url("LISTING") ?>" accept-charset="UTF-8">
         <input class="mobile-form-input input-keysearch color-white mr-1" type="text" name="" placeholder="Find services">
          <button class="btn btn-default font-sm mobile-search-button"><li class="fa-22x fas fa-search fa-lg"></i></button>
        </form>
      </div>
      <!-- end Mobile search -->
    </header>
          <!-- Mobile Version -->
          <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
            <div class="mobile-header-wrapper-inner">

              <div class="icon-container">
                <img class="rounded-circle mobi-profile-img" src="<?php _esc($config['site_url']);?>storage/profile/<?php _esc($userpic)?>" alt="<?php _esc($username);?>" style="max-width:68px;" /><div class="status-circle-1"></div></div></a>
                <div class="name-title pb-20"><?php _esc($fullname);?><span style="color:black;font-size:16px;font-style:italic;"><br><?php
                 $usertype = $usertype == 'user' ? 'Advisor': 'Employer';
                _esc($usertype);
                ?></span></div>

              <div class="mobile-header-content-area adv-font">
                <div class="perfect-scroll mt--10">
                  <div class="mobile-account">
                    <ul class="mobile-menu font-heading">
                      <li><a href="<?php url("INDEX") ?>">Home</a></li>
                      <li><a href="<?php url("MESSAGE") ?>">Inbox</a></li>
                      <li><a href="saved_experts.php">Saved Experts</a></li>
                      <li><a href="<?php url("NOTIFICATIONS") ?>">Notifications</a></li>
                    </ul>
                  </div>
                  <div class="mobile-menu-wrap pt-10">

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
         <nav>
        <ul class="mobile-menu adv-font" style="list-style:none;">
                        <li class="adv-font has-children">
                          <a href="#">Expertise</a>
                          <ul class="adv-font sub-menu">
                          <?php foreach($category as $cat){ ?>
                        <li><a href="<?php echo $cat['link']; ?>"> <?php echo $cat['name']; ?></a>
                        </li>
                        <?php } ?>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                  </div>
                  <div class="mobile-account border-bottom pb-20 pt-20">
                  <ul>
                    <li><a href="<?php url("PROFILE") ?>/<?php _esc($username)?>">My Profile</a></li>
                  </ul>
                  </div>

                  <div class="mobile-account border-bottom pb-20">
                    <ul>
                      <li class="pb-20"><a href="<?php url("BECOME-AN-ADVISOR") ?>">Become an Advisor</a></li>
                      <li class="pb-20"><a href="<?php url("CATEGORY") ?>">Hire an Advisor</a></li>
                      <li class="pb-20"><a href="#">General</a></li>
                    </ul>
                    </div>


                  <div class="mobile-account">
                    <ul class="mobile-menu font-heading">
                      <li><a href="<?php url("EDITPROFILE") ?>">Settings</a></li>
                      <li><a href="#">Help & Support</a></li>
      
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
                      <li><a href="<?php url("LOGOUT") ?>">Log Out</a></li>
                    </ul>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
          <!-- Mobile End -->
          <?php } ?>
