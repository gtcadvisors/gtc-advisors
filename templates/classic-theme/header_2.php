
      <!-- HEADER FOR THE PAGE -->
      <header class="header header-2">
      <div class="container">
        <div class="loged-header main-header">
          <div class="header-left">
            <div class="header-logo2">
              <a class="d-flex" href="index.html">
                <img alt="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/gtclogo.png"></a>
            </div>
          </div>
          <div class="header-nav">
            <div class="loged-form-find d-none d-lg-block wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                <form>
                 <input class="loged-form-input input-keysearch mr-1" type="text" name="" placeholder="What service are you looking for today?">
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
            <li class="nav-item dropdown no-caret d-none d-sm-block mr--1 dropdown-notifications p-4">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-regular fa fa-heart fa-2x"></i></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="me-2 fa-regular fa fa-heart fa-1xx"></i>
                        My favorite
                    </h6>
                    <div class="dropdown-divider"></div>
                    <!-- Example favorite 1-->
                    <a class="dropdown-item dropdown-notifications-item" href="#">
                        <div class="dropdown-notifications-item-icon bg-warning"><i class="fa-regular fa fa-activity"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 29, 2021</div>
                            <div class="dropdown-notifications-item-content-text text-truncate" style="width:15rem;">This is an alert message. It's nothing serious, but it requires your attention.</div>
                        </div>
                    </a>
                    <!-- footer favorite -->
                    <a class="dropdown-item dropdown-notifications-footer" href="#">View All</a>
                </div>
            </li>

             <!-- Messages Dropdown-->
             <li class="nav-item dropdown no-caret d-none d-sm-block mr--1 dropdown-notifications p-4">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-regular fa fa-envelope fa-2x"></i></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="me-2 fa-regular fa fa-envelope fa-1xx"></i>
                        Inbox (0)
                    </h6>
                    <div class="dropdown-divider"></div>
                    <!-- Example Message 1  -->
                    <a class="dropdown-item dropdown-notifications-item" href="#">
                        <img class="dropdown-notifications-item-img" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/inbox/Ellipse 14.png" />
                        <div class="dropdown-notifications-item-content">
                          <div class="dropdown-notifications-item-content-details">Juan Rodrick</div>
                          <div class="dropdown-notifications-item-content-text text-truncate" style="width:15rem;">Hello you requested for a tax consultant</div>
                          <div class="dropdown-notifications-item-date">4 Months</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-item" href="#">
                      <img class="dropdown-notifications-item-img" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/inbox/Ellipse 10.png" />
                      <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">Juan Rodrick</div>
                        <div class="dropdown-notifications-item-content-text text-truncate" style="width:15rem;">Hello you requested for a tax consultant</div>
                        <div class="dropdown-notifications-item-date">7 Months</div>
                      </div>
                  </a>
                  <a class="dropdown-item dropdown-notifications-item" href="#">
                    <img class="dropdown-notifications-item-img" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/inbox/Ellipse 11.png" />
                    <div class="dropdown-notifications-item-content">
                      <div class="dropdown-notifications-item-content-details">Juan Rodrick</div>
                      <div class="dropdown-notifications-item-content-text text-truncate" style="width:15rem;">Hello you requested for a tax consultant</div>
                      <div class="dropdown-notifications-item-date">1 Year</div>
                    </div>
                </a> 
                    <a class="dropdown-item dropdown-notifications-footer" href="#">See all in Inbox</a>
                </div>
            </li>
            <!-- Alerts Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block mr--1 dropdown-notifications p-4">
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
                    <a class="dropdown-item dropdown-notifications-footer" href="#">See all Notifications</a>
                </div>
            </li> 
            <!-- User Dropdown-->
            <li class="nav-item dropdown mr--1 no-caret dropdown-user pl-10">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="icon-container">
                  <img class="img-fluid" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/user-img/user-8.png" style="max-width:45px;" /><div class="status-circle"></div></div></a>
                <div class="dropdown-menu dropdown-menu-end border-0" aria-labelledby="navbarDropdownUserImage">
                   
                    <a class="dropdown-item" href="#">
                      <div class="dropdown-item-icon"><i class=""></i></div>
                      Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <div class="dropdown-item-icon"><i class=""></i></div>
                    Become an Advisor
                </a>
                <a class="dropdown-item" href=""#>
                  <div class="dropdown-item-icon"><i class=""></i></div>
                  Hire an Advisor
                </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href=""#>
                      <div class="dropdown-item-icon"><i class=""></i></div>
                      Settings
                    </a>
                    <a class="dropdown-item" href=""#>
                      <div class="dropdown-item-icon"><i class=""></i></div>
                      Help & Support
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div class="dropdown-item-icon"><i class=""></i></div>
                        English
                    </a>
                    <a class="dropdown-item" href="#">
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
      <div class="mobile-form-find mb-30 d-xxl-none d-lg-none d-sm-block wow animate__animated animate__fadeIn" data-wow-delay=".2s">
        <form>
         <input class="mobile-form-input input-keysearch text-dark mr-1" type="text" name="" placeholder="Find services">
          <button class="btn btn-default font-sm mobile-search-button"><li class="fa-22x fas fa-search fa-lg"></i></button>
        </form>
      </div>
      <!-- end Mobile search -->
    </header>