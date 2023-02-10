 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="assets/css/e2.css" rel="stylesheet">
    <link href="assets/css/e-mobile.css">
    <link href="assets/css/litepicker.css" rel="stylesheet" />
    <script src="assets/js/feather.min.js"></script>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="assets/css/vendors/line-awesome.min.css">
    <link href="assets/vendors/slick-master/slick/slick.css" rel="stylesheet" type="text/css">
    <!--<link href="assets/css/vendors/style.css" rel="stylesheet" type="text/css">-->
    <link href="assets/css/e.css" rel="stylesheet" type="text/css">
    <title>Expert Profile Agency </title>
  </head>
  <body>

   <header class="header">
      <div class="container">
        <div class="loged-header main-header">
          <div class="header-left">
            <div class="header-logo2">
              <a class="navbar-header-2 d-flex" href="index.php">
                <img class="logo-left" src="assets/imgs/template/gtclogo.png" alt="logo"></a>
            </div>
          </div>
          <div class="header-nav">
            <div class="loged-form-find d-none d-lg-block wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                <form>
                 <input class="loged-form-input input-keysearch color-white mr-1" type="text" name="" placeholder="What service are you looking for today?">
                  <button class="btn btn-default font-sm loged-search-button"><li class="fa-22x fas fa-search fa-lg"></i></button>
                </form>
              </div>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>
          

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
                        Inbox (0)
                    </h6>
                    <div class="dropdown-divider"></div>
                    <!-- Example Message 1  -->
                    <a class="dropdown-item dropdown-notifications-item" href="inbox.php">
                        <img class="dropdown-notifications-item-img" src="assets/imgs/inbox/Ellipse 14.png" />
                        <div class="dropdown-notifications-item-content">
                          <div class="dropdown-notifications-item-content-details">Juan Rodrick</div>
                          <div class="dropdown-notifications-item-content-text text-truncate" style="width:15rem;">Hello you requested for a tax consultant</div>
                          <div class="dropdown-notifications-item-date">4 Months</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-item" href="inbox.php">
                      <img class="dropdown-notifications-item-img" src="assets/imgs/inbox/Ellipse 10.png" />
                      <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">Juan Rodrick</div>
                        <div class="dropdown-notifications-item-content-text text-truncate" style="width:15rem;">Hello you requested for a tax consultant</div>
                        <div class="dropdown-notifications-item-date">7 Months</div>
                      </div>
                  </a>
                  <a class="dropdown-item dropdown-notifications-item" href="inbox.php">
                    <img class="dropdown-notifications-item-img" src="assets/imgs/inbox/Ellipse 11.png" />
                    <div class="dropdown-notifications-item-content">
                      <div class="dropdown-notifications-item-content-details">Juan Rodrick</div>
                      <div class="dropdown-notifications-item-content-text text-truncate" style="width:15rem;">Hello you requested for a tax consultant</div>
                      <div class="dropdown-notifications-item-date">1 Year</div>
                    </div>
                </a>

                <!-- <div class="dropdown-nonotifications-icon"><i class="fa-regular fa-envelope-open fa-4xx"></i></div>
                <div class="dropdown-nonotifications-title">No Inbox</div>
                <div class="dropdown-nonotifications"> ​Browse our amazing catalog of advisors or post a job on Global Tax Compliance.</div> -->
                    <!-- Footer Link-->
                    <a class="dropdown-item dropdown-notifications-footer" href="inbox.php">See all in Inbox</a>
                </div>
            </li>

            <!-- Alerts Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block mr--1 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-regular fa fa-bell bx-tada fa-2x"></i></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="fa-regular fa fa-bell fa-1xx me-2"></i>
                        Notifications (0)
                    </h6>
                    <div class="dropdown-divider"></div>
                    <!-- Example Alert 1-->
                    <a class="dropdown-item dropdown-notifications-item" href="#">
                        <div class="dropdown-notifications-item-icon bg-warning">
                          <i class="fa-regular fa fa-bell fa-2xx"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">Update</div>
                            <div class="dropdown-notifications-item-content-text  text-truncate" style="width:15rem;">Hello Faridah have you posted a job?</div>
                           <div class="dropdown-notifications-item-date">4 Months</div> 
                        </div>
                    </a>

                    <!-- No Notification -->
                    <!-- <div class="dropdown-nonotifications-icon"><i class="fa-regular fa-bell-slash fa-4xx"></i></div>
                    <div class="dropdown-nonotifications-title">No Notifications</div>
                    <div class="dropdown-nonotifications"> ​Browse our amazing catalog of advisors or post a job on Global Tax Compliance.</div> -->
                    <!-- No Notification -->
                    <!-- footer alert -->
                    <a class="dropdown-item dropdown-notifications-footer" href="">See all Notifications</a>
                </div>
            </li>
           
            <!-- User Dropdown-->
            <li class="nav-item dropdown mr--1 no-caret dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="icon-container">
                  <img class="img-fluid" src="assets/imgs/user-img/user-8.png" style="max-width:45px;" /><div class="status-circle"></div></div></a>
                <div class="dropdown-menu dropdown-menu-end border-0" aria-labelledby="navbarDropdownUserImage">
                    <!-- <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="assets/imgs/user-img/user-8.png" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">Valerie Luna</div>
                            <div class="dropdown-user-details-email"><a href="">Email</a></div>
                        </div>
                    </h6> -->
                    <a class="dropdown-item" href="expert-profile.php">
                      <div class="dropdown-item-icon"><i class=""></i></div>
                      Profile
                  </a>
                  <a class="dropdown-item" href="become-an-advisor-form.php">
                    <div class="dropdown-item-icon"><i class=""></i></div>
                    Become an Advisor
                </a>
                <a class="dropdown-item" href="category.php">
                  <div class="dropdown-item-icon"><i class=""></i></div>
                  Hire an Advisor
                </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Edit-Profile.php">
                      <div class="dropdown-item-icon"><i class=""></i></div>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="dropdown-item-icon"><i class=""></i></div>
                      Help & Support
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        English <div class="ml-5 dropdown-item-icon"></div>
                    </a>
                    <a class="dropdown-item" href="index.php">
                        <div class="dropdown-item-icon"><i class="fa-regular fa fa-log-out"></i></div>
                        Logout
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
        <form>
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
                <img class="mobi-profile-img" src="assets/imgs/user-img/user-8.png" style="max-width:68px;" /><div class="status-circle-1"></div></div></a>
                <div class="name-title pb-20">Valerie</div>

              <div class="mobile-header-content-area adv-font">
                <div class="perfect-scroll mt--10">
                  <div class="mobile-account">
                    <ul class="mobile-menu font-heading">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="inbox.php">Inbox</a></li>
                      <li><a href="saved_experts.php">Saved Experts</a></li>
                      <li><a href="#">Notifications</a></li>
                    </ul>
                  </div>
                  <div class="mobile-menu-wrap pt-10">
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
                  <div class="mobile-account border-bottom pb-20 pt-20">
                  <ul>
                    <li><a href="expert-profile.php">My Profile</a></li>
                  </ul>
                  </div>

                  <div class="mobile-account border-bottom pb-20">
                    <ul>
                      <li class="pb-20"><a href="become-an-advisor-form.php">Become an Advisor</a></li>
                      <li class="pb-20"><a href="category.php">Hire an Advisor</a></li>
                      <li class="pb-20"><a href="#">General</a></li>
                    </ul>
                    </div>


                  <div class="mobile-account">
                    <ul class="mobile-menu font-heading">
                      <li><a href="Edit-Profile.php">Settings</a></li>
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
                      <li><a href="#">Log Out</a></li>
                    </ul>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
          <!-- Mobile End -->
