<div class="userback-button-container" id="userback_button_container">
        <div class="userback-button userback-button-e" style="min-width: 120px;">Feedback</div></div>
<!-- footer start -->
<footer class="footer mt-50" style="line-height: 0 !important;">
      <div class="container">
        <div class="row">
          <div class="d-none d-lg-flex footer-col-1 col-md-8 col-sm-12">
          <?php
            $logo_dark = $config['site_url'].'storage/logo/'.$config['site_logo'];
            $logo_white = $config['site_url'].'storage/logo/'.$config['site_logo_footer'];
            ?>
            <a href="<?php url("INDEX") ?>"><img alt="" src="<?php _esc($config['site_url']);?>storage/logo/<?php _esc($config['site_logo_footer']);?>"></a>
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
              <li><a href="<?php url("CATEGORY") ?>">Categories</a></li>
              <?php
             if($config['country_type'] == "multi") {
            echo '<li><a href="'.url("COUNTRIES",false).'">'.__("Countries").'</a></li>';
             }
         ?>
              <li><a href="<?php url("BECOME-AN-ADVISOR") ?>">Become an Advisor</a></li>
              <li><a href="<?php url("CATEGORY") ?>">Hire an Advisor</a></li>
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
            <div class="d-flex d-lg-none">
            <?php
            $logo_dark = $config['site_url'].'storage/logo/'.$config['site_logo'];
             $logo_white = $config['site_url'].'storage/logo/'.$config['site_logo_footer'];
             ?>
            <img class="footer-logo" src="<?php _esc($config['site_url']);?>storage/logo/<?php _esc($config['site_logo_footer']);?>" alt="gtclogo" style="width:120px;height:40.31px;top:5.96px;left:425px;"> </div>
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
                <div class="lang_selctor-footer col-auto mt-5 mt-md-0">
                  <img class="lang-img" src="assets/imgs/template/icons/Globe.png" alt="">
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
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/main.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/js/user-ajax.js?ver=<?php _esc($config['version']);?>"></script>
<script src="<?php _esc(TEMPLATE_URL);?>/js/custom.js?ver=<?php _esc($config['version']);?>"></script>

