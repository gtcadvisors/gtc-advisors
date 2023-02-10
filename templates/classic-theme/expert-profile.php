<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/template/favicon.svg">
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/css/expro2.css" rel="stylesheet">
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/css/mobile.css">
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/css/litepicker.css" rel="stylesheet" />
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/feather.min.js"></script>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/css/vendors/line-awesome.min.css">
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/vendors/slick-master/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/css/vendors/style.css" rel="stylesheet" type="text/css">
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/css/expro.css" rel="stylesheet" type="text/css">
    <title>Expert Profile Agency </title>
  </head> 
  <body> -->
<?php   
  include ('overall_header.php');
  
?>
<div class="container-fluid d-none d-lg-flex flex-row justify-content-evenly border-bottom border-2 p-3">
        <div class="text-center">
          <div class="list-tabs">
            <ul class=" nav-tabs d-lg-flex flex-row justify-content-evenly" role="tablist">
              <li class="mt-3 mb-3"><a href="#"> Tax Audits</a></li>
              <li class="mt-3 mb-3"><a  href="#"> Sales Tax</a></li>
              <li class="mt-3 mb-3"><a  href="#"> International</a></li>
              <li class="mt-3 mb-3"><a href="#"> Financial Planning</a></li>
              <li class="mt-3 mb-3"><a  href="#"> Corporations</a></li>
              <li class="mt-3 mb-3"><a  href="#"> IRS Representation</a></li>
              <li class="mt-3 mb-3"><a  href="#"> Individual Tax Preparation</a></li> 
              <li class="mt-3 mb-3"> <a class="see-all" href="category.php"> See All</a></li> 
            </ul>
          </div>
        </div>
        </div>
        <div class="container-fluid d-md-flex d-none d-lg-none flex-row justify-content-evenly border-bottom border-2 p-3">
        <div class="text-center">
      <div class="list-tabs mb-3">
        <ul class="nav nav-tabs" role="tablist">
          <li><a style="font-size:10px !important;padding:6px 15px !important; font-weight: 400 !important;" href="#"> Tax Pricing</a></li>
          <li><a style="font-size:10px !important;padding:6px 15px !important; font-weight: 400 !important;"  href="#">Corporations</a></li>
          <li><a style="font-size:10px !important;padding:6px 15px !important; font-weight: 400 !important;" href="#">Tax Audits</a></li>
          <li><a style="font-size:10px !important;padding:6px 15px !important; font-weight: 400 !important;"  href="#"> Sales Tax</a></li> 
          <li><a style="font-size:10px !important;padding:6px 15px !important; font-weight: 400 !important;"  href="#">IRS Representation</a></li>
        </ul>
      </div>
    </div>
        </div>
        <div class="container-fluid d-flex  d-lg-none  d-md-none flex-row justify-content-evenly border-bottom border-2 p-3">
        <div class="text-center">
      <div class="list-tabs mb-3">
        <ul class="nav nav-tabs" role="tablist">
          <li><a style="padding:6px 15px !important; font-weight: 400 !important;" href="#"> Tax Pricing</a></li>
          <li><a style="padding:6px 15px !important; font-weight: 400 !important;"  href="#">Corporations</a></li>
          <li><a style="padding:6px 15px !important; font-weight: 400 !important;" href="#">Tax Audits</a></li>
          <li><a style="padding:6px 15px !important; font-weight: 400 !important;"  href="#"> Sales Tax</a></li> 
           </ul>
      </div>
    </div>
        </div>


      <main class="main">
        <div class="d-flex flex-column justify-content-center d-md-flex flex-md-column justify-content-md-center d-lg-flex flex-lg-row justify-content-lg-between container agency_view">
            <div class=" container d-flex flex-column justify-content-center  d-md-flex flex-md-column justify-content-md-center d-lg-flex flex-lg-row justify-content-lg-between  col-12 col-md-9 col-lg-7" > <!-- the first part -->
              <div class="image-company m-1"><img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/agency/Ellipse 82.png" alt=""></div>
              <div>
                <div class="agency-content col-12">
                  <h2 class="aboutagency-title">GTC Advisors & co <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/agency/Vector.png"></h2>
                  <p class="aboutagency">We help Business Owners, CEO’s and Managers <br> decrease their workload and increase their profits.</p>
                  <div class="mt-149 mt-20 d-none d-lg-block  d-xl-block" id="agency_list">
                  <a class="btn service-cat cat mb-5" href="#">Tax Dispute</a>
                  <a class="btn service-cat cat mb-5 mr-05" href="#">Transfer Pricing</a>
                  <a class="btn service-cat cat mb-5" href="#">Value Added Tax</a>
                  <a class="btn service-cat cat mb-5" href="#">Corporate Income Tax</a>
                  <a class="btn service-cat cat mb-5 mr-06" href="#">Personal Income Tax</a>
                      </div>
                      <!-- Mobile -->
                      <div class="row">
                      <div class="mt-10 mt-md-10 mt-lg-auto">
                      <div class="d-flex flex-row justify-content-center d-lg-none">
                        <a class="btn btn-tags-sm mb-10" href="jobs-grid.html">Tax Dispute</a>
                        <a class="btn btn-tags-sm mb-10" href="#">Transfer Pricing</a>
                        <a class="btn btn-tags-sm mb-10" href="jobs-grid.html">Value Added Tax</a>
                        <a class="btn btn-tags-sm mb-10" href="jobs-grid.html">Corporate Income Tax</a> 
                    </div>
                      </div>
                    </div>

                  <a href="inbox.php" class="btn ag-btn agn-btn">Invite to Job</a>
              </div>
              </div>
            </div>

            <div class="d-lg-flex flex-lg-column justify-content-lg-center d-none agency_list col-4"> <!-- second part -->
              <p class="ag-detail"><strong class="availability mr---3">Availability: </strong><span class="full-time"> Full-time (24hrs/wk)</span></p>
                  <p class="ag-detail"><strong class="availability mr---4">Language: </strong><span class="full-time"> English/ French</span></p>
                  <p class="ag-detail"><strong class="availability mr---1">Location: </strong><span class="full-time"> Abuja, Nigeria</span></p>
                  <p class="ag-detail"><strong class="availability mr---2">Response Rate: </strong><span class="full-time"> Replies within 1 hour</span></p>
                  <a href="#" data-bs-toggle="modal" data-bs-target="#report" class="btn ag-report"><i class="ag-icon-flag fa-regular fa fa-flag"></i> Report Advisor</a>
            </div> 
            <div class="col-md-12 w-75 mx-auto agency-box-bottom agency-box2 agency-cont2 d-flex flex-row justify-content-evenly d-md-flex flex-md-row justify-content-md-between d-lg-none">
                  <div class="agency-content  "> 
                  <p class="ag-detail"><strong class="availability mr---3">Availability: </strong></p>
                  <p class="ag-detail"><strong class="availability mr---4">Language: </strong></p>
                  <p class="ag-detail"><strong class="availability mr---1">Location: </strong></p>
                  <p class="ag-detail"><strong class="availability mr--- 2">Response Rate: </strong></p>
                  <p><a href="#" data-bs-toggle="modal" data-bs-target="#report" class="btn ag-report p-0 mt-20"><i class="ag-icon-flag fa-regular fa fa-flag"></i> Report Advisor</a></p>
                  </div>
                    <div class="agency-content">
                      <p class="full-time ag-detail"> Full-time (24hrs/wk)</p>
                      <p class="full-time ag-detail"> English/ French</p>
                      <p class="full-time ag-detail"> Abuja, Nigeria</p>
                      <p class="full-time ag-detail"> Replies within 1 hour</p>
                      <p class="full-time ag-detail"> Anytime</p>
                    </div>
                </div>
               
    </div>

        <!-- The select tab-pane for the display of license, certs or  docs-->
        <div class="select_tab_pane nav d-flex flex-row justify-content-center d-md-flex flex-md-row justify-content-md-start d-lgflex flex-lg-row justify-content-lg-start mt-50" role="tablist">
            <a class="profile mr-15 mr-md-0 mb-2 active"style="border-radius:0px !important;" href="#tab-profile" data-bs-toggle="tab" role="tab" aria-controls="tab-profile" aria-selected="true">Profile</a> 
              
              <a class="certification mr-15 mb-2"style="border-radius:0px !important;" href="#tab-Certification" data-bs-toggle="tab" role="tab" aria-controls="tab-Certification" aria-selected="false">Certification</a> 

            <a class="license mb-2"style="border-radius:0px !important;" href="#tab-license" data-bs-toggle="tab" role="tab" aria-controls="tab-license" aria-selected="false">License</a> 
          
            <a class="cv-resume mb-2"style="border-radius:0px !important;" href="#tab-cvresume" data-bs-toggle="tab" role="tab" aria-controls="tab-cvresume" aria-selected="false">CV/ Resume</a> 

        </div>

            <!-- This is the display of the selected page to be shown -->
            <div class="d-flex flex-column justify-content-center d-md-flex flex-md-column justify-content-center d-lg-flex flex-lg-row justify-content-lg-evenly container mt-50">
              <div class="display_board tab-content">   
                  <div class="tab-pane mt-10 mt-md-0 fade show active" id="tab-profile" role="tabpanel" aria-labelledby="tab-profile">
                      <br><br>
                  <span class="profile-about-title">ABOUT</span>

                  <p class="profile-subdes">
                      GTC Adviors & co. is a firm based in the heart of FCT, Abuja. 
                      Established in year 2018, we have advised over 500 clients across
                       all the states in Nigeria. 

                      We are a firm of 18 tax professionals who are all ICAN certified
                       with our partners having practiced for over 20 years.

                      Some of the projects we have handled include advising the Lagos 
                      state government in the development of the Lekki free trade zone.</p>
                      <br /><span class="mt----"></span>
                  <div class="border-b-line mt----"></div>
                  <h4 class="profile-about-title">ORGANIZATION SIZE</h4>
                  <ul class="org-size ml-50">
                    <li>2- 20 Employees</li>
                  </ul>
                  <br />
                  <div class="border-b-line"></div>
                  <h4 class="profile-about-title">YEAR FOUNDED</h4>
                  <ul class="org-size ml-50">
                  <li>2018</li>
                  </ul>
                </div>
