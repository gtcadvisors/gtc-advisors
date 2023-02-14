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
    <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/stylez.css" rel="stylesheet">
    <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/forms.css" rel="stylesheet">
    <title>GTC - Advisors</title>                 
  </head> 
  <body>
    
  <?php include_once TEMPLATE_PATH.'/header_2.php'; ?>
     <div class="bdrd-top"></div>
    <!-- MAIN PAGE VIEW OR LAYOUT -->
    <main class="main bg-white">
      <section class="section-box">
        <div class="banner-hero" id="hero-2">
          <div class="banner-inner">
            <div class="block-banner mt-70 text-center">  
              <h1 class="text-42 color-white wow animate__animated animate__fadeInUp">Work Your Way</h1>
              <div class="font-lg font-regular color-white mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">You bring the expertise. We'll make earning easy.</div>
              <button class="mt-50 border-0 border-radius-5 bg-primary text-white pt-10 pl-20 pr-20 pb-10"><a href="<?php url("BECOME-ADVISOR-FORM") ?>" class="text-white">Become an advisor</a></button>
            </div>
            
          </div>
        </div>
       <!-- LIST OF THE ADVISORS PANEL -->
      </section>
      <section class="section-box mt-30 bg-white"> 
        <div class="container">
          <p class="text-center fs-3 mt-50 mb-50 text-dark">Join our growing advisor community</p>
          </div>
      </section> 
      <div class="d-flex flex-column justify-content-lg-evenly bg-white">
        <div class="d-flex flex-column flex-lg-row justify-content-evenly overflow-hidden">
          <div class="d-flex flex-row flex-lg-row justify-content-center mb-10 mt-10 p-20"> 
            <div class="card mr-15" id="row_p">
                <img class="card-img" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/pics_1.png" alt="">
                <div class="card-img-overlay" width="100%" id="text_b">
                    I am a Verified Financial Planner
                </div>
            </div>
            <div class="card ml-15" id="row_p">
                <img class="card-img" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/pics_2.png" alt="">
                <div class="card-img-overlay" width="100%" id="text_b">
                    I am a Verified Tax Auditor
                </div>
            </div>
          </div>
          <div class="d-flex flex-row flex-lg-row justify-content-center mb-10 mt-10 p-20"> 
            <div class="card mr-15" id="row_p">
                <img class="card-img" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/pics_3.png" alt="">
                <div class="card-img-overlay" width="100%" id="text_b">
                    I am a Verified Tax Dispute Resolutor
                </div>
            </div>
            <div class="card ml-15" id="row_p">
                <img class="card-img" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/pics_4.png" alt="">
                <div class="card-img-overlay" width="100%" id="text_b">
                    I am a Verified  estate Specialist
                </div>
            </div>
          </div>
        </div>

        <div class="d-flex flex-column flex-lg-row justify-content-evenly mb-50 overflow-hidden">
          <div class="d-flex flex-row flex-lg-row justify-content-center mb-10 mt-10 p-20">
            <div class="card mr-15" id="row_p">
                <img class="card-img" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/pics_5.png" alt="">
                <div class="card-img-overlay" width="100%" id="text_b">
                    I am a Verified  Tax Consultant
                </div>
            </div>
            <div class="card ml-15" id="row_p">
                <img class="card-img" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/pics_6.png" alt="">
                <div class="card-img-overlay" width="100%" id="text_b">
                    I am a Verified Tax Expert
                </div>
            </div>
          </div>
          <div class="d-flex flex-row flex-lg-row justify-content-center mt-10 mb-10 p-20">
            <div class="card mr-15" id="row_p">
                <img class="card-img" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/pics_7.png" alt="" height="100%">
                <div class="card-img-overlay" width="100%" id="text_b">
                    I am a Verified Tax  Advisor
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center ml-15" id="row_p2">
                 <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Vector (4).png" alt="" width="50px" class="m-auto mt-50">
                 <span class="text-center fs-4 text-dark">What's Your <br>
                     Skill</span>
                 <button class="border-0 pl-10 pr-10 pt-5 pb-5 bg-primary border-radius-5 text-white m-auto" style="width: max-content;" id="button_ad">Become an Advisor</button>
            </div>
          </div>
        </div>
        <!-- HOW IT WORKS DEFINITION -->
        <div id="how_works">
            <h4 class="text-center fs-3 mt-50 mb-50">How it Works</h4>
            <div class="d-flex d-md-flex d-lg-flex flex-column flex-lg-row flex-md-row justify-content-evenly justify-content-md-evenly mb-50">
              <div class="d-flex flex-row flex-md-reverse flex-lg-row justify-content-evenly justify-content-md-start">
                <div  class="p-15" id="mid_txt">
                    
                  <h5 class="text-center m-2">
                      <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/ClipboardText.png" alt=""> <br> <br> 
                      1. Create a Gig</h5>
                  <p class="text-center">Sign up for free, set up your Gig,
                      and offer your work to our global audience
                  </p>
                </div>

                <div class="p-15" id="mid_txt">
                    
                    <h5 class="text-center m-2">
                        <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/CheckSquare.png" alt=""> <br> <br>   
                        2. Deliver great work</h5>
                    <p class="text-center"> get notified when you get an order and use our 
                        system to discuss details with customers
                    </p>
                </div>

                  <div class="p-15 mid_txt" id="mid_txt">
                        
                    <h5 class="text-center m-2">
                        <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Frame 126.png" alt=""> <br> <br>   
                        3. Get Paid</h5>
                    <p class="text-center">Get paid on time, every time. Payment is available for 
                        withdrawal as soon as it clears.
                    </p>
                </div>
              </div>


               <div class="d-flex flex-row justify-content-center d-md-none d-lg-none">
                  <div style="width: 300px;" class="p-15">
                      
                    <h5 class="text-center m-2">
                        <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Frame 126.png" alt=""> <br> <br>   
                        3. Get Paid</h5>
                    <p class="text-center">Get paid on time, every time. Payment is available for 
                        withdrawal as soon as it clears.
                    </p>
                </div>
               </div>

                

            </div>

        </div>
        <!-- SECTION FOR THE CLIENT TESTIMONIALS -->
        <h5 class="fs-3 text-center mt-50 mb-50">Clients Stories</h5>
        
        <div class="d-flex flex-column flex-lg-row-reverse flex-md-row-reverse justify-content-evenly mb-50">
           
            <div class="d-flex flex-column" style="width: auto;" id="mssg_con">
              <div class="d-flex m-3 d-lg-none d-sm-none d-md-none" id="persona">
                <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Ellipse 15.png" alt="" style="width: 50px; border-radius:50%;" class="ml-20 mr-20">
               <p><b>Milton Edward</b>  <br> Sales manager, Chops by Zahra </p>    
            </div>
              <div class="d-flex flex-row" id="stars">
                <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Vector (5).png" alt="" class="m-1 p-3">
                <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Vector (5).png" alt="" class="m-1 p-3">
                <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Vector (5).png" alt="" class="m-1 p-3">
                <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Vector (5).png" alt="" class="m-1 p-3">
                <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Vector (5).png" alt="" class="m-1  p-3">
              </div>
                <div class="d-flex flex-column justify-content-start" id="mssg">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, laboriosam eum vitae expedita explicabo,
                    consectetur quam facere ipsam ut molestias suscipit debitis nostrum atque est. Natus numquam minima neque  
                   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa rerum libero porro autem! Soluta veniam a non error 
                   excepturi, reprehenderit hic modi deserunt quidem perferendis earum corrupti aliquid architecto rem.
                    
                    <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa rerum libero porro autem! Soluta veniam a non error 
                    excepturi, reprehenderit hic modi deserunt quidem perferendis earum corrupti aliquid architecto rem.
                     
   
                   
                </div>
              </div>

            <div class="d-flex flex-column">
              <div class="d-none d-sm-flex d-lg-flex d-md-flex m-3" id="persona">
                  <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Ellipse 15.png" alt="" style="width: 50px; border-radius:50%;" class="ml-20 mr-20">
                 <p><b>Milton Edward</b>  <br> Sales manager, Chops by Zahra </p>    
              </div>
              <div class="d-flex  m-3" id="personan">
                  <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Ellipse 84.png" alt="" style="width: 50px; border-radius:50%;" class="ml-20 mr-20">
                 <p><b>Milton Edward</b>  <br> Sales manager, Chops by Zahra </p>    
              </div>
              <div class="d-flex  m-3" id="personan">
                  <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Ellipse 12.png" alt="" style="width: 50px; border-radius:50%;" class="ml-20 mr-20">
                 <p><b>Milton Edward</b>  <br> Sales manager, Chops by Zahra </p>    
              </div>
              <div class="d-flex  m-3" id="personan">
                  <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/Ellipse 15.png" alt="" style="width: 50px; border-radius:50%;" class="ml-20 mr-20">
                 <p><b>Milton Edward</b>  <br> Sales manager, Chops by Zahra </p>    
              </div>
             
          </div>
         </div>

         <div class="container-fluid" id="faqs">
    <h4 class="fs-2 text-center mt-50 mb-50">Q&A</h4>

    <div class="d-flex flex-column flex-lg-row flex-md-row justify-content-evenly justify-content-md-evenly mb-50">
        <div class="d-flex flex-column">
            <div id="p_faq" class="m-2">How do I get clients? <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/arr_down.png" alt="" style="float: right;" class="mt-5" onclick="show_faq(1)">
            <p style="display: none; font-size: 13px;" id="faq_1">
              Register as a tax adviser by creating a profile which highlights what you do. Show your skills by sharing your portfolio. 
              Potential clients can browse through the catalogue and reach out if interested.
            </p>
            </div>
            <div id="p_faq1" class="m-2">How do I get Paid? <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/arr_down.png" alt="" style="float: right;" class="mt-5" onclick="show_faq(2)"> 
              <p style="display: none; font-size: 13px;" id="faq_2"> 
                When you deliver a service, our system automatically processes the payment for the service from the funds in your clients account to your
                  account using any of the payment platforms that you have opted for.
                </p>
            </div>
            <div id="p_faq1" class="m-2">How do I price my service? <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/arr_down.png" alt="" style="float: right;" class="mt-5" onclick="show_faq(3)">
              <p style="display: none; font-size: 13px;" id="faq_3"> 
                You can price your products according to the standards for pricing obtainable for such service or
                  according to the value of the service that you offer based on your appraisal.
              </p>
            </div>
            
        </div>

  <div class="d-flex flex-column">
      <div id="p_faq1" class="m-2">How much money can I make? <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/arr_down.png" alt="" style="float: right;" class="mt-5" onclick="show_faq(4)">
        <p style="display: none; font-size: 13px;" id="faq_4"> 
          On Global Tax Compliance, there is no limit to the amount you can make. What you make is equivalent to the earnings from the work you do.
            The more you work, the more you earn.
        </p>
      </div>
      <div id="p_faq1" class="m-2">How much does it cost? <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/arr_down.png" alt="" style="float: right;" class="mt-5" onclick="show_faq(5)">
        <p style="display: none; font-size: 13px;" id="faq_5"> 
          Registration is completely free for both clients and advisors.
        </p>
      </div>
      <div id="p_faq1" class="m-2">How do I promote my profile? <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/arr_down.png" alt="" style="float: right;" class="mt-5" onclick="show_faq(6)">
        <p style="display: none; font-size: 13px;" id="faq_6"> 
          Each advisors profile appears on a catalogue where clients can access by searching for keywords and through the services page. You can promote your profile furthe
          r by sharing a link to your profile on social media, emails, and through other forms of interaction.
        </p>
      </div>
      
  </div>
</div>
</div>
<div class="d-flex flex-column justify-content-center">     
<h3 class="text-center fs-4 mt-50 p-10">Sign up and get access to hundreds of clients</h3>
<button class="border-0 bg-primary text-white border-radius-5 pl-10 pr-10 pt-5 pb-5  m-auto mt-30 mb-50"  style="width: max-content;"><a href="<?php url("BECOME-ADVISOR-FORM") ?>" class="text-white">Become an advisor</a></button>

</div>
</div>
<?php  include_once TEMPLATE_PATH.'/footer_2.php'; ?>
<!-- JAVASCRIPT LIBRARIES AND SCRIPT LINKING -->
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
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/counterup.js"></script>
    <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/main.js?v=4.1"></script>
  </body>
</html>