<style>
  .mobi-profile-img {
    margin-top: 62px !important;
    margin-left: 52px;
}
.status-circle-1 {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background-color: #ffffff;
    border: 3px solid #2C76DC;
    bottom: -87px;
    right: -64px;
    position: absolute;
}
.name-title {
    position: relative;
    height: 24px;
    left: 2px;
    top: 54px;
    font-family: 'Proxima Soft';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 24px;
    color: #2C76DC;
}
.name-title {
    margin-top: -16px !important;
    margin-left: 130px;
}
.pb-20 {
    padding-bottom: 20px !important;
}
</style>
      <!-- HEADER FOR THE PAGE -->
      <header class="header header-2">
      <div class="container">
        <div class="loged-header main-header">
          <div class="header-left">
            <div class="header-logo2">
              <a class="d-flex" href="<?php url("INDEX") ?>">
                <img alt="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/gtclogo.png"></a>
            </div>
          </div>
          <div class="header-nav">
            <div class="loged-form-find d-none d-lg-block">
            <form autocomplete="off" method="get" action="<?php url("LISTING") ?>" accept-charset="UTF-8">
                 <input class="loged-form-input input-keysearch mr-1" type="text" name="" placeholder="<?php _e("What service are you looking for today?") ?>">
                  <button class="btn btn-default font-sm loged-search-button"><li class="fa-22x fas fa-search fa-lg"></i></button>
                </form>
              </div>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>
          <?php 
          if ($is_login) { ?>
          <div class="header-right">
            <nav class="topnav navbar navbar-expand justify-content-between justify-content-sm-start navbar-light">
            <!-- Navbar Items-->
           <ul class="navbar-nav align-items-center ms-auto">
            <!-- favorite Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block dropdown-notifications">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="saved_experts.php"><i class="fa-regular fa fa-heart fa-2x"></i></a>
                
            </li>

             <!-- Messages Dropdown-->
             <li class="nav-item dropdown no-caret d-none d-sm-block dropdown-notifications p-4">
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
             <li class="nav-item dropdown no-caret d-none d-sm-block dropdown-notifications">
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
                  <img class="rounded-circle" src="<?php _esc($config['site_url']);?>storage/profile/<?php _esc($userpic)?>" alt="<?php _esc($username);?>" style="max-width:45px;" /><div class="status-circle"></div></div></a>
                <div class="dropdown-menu dropdown-menu-end border-0" aria-labelledby="navbarDropdownUserImage">
                    <a class="dropdown-item" href="<?php url("PROFILE") ?>/<?php _esc($username)?>">
                      <div class="dropdown-item-icon"><i class=""></i></div>
                      Profile
                  </a>
                  <a class="dropdown-item" href="<?php url("BECOME-ADVISOR") ?>">
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
     <div class="mobile-form-find mb-30 d-xxl-none d-lg-block">
      <form autocomplete="on" method="get" action="<?php url("LISTING") ?>" accept-charset="UTF-8">
         <input class="mobile-form-input input-keysearch mr-1" type="text" name="" placeholder="Find services">
          <button class="btn btn-default font-sm mobile-search-button"><li class="fa-22x fas fa-search fa-lg"></i></button>
        </form>
      </div>
      <!-- end Mobile search -->
    </header>

    <!-- END OF THE HEADER -->
          <!-- Mobile Version -->
          <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
            <div class="mobile-header-wrapper-inner">
            <div class="icon-container">
                <img class="rounded-circle mobi-profile-img" src="<?php _esc($config['site_url']);?>storage/profile/<?php _esc($userpic)?>" alt="<?php _esc($username);?>" style="max-width:68px;" /><div class="status-circle-1"></div></div></a>
                <div class="name-title"><?php _esc($fullname);?>
                <span style="color:black;font-size:16px;font-style:italic;">
                <br><?php $usertype = $usertype == 'user' ? 'Advisor': 'Employer';
                _esc($usertype);
                ?></span></div>

              <div class="mobile-header-content-area adv-font">
                <div class="perfect-scroll">
                  <div class="mobile-menu-wrap pt-40">
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
                  <div class="mobile-account">
                    <ul class="mobile-menu font-heading">
                    <li><a href="<?php url("INDEX") ?>">Home</a></li>
                      <li><a href="<?php url("MESSAGE") ?>">Inbox</a></li>
                      <li><a href="saved_experts.php">Saved Experts</a></li>
                      <li><a href="<?php url("NOTIFICATIONS") ?>">Notifications</a></li>
      
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
   
    <?php } ?>