<!-- ########################################### -->
                <div class="tab-pane fade" id="tab-Certification" role="tabpanel" aria-labelledby="tab-Certification">
                  <br><br>
                  <span class="certification-title">Certification</span>
                      <div class="pro-content company-gallery">
                          <div class="row justify-content-md-center">
                          <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                          <div class="project-widget">
                          <div class="pro-image">
                          <img class="img-fluid" alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/ACCA.png">
                          <i class="cert-icon fas fa-image"></i> 
                          <span class="cert-name">ACCA Certification.png</span>
                          </a>
                          </div>
                          </div>
                          </div>
                          <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                          <div class="project-widget">
                          <div class="pro-image">
                          <img class="img-fluid " alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/ANAN.png">
                          <i class="cert-icon fas fa-image"></i> 
                          <span class="cert-name">ANAN Certification.png</span>
                          </a>
                          </div>
                          </div>
                          </div>
                          <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                          <div class="project-widget">
                          <div class="pro-image">
                          <img class="img-fluid" alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/CITN's.png">
                          <i class="cert-icon fas fa-image"></i> 
                          <span class="cert-name">CITN’s Certification.png</span>
                          </a>
                          </div>
                          </div>
                          </div>
                          <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                          <div class="project-widget">
                          <div class="pro-image">
                          <img class="img-fluid" alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/ICAN.png">
                          <i class="cert-icon fas fa-image"></i> 
                          <span class="cert-name">ICAN Certification.png</span>
                          </a>
                          </div>
                          </div>
                          </div>
                          <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                              <div class="project-widget">
                              <div style="width:100% !important;height:50% !important;">
                              <img class="img-fluid" alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/Globa.png">
                              <i class="cert-icon fas fa-file-pdf"></i> 
                              <span class="cert-name">Globa...Certification.pdf</span>
                              </a>
                              </div>
                              </div>
                              </div>
                          </div>
                          </div>
                          </div>
