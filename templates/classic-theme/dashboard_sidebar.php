<!-- Dashboard Sidebar
    ================================================== -->
<div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
        <div class="dashboard-nav-container">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger d-none d-sm-none">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
                <span class="trigger-title"><?php _e("Dashboard Navigation") ?></span>
            </a>
            <!-- Navigation -->
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">

                    <ul data-submenu-title="<?php _e("") ?>">
                        <li class="active"><a href="<?php url("DASHBOARD") ?>">
                        <?php _e("Dashboard") ?></a></li>
                        <?php if($config['quickchat_socket_on_off'] == 'on' || $config['quickchat_ajax_on_off'] == 'on'){ ?>
                        <li><a href="<?php url("MESSAGE") ?>">
                        <?php _e("Message") ?></a></li>
                        <?php } ?>
                        <li><a href="<?php url("MEMBERSHIP") ?>">
                        <?php _e("Subscription") ?></a></li>
                    </ul>

                    <ul data-submenu-title="<?php _e("MANAGE PROFILE") ?>">
                        <li><a href="<?php url("ADVISOR-PROFILE") ?>/<?php _esc($username)?>">
                        <?php _e("My Profile") ?></a></li>
                        <li><a href="<?php url("EDITPROFILE") ?>"><?php _e("Edit Profile") ?></a></li>
                    </ul>

                    <ul data-submenu-title="<?php _e("MANAGE DOCUMENTS") ?>" >
                        <li>
                        <?php 
                        if ($usertype == 'freelancer' || $usertype == 'agency') {
                            if ($config['resume_enable']) {
                                echo '<a href="'.url("RESUMES", false).'">'.__("Resumes").'</a>';
                            }
                        }
                        ?>
                        </li>
                        <li>
                        <?php 
                        if ($usertype == 'freelancer' || $usertype == 'agency') {
                            if ($config['resume_enable']) {
                                echo '<a href="'.url("LICENSES", false).'">'.__("Licenses").'</a>';
                            }
                        }
                        ?>
                        </li>
                        <li>
                        <?php 
                        if ($usertype == 'freelancer' || $usertype == 'agency') {
                            if ($config['resume_enable']) {
                                echo '<a href="'.url("CERTIFICATES", false).'">'.__("Certificates").'</a>';
                            }
                        }
                        ?>
                        </li>
                    </ul>

                    <ul class="border-top" data-submenu-title="">
                        <!-- <li><a href="<?php url("ACCOUNT_SETTING") ?>"><i class="icon-material-outline-settings"></i> <?php _e("Account Setting") ?></a></li> -->
                        <li><a href="<?php url("LOGOUT") ?>"><i class="icon-material-outline-power-settings-new"></i> <?php _e("Logout") ?></a></li>
                    </ul>

                </div>
            </div>
            <!-- Navigation / End -->
        </div>
    </div>
</div>
<!-- Dashboard Sidebar / End -->