<?php
if($is_login){
    if($config['quickchat_socket_on_off'] == "on"){
        ?>
        <script>
            var ws_protocol = window.location.href.indexOf("https://")==0?"wss":"ws";
            var ws_host = '<?php _esc($config['socket_host'])?>';
            var ws_port = '<?php _esc($config['socket_port'])?>';
            var WEBSOCKET_URL = ws_protocol+'://'+ws_host+':'+ws_port+'/quickchat';
            var filename = "<?php _esc($config['quickchat_socket_secret_file'])?>.php";
            var plugin_directory = "plugins/quickchat-socket/"+filename;
        </script>
        <link type="text/css" rel="stylesheet" media="all" href="<?php _esc($config['site_url']);?>plugins/quickchat-socket/assets/chatcss/chatbox.css"/>
        <div id="quickchat-rtl"></div>
        <script>
            if ($("body").hasClass("rtl")) {
                $('#quickchat-rtl').append('<link rel="stylesheet" type="text/css" href="<?php _esc($config['site_url']);?>plugins/quickchat-socket/assets/chatcss/chatbox-rtl.css">');
                var rtl = true;
            }else{
                var rtl = false;
            }
        </script>
        <!--Websocket Version Js-->
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-socket/assets/chatjs/quickchat-websocket.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-socket/plugins/smiley/js/emojione.min.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-socket/plugins/smiley/smiley.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-socket/assets/chatjs/lightbox.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-socket/assets/chatjs/chatbox.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-socket/assets/chatjs/chatbox_custom.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-socket/plugins/uploader/plupload.full.min.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-socket/plugins/uploader/jquery.ui.plupload/jquery.ui.plupload.js"></script>
        <table id="lightbox" style="display: none;height: 100%">
            <tr><td height="10px"><p><img src="<?php _esc($config['site_url']);?>plugins/quickchat-socket/plugins/images/close-icon-white.png" width="30px" style="cursor: pointer"/></p></td></tr>
            <tr><td valign="middle"><div id="content"><img src="#"/></div></td></tr>
        </table>
        <?php
    }
    else if($config['quickchat_ajax_on_off'] == "on"){
        ?>
        <script>
            var filename = "<?php _esc($config['quickchat_ajax_secret_file'])?>.php";
            var plugin_directory = "plugins/quickchat-ajax/"+filename;
        </script>
        <link type="text/css" rel="stylesheet" media="all" href="<?php _esc($config['site_url']);?>plugins/quickchat-ajax/assets/chatcss/chatbox.css"/>
        <div id="quickchat-rtl"></div>
    
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-ajax/plugins/smiley/js/emojione.min.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-ajax/plugins/smiley/smiley.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-ajax/assets/chatjs/lightbox.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-ajax/assets/chatjs/chatbox.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-ajax/assets/chatjs/chatbox_custom.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-ajax/plugins/uploader/plupload.full.min.js"></script>
        <script type="text/javascript" src="<?php _esc($config['site_url']);?>plugins/quickchat-ajax/plugins/uploader/jquery.ui.plupload/jquery.ui.plupload.js"></script>
        <table id="lightbox" style="display: none;height: 100%">
            <tr><td height="10px"><p><img src="<?php _esc($config['site_url']);?>plugins/quickchat-ajax/plugins/images/close-icon-white.png" width="30px" style="cursor: pointer"/></p></td></tr>
            <tr><td valign="middle"><div id="content"><img src="#"/></div></td></tr>
        </table>

        <?php
    }
}
?>
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
<script>
    var session_uname = "<?php _esc($username)?>";
    var session_uid = "<?php _esc($user_id)?>";
    var session_img = "<?php _esc($userpic)?>";
    // Language Var
    var LANG_ERROR_TRY_AGAIN = "<?php _e("Error: Please try again.") ?>";
    var LANG_LOGGED_IN_SUCCESS = "<?php _e("Logged in successfully. Redirecting...") ?>";
    var LANG_ERROR = "<?php _e("Error") ?>";
    var LANG_CANCEL = "<?php _e("Cancel") ?>";
    var LANG_DELETED = "<?php _e("Deleted") ?>";
    var LANG_ARE_YOU_SURE = "<?php _e("Are you sure?") ?>";
    var LANG_YOU_WANT_DELETE = "<?php _e("You want to delete this job") ?>";
    var LANG_YES_DELETE = "<?php _e("Yes, delete it") ?>";
    var LANG_PROJECT_DELETED = "<?php _e("Project has been deleted") ?>";
    var LANG_RESUME_DELETED = "<?php _e("Resume Deleted.") ?>";
    var LANG_EXPERIENCE_DELETED = "<?php _e("Experience Deleted.") ?>";
    var LANG_COMPANY_DELETED = "<?php _e("Company Deleted.") ?>";
    var LANG_SHOW = "<?php _e("Show") ?>";
    var LANG_HIDE = "<?php _e("Hide") ?>";
    var LANG_HIDDEN = "<?php _e("Hidden") ?>";
    var LANG_TYPE_A_MESSAGE = "<?php _e("Type a message") ?>";
    var LANG_ADD_FILES_TEXT = "<?php _e("Add files to the upload queue and click the start button.") ?>";
    var LANG_ENABLE_CHAT_YOURSELF = "<?php _e("Could not able to chat yourself.") ?>";
    var LANG_JUST_NOW = "<?php _e("Just now") ?>";
    var LANG_PREVIEW = "<?php _e("Preview") ?>";
    var LANG_SEND = "<?php _e("Send") ?>";
    var LANG_FILENAME = "<?php _e("Filename") ?>";
    var LANG_STATUS = "<?php _e("Status") ?>";
    var LANG_SIZE = "<?php _e("Size") ?>";
    var LANG_DRAG_FILES_HERE = "<?php _e("Drag files here") ?>";
    var LANG_STOP_UPLOAD = "<?php _e("Stop Upload") ?>";
    var LANG_ADD_FILES = "<?php _e("Add files") ?>";
    var LANG_CHATS = "<?php _e("Chats") ?>";
    var LANG_NO_MSG_FOUND = "<?php _e("No message found") ?>";
    var LANG_ONLINE = "<?php _e("Online") ?>";
    var LANG_OFFLINE = "<?php _e("Offline") ?>";
    var LANG_TYPING = "<?php _e("Typing...") ?>";
    var LANG_GOT_MESSAGE = "<?php _e("You got a message") ?>";

    if ($("body").hasClass("rtl")) {
        var rtl = true;
    }else{
        var rtl = false;
    }
</script>
  </body>
</html>