<!-- ############################### -->
                <div class="tab-pane fade" id="tab-license" role="tabpanel" aria-labelledby="tab-license">
                  <br><br>
                  <span class="profile-about-title">License</span>

                  <div class="pro-content company-gallery">
                    <div class="row justify-content-md-center">
                    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="project-widget">
                    <div class="pro-image">
                    <img class="img-fluid" alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/ACCA.png">
                    <i class="cert-icon fas fa-image"></i> 
                    <span class="cert-name">ACCA Certification.png</span>
                    </a>
                    </div>
                    </div>
                    </div>
                    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="project-widget">
                    <div class="pro-image">
                    <img class="img-fluid " alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/ANAN.png">
                    <i class="cert-icon fas fa-image"></i> 
                    <span class="cert-name">ANAN Certification.png</span>
                    </a>
                    </div>
                    </div>
                    </div>
                    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="project-widget">
                    <div class="pro-image">
                    <img class="img-fluid" alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/CITN's.png">
                    <i class="cert-icon fas fa-image"></i> 
                    <span class="cert-name">CITN’s Certification.png</span>
                    </a>
                    </div>
                    </div>
                    </div>
                    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="project-widget">
                    <div class="pro-image">
                    <img class="img-fluid" alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/ICAN.png">
                    <i class="cert-icon fas fa-image"></i> 
                    <span class="cert-name">ICAN Certification.png</span>
                    </a>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
            <!-- ############################################# -->

            <div class="tab-pane fade" id="tab-cvresume" role="tabpanel" aria-labelledby="tab-cvresume">
              <br><br>
              <span class="profile-about-title">CV/Resume</span>

              <div class="pro-content company-gallery">
                <div class="row justify-content-md-center">
               
                <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="project-widget">
                    <div style="width:100% !important;height:50% !important;">
                    <img class="img-fluid" alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/Globa.png">
                    <i class="cert-icon fas fa-file-pdf"></i> 
                    <span class="cert-name">Globa...Certification.pdf</span>
                    </a>
                    </div>
                    </div>
                    </div>
                    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
                      <div class="project-widget">
                      <div style="width:100% !important;height:50% !important;">
                      <img class="img-fluid" alt="User Image" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/certifications/Globa.png">
                      <i class="cert-icon fas fa-file-pdf"></i> 
                      <span class="cert-name">Globa...Certification.pdf</span>
                      </a>
                      </div>
                      </div>
                      </div>
                      
                </div>
                </div> 

          </div>
              </div> 

              <!-- ################################################################################ -->
              <div class="col-lg-4 col-md-12 col-sm-12 col-12 right_sidebar">
              <div class="sidebar-border">
                <h5 class="f-18">Similar Profiles</h5>
                <div class="sidebar-list-job">
                  <ul>
                    <li>
                      <div class="sidebar-icon-item">
                    <img class="similar-user-img rounded-circle" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png"></div>
                      <div class="sidebar-text-info">
                        <strong class="advi-name-similar">James Nduka</strong>
                        <span class="text-description">Coporate Income Tax</span>
                        <br>
                        <a href="#" class="user-txt-icon"><i class="fa-icon las la-user"></i> Freelancer</a>
                    </div>
                    </li>
                    <li>
                      <div class="sidebar-icon-item">
                        <img class="similar-user-img rounded-circle" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png"></div>
                      <div class="sidebar-text-info">
                        <strong class="advi-name-similar">Katrine Chu</strong>
                        <span class="text-description">Tax Disputes</span>
                        <br>
                        <a href="#" class="user-txt-icon"><i class="fa-icon las la-city"></i></i> Agency</a>
                    </div>
                    </li>
                    <li>
                      <div class="sidebar-icon-item">
                        <img class="similar-user-img rounded-circle" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/2.png"></div>
                      <div class="sidebar-text-info"><strong class="advi-name-similar">Tory Jules</strong>
                        <span class="text-description">Estate Specialist</span>
                        <br>
                        <a href="#" class="user-txt-icon"><i class="fa-icon las la-user"></i> Freelancer</a>
                    </div>
                    </li>
                    <li>
                      <div class="sidebar-icon-item">
                        <img class="similar-user-img rounded-circle" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/avatar-1.jpg"></div>
                      <div class="sidebar-text-info"><strong class="advi-name-similar">Sarah James</strong>
                        <span class="text-description">Individual Tax Preparation </span>
                        <br>
                        <a href="#" class="user-txt-icon"><i class="fa-icon las la-city"></i> Agency</a>
                    </div>
                    </li>

                    <li>
                        <div class="sidebar-icon-item">
                          <img class="similar-user-img rounded-circle" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/3.png"></div>
                        <div class="sidebar-text-info"><strong class="advi-name-similar">Tobi Bankole</strong>
                          <span class="text-description">Transfer Pricing </span>
                          <br>
                          <a href="#" class="user-txt-icon"><i class="fa-icon las la-user"></i> Freelancer</a>
                      </div>
                      </li>
                  </ul>
                </div>
            </div>
              </div>

            </div>

            <!-- ############### NEW CARDS SECTION -->
            <div class="container-fluid mt-50">
          <div class="text-left">
            <span class="section-title b-activities b-activities-head mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Based on your activity</span>
          </div>
          <div class="b-activities mt-20">
            <div class="box-swiper style-nav-top">
              <div class="swiper-container swiper-group-3 swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper pb-10 pt-5" id="swiper-wrapper" aria-live="off" style="transform: translate3d(-1695px, 0px, 0px); transition-duration: 0ms;">
                  <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 309px; margin-right: 0px;">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid">
                        <div class="card-img-top">
                        <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt=""></div>
                      </div>
                      <div class="card-block-info">
                        <span class="advi-name"><a href="job-details.php">Ade Lateef  <i class="las la-user la-lx" style="color:#2C76DC !important;"></i></a></span>
                        <div class="user-cat mt-5">
                            <a class="user-cat" href="#">Tax Audits,</a> 
                            <a class="user-cat" href="#">Financial Planning,</a> 
                            <a class="user-cat" href="#">IRS Representation, </a> 
                            <a class="user-cat" href="#"> Sales Tax</a></div>

                        <p class="advi-desc mt-15">I am the perfect guy for the job, I am competent in Tax audits. Contact me.</p>
                        <div class="advi-repson-time mt-30">Response Rate: Replies within 1 hour</div>
                        <br>
                        <div class="divider-bottom"></div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><i class="favorit-heart fas fa-heart" style="color:#D92E10 !important;"></i></div>
                            <div class="col-lg-4 col-4 text-end">
                              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 309px; margin-right: 30px;">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid">
                        <div class="card-img-top"><img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/mary-audu.png" alt=""></div>
                      </div>
                      <div class="card-block-info">
                        <span class="advi-name"><a href="job-details.php">Mary Audu  <i class="las la-user la-lx" style="color:#2C76DC !important;"></i></a></span>
                        <div class="user-cat mt-5">
                            <a class="user-cat" href="#">Tax Audits,</a> 
                            <a class="user-cat" href="#">Financial Planning,</a> 
                            <a class="user-cat" href="#">IRS Representation, </a> 
                            <a class="user-cat" href="#"> Sales Tax</a></div>

                        <p class="advi-desc mt-15">I have worked with fifty clients on GTC. Send a message!</p>
                        <div class="advi-repson-time mt-30">Response Rate: Replies within 1 hour</div>
                        <br>
                        <div class="divider-bottom"></div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><i class="favorit-heart fa-regular fa fa-heart"></i></div>
                            <div class="col-lg-4 col-4 text-end">
                              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 309px; margin-right: 30px;">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid">
                        <div class="card-img-top"><img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/tony.png" alt=""></div>
                      </div>
                      <div class="card-block-info">
                        <span class="advi-name"><a href="job-details.php">Tony Kunle  <i class="las la-user la-lx" style="color:#2C76DC !important;"></i></a></span>
                        <div class="user-cat mt-5">
                            <a class="user-cat" href="#">Tax Audits,</a> 
                            <a class="user-cat" href="#">Financial Planning,</a> 
                            <a class="user-cat" href="#">IRS Representation, </a> 
                            <a class="user-cat" href="#"> Sales Tax</a></div>

                        <p class="advi-desc mt-15">I am ICAN certified in IRS representation. Send me your gigs and projects.</p>
                        
                        <div class="advi-repson-time mt-30">Response Rate: Replies within 1 hour</div>
                        <br>
                        <div class="divider-bottom"></div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><i class="favorit-heart fa-regular fa fa-heart"></i></div>
                            <div class="col-lg-4 col-4 text-end">
                              <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/Verified Expert Badge Transperent 2.png">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
              <div class="swiper-button-next swiper-button-next-4" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper"></div>
            </div>
          </div>
        </div>

        
    <!-- report advisor popup modal -->
    <div class="modal fade custom-modal" id="report">
        <div class="modal-dialog modal-lg modal-sm">
            <div class="modal-content">
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body pl-30 pr-30 pt-20 pb-80">
                <div class="text-center">
                  <div class="advi-report pb-30">Report Advisor </div>
                  <br>
                  <div class="bline"></div>
                </div>
                <span class="why-report">Why are you reporting this?</span> 
                <form class="login-register text-start mt-20 pb-30" action="#">
                   
                    <div class="form-group">
                        <ul class="list-checkbox">
                            <li>
                                <label class="cb-container">
                                  <input type="checkbox" checked="checked"><span class="select-reasons-report">The advisor is a scam</span><span class="checkmark"></span>
                                </label>
                              </li>
                          <li>
                            <label class="cb-container">
                              <input type="checkbox"><span class="select-reasons-report">The advisor is violent</span><span class="checkmark"></span>
                            </label>
                          </li>
                          <li>
                            <label class="cb-container">
                              <input type="checkbox"><span class="select-reasons-report">The advisor didn’t deliver</span><span class="checkmark"></span>
                            </label>
                          </li>
                          <li>
                            <label class="cb-container">
                              <input type="checkbox">
                              <span class="select-reasons-report">The advisor is not credible</span><span class="checkmark"></span>
                            </label>
                          </li>
                          <li>
                            <label class="cb-container">
                              <input type="checkbox"><span class="select-reasons-report">The advisor isn’t diligent</span><span class="checkmark"></span>
                            </label>
                          </li>
                          <li>
                            <label class="cb-container">
                              <input type="checkbox"><span class="select-reasons-report">Other</span><span class="checkmark"></span>
                            </label>
                          </li>
                        </ul>
                      </div>

                  <div class="form-group-rep">
                    <label class="form-label" for="name">Your Full Name</label>
                    <input class="form-control" id="name" type="text" required="" name="name" placeholder="Name">
                  </div>
                  <div class="form-group-rep">
                    <label class="form-label" for="email">Your Email address</label>
                    <input class="form-control" id="email" type="text" required="" name="email" placeholder="Email address">
                  </div>
                  <div class="form-group-rep">
                    <label class="form-label" for="des">Description</label>
                    <textarea class="form-control" rows="4" cols="5" name="message" placeholder="Type Reasons...." aria-label="" required="" data-msg=""></textarea>
                  </div>
                  <div class="form-group-rep">
                    <button class="btn btn-report" type="submit" name="report">Report Advisor</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </main>
        

 



<?php
include('footer.php');
?>