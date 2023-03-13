<?php
  overall_header("")
?>
<main>

  <!-- category pills -->
  <div class="container-fluid d-flex flex-row border-bottom border-1 header__categories p-sm-3 ps-lg-5">
    <?php foreach($defaultCategories as $cat){?>
      <a href="<?php _esc($config['site_url']."categories?category=".$cat["cat_name"]) ?>" class="me-sm-3 text-center category-pill text--black"><?php _esc($cat["cat_name"]) ?></a>
    <?php }?>  
  </div>

  <!-- home info -->
  <div class="container-fluid border-bottom p-sm-3 ps-lg-5">
    <div class="d-flex flex-row align-items-center">
      <img class="home--icon" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/home-2.svg">
      <span class="ms-2">Home</span>
      <img class="ms-2 arrow-right--icon" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/arrow-right.svg">
      <span class="ms-2">Services</span>
      <img class="ms-2 arrow-right--icon" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/arrow-right.svg">
      <a class="ms-2" href="#">Personal Income Tax</a>
    </div>
    <p class="mt-3">Personal Income Tax is a type of income tax that is levied on an individual’s wages, salaries, and other types of income.  </p> 
  </div>

  <section class="category--section d-flex flex-column">
    
    <!-- Filters -->

    <form class="filter--section d-flex flex-column">
      
    
      <div class="p-4 filter--header d-flex align-items-center justify-content-between">
        <span>Filter...</span>
      </div>
      

      <!-- contractor filter -->
      <div>
        
        <div class="filter--section__item d-flex align-items-center justify-content-between p-4">
          <span>Contractor</span>
          <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/caretUp.svg" alt="" class="caret-up">
          <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/caretDown.svg" alt="" class="caret-down d-none">
        </div> 
        
        <div class="filter--section__item d-flex flex-column p-4 d-none">
          <div class="d-flex align-items-center">
            <input type="checkbox" name="contractor" id="f-1" class="filter--checkbox" value="freelance">
            <label class="ms-3 mt-1 filter--label" for="f-1">Freelancer</label>
          </div>
          <div class="d-flex align-items-center">
            <input type="checkbox" name="contractor" id="f-2" class="filter--checkbox" value="agency">
            <label class="ms-3 mt-1 filter--label" for="f-2">Agency</label>
          </div>
        </div>
      
      </div>
      
      <div>

        <div class="filter--section__item d-flex align-items-center justify-content-between p-4">
          <span>Sort by</span>
            <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/caretUp.svg" alt="" class="caret-up">
            <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/caretDown.svg" alt="" class="caret-down d-none">
        </div> 

        <div class="filter--section__item d-flex flex-column p-4 d-none">
          <div class="d-flex align-items-center">
            <input type="checkbox" name="sortby" id="f-3" class="filter--checkbox" value="nearest_location">
            <label class="ms-3 mt-1 filter--label" for="f-3">Nearest Location</label>
          </div>
          <div class="d-flex align-items-center">
            <input type="checkbox" name="sortby" id="f-4" class="filter--checkbox" value="verified">
            <label class="ms-3 mt-1 filter--label" for="f-4">Verified Advisor</label>
          </div>
        </div>

      </div>

      <div class="filter--section__item d-flex align-items-center justify-content-between p-4">
        <span>Services</span>
        <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/caretUp.svg" alt="" class="caret-up">
        <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/caretDown.svg" alt="" class="caret-down d-none">
      </div> 
      <div class="filter--section__item d-flex align-items-center justify-content-between p-4">
        <span>Country</span>
          <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/caretUp.svg" alt="" class="caret-up">
          <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/icons/caretDown.svg" alt="" class="caret-down d-none">
      </div>
      <div class="d-flex align-items-center justify-content-center apply--btn-container">
        <button class="apply--btn">Apply</button> 
      </div>
      

    </form>

  </section>

</main>

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
  <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/category.js"></script>
  </body>
</html>