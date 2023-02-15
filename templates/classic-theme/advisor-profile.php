<?php
  overall_header("advisor profile")
  ?>
<div class="container-fluid d-none d-lg-flex flex-row justify-content-evenly border-bottom border-2 p-3">
        <div class="text-center">
          <div class="list-tabs">
            <ul class=" nav-tabs d-lg-flex flex-row justify-content-evenly" role="tablist">
              <li class="mt-3 mb-3"><a href="#" class="ps-3 pe-3"> Tax Audits</a></li>
              <li class="mt-3 mb-3"><a  href="#" class="ps-3 pe-3"> Sales Tax</a></li>
              <li class="mt-3 mb-3"><a  href="#" class="ps-3 pe-3"> International</a></li>
              <li class="mt-3 mb-3"><a href="#" class="ps-3 pe-3"> Financial Planning</a></li>
              <li class="mt-3 mb-3"><a  href="#" class="ps-3 pe-3"> Corporations</a></li>
              <li class="mt-3 mb-3"><a  href="#" class="ps-3 pe-3"> IRS Representation</a></li>
              <li class="mt-3 mb-3"><a  href="#" class="ps-3 pe-3"> Individual Tax Preparation</a></li> 
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
        
    <div class="container-fluid d-flex d-lg-none d-md-none flex-row border-top border-bottom border-1 header__categories p-3">
      <a href="" class="me-3 text-center category-pill text--black">Tax Pricing</a>
      <a href="" class="me-3 text-center category-pill text--black">IRS Representation</a>
      <a href="" class="me-3 text-center category-pill text--black">Tax Pricing</a>
      <a href="" class="me-3 text-center category-pill text--black">Tax Pricing</a>
      <a href="" class="me-3 text-center category-pill text--black">Tax Pricing</a>
      <a href="" class="me-3 text-center category-pill text--black">Tax Pricing</a>
      <a href="" class="me-3 text-center category-pill text--black">Tax Pricing</a>
      <a href="" class="me-3 text-center category-pill text--black">Tax Pricing</a>
      <a href="" class="me-3 text-center category-pill text--black">Tax Pricing</a>
    </div>


      <main class="main">
        <!-- First Part -->
        <section class="container d-flex flex-column">
          <div class="align-self-center mt-4 advisor__profile-info p-3">
            <img class="advisor__profile-img" src="<?php _esc($config['site_url']);?>storage/profile/<?php _esc($profileImage)?>" alt="advisor-profile-image" >
            <h2 class="text--black advisor__profile-name mt-3"><?php _esc($name) ?><img class="advisor__icon" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>"></h2>
            <p class="advisor__bio text--black mt-2"><?php _esc($bio) ?></p>
            <div class="d-flex flex-row flex-wrap justify-content-center">
              <?php foreach($categories as $category){?>
                <a class="me-1 mb-2 text-center category-pill text--black" href="#"><?php _esc($category)?></a>
              <?php }?>
            </div>
            <button class="advisor__invite-btn mt-2">Invite to Job</button>
            <div class="container mt-3">
              
              <div class="row mb-2">
                <div class="col-6 ps-4"><span class="profile__text--dark">Availability:</span></div>
                <div class="col-6"><span class="profile__text--light">Full-time (24hrs/wk)</span></div>
              </div>
              <div class="row mb-2">
                <div class="col-6 ps-4"><span class="profile__text--dark">Language:</span></div>
                <div class="col-6"><span class="profile__text--light"><?php _esc(ucwords(join("/ ", $languages)))?></span></div>
              </div>
              <div class="row mb-2">
                <div class="col-6 ps-4"><span class="profile__text--dark">Location:</span></div>
                <div class="col-6"><span class="profile__text--light"><?php _esc($location) ?></span></div>
              </div>
              <div class="row mb-2">
                <div class="col-6 ps-4"><span class="profile__text--dark">Response Rate:</span></div>
                <div class="col-6"><span class="profile__text--light">Replies within 1 hour</span></div>
              </div>
              <div class="row mb-2">
                <div class="col-6 ps-4"><a href="#" data-bs-toggle="modal" data-bs-target="#report" class="profile__report"><i class="ag-icon-flag fa-regular fa fa-flag"></i> Report Advisor</a></div>
              </div>

            </div>
          </div>
        </section>

       
        <!-- second part -->

        <section class="profile__tab--list d-flex flex-wrap container justify-content-center">
          <!-- Profile -->
          <input type="radio" name="profile-tab" id="ptab-1" class="tabs__radio" >
          <label for="ptab-1" class="tabs__label">Profile</label>
          <div class="tabs__content pt-4">
            <h3 class="profile__text--dark">ABOUT</h3>
            <p class="tabs__content__text mt-3"><?php _esc($description) ?></p>
            <div class="mt-4 <?php _esc($advisorType == "freelancer"? "d-none":"") ?> tabs__content_line pt-3 pb-3">
              <h3 class="profile__text--dark">ORGANIZATION SIZE</h3>
              <p class="mt-3 profile__text--dark profile__text--dark--normal">2- 20 Employees</p>
            </div>
            <div class="mt-3 <?php _esc($advisorType == "freelancer"? "d-none":"") ?>">
              <h3 class="profile__text--dark">YEAR FOUNDED</h3>
              <p class="mt-3 profile__text--dark profile__text--dark--normal">2018</p>
            </div>
          </div>
          
          <!-- Certification -->
          <input type="radio" name="profile-tab" id="ptab-2" class="tabs__radio" checked>
          <label for="ptab-2" class="tabs__label">Certification</label>
          <div class="tabs__content">
            <h3 class="profile__text--dark">CERTIFICATION</h3>
            <div class="container mt-3 d-flex flex-row flex-wrap justify-content-between tabs__img--container">
              <?php foreach($certificates as $certificate){ ?>
                <?php $ext = end(explode(".",$certificate["filename"])); ?>
                <div class="mb-4 d-flex flex-column">
                  <?php if($ext == "pdf" || $ext == "docx"){?>
                    <img class="tabs__img" alt="CertificateImage" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/certifications/Globa.png"> 
                  <?php }else{?>
                    <img class="tabs__img" alt="Certificate Image" src="<?php _esc($config['site_url']);?>storage/certifications/<?php _esc($certificate["filename"])?>">
                  <?php }?>
                  <a href="#" class="tabs__img--title mt-3"><i class="fas <?php _esc($ext=="pdf" || $ext == "doc"?"fa-file-pdf":"fa-image")?> me-2"></i><?php _esc($certificate["certificate_from"]." ".$certificate["certificate_name"].".".$ext) ?></a>
                </div>                        
              <?php } ?>   
            </div>
          </div>

          <!-- Licenses -->
          <input type="radio" name="profile-tab" id="ptab-3" class="tabs__radio">
          <label for="ptab-3" class="tabs__label">Licenses</label>
          <div class="tabs__content">
            <h3 class="profile__text--dark">LICENSES</h3>
            <div class="container mt-3 d-flex flex-row flex-wrap justify-content-between tabs__img--container">
              <?php foreach($licenses as $license){ ?>
                <?php $ext = end(explode(".",$license["filename"])); ?>
                <div class="mb-4 d-flex flex-column">
                  <?php if($ext == "pdf" || $ext == "docx"){?>
                    <img class="tabs__img" alt="License Image" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/certifications/Globa.png"> 
                  <?php }else{?>
                    <img class="tabs__img" alt="License Image" src="<?php _esc($config['site_url']);?>storage/licenses/<?php _esc($license["filename"])?>">
                  <?php }?>
                  <a href="#" class="tabs__img--title mt-3"><i class="fas <?php _esc($ext=="pdf" || $ext == "doc"?"fa-file-pdf":"fa-image")?> me-2"></i><?php _esc($license["license_from"]." ".$license["license_name"].".".$ext) ?></a>
                </div>                        
              <?php } ?>   
            </div>
          </div>
          
          <!-- Resume -->
          <input type="radio" name="profile-tab" id="ptab-4" class="tabs__radio">
          <label for="ptab-4" class="tabs__label">CV/Resume</label>
          <div class="tabs__content">
            <h3 class="profile__text--dark">RESUME</h3>
            <div class="container mt-3 d-flex flex-row flex-wrap justify-content-between tabs__img--container">
            <?php $ext = end(explode(".",$resume["filename"])); ?>
            <div class="mb-4 d-flex flex-column">
              <?php if($ext == "pdf" || $ext == "docx"){?>
                <img class="tabs__img" alt="Resume Image" src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/certifications/Globa.png"> 
              <?php }else{?>
                <img class="tabs__img" alt="Resume Image" src="<?php _esc($config['site_url']);?>storage/resumes/<?php _esc($resume["filename"])?>">
              <?php }?>
              <a href="#" class="tabs__img--title mt-3"><i class="fas <?php _esc($ext=="pdf" || $ext == "doc"?"fa-file-pdf":"fa-image")?> me-2"></i><?php _esc("Resume.".$ext) ?></a>
            </div>    
            </div>
          </div>
                  
        </section>

        <!-- third part -->
        <section class="similar-profiles-section container d-flex flex-wrap container justify-content-center">
          <div class="mb-3">
            <h3 class="profile__text--dark">Similar Profiles</h3>
          </div>
          <div class="border-top border-1 pt-2">
            <div class="similar-advisor__profile d-flex flex-row justify-content-start align-items-center mt-4">
                <img class="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png">
                <div class="d-flex flex-column ps-3">
                  <a class="profile__text--dark">Juan Rodrick</a>
                  <span class="similar-advisor__profile--expertise">Coporate Income Tax</span>
                  <span class="similar-advisor__profile--type d-flex align-items-center"><img class="me-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>">Freelancer</span>
                </div>
            </div>
        
            <div class="similar-advisor__profile d-flex flex-row justify-content-start align-items-center mt-4">
                <img class="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png">
                <div class="d-flex flex-column ps-3">
                  <a class="profile__text--dark">Juan Rodrick</a>
                  <span class="similar-advisor__profile--expertise">Coporate Income Tax</span>
                  <span class="similar-advisor__profile--type d-flex align-items-center"><img class="me-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>">Freelancer</span>
                </div>
            </div>
        
            <div class="similar-advisor__profile d-flex flex-row justify-content-start align-items-center mt-4">
                <img class="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png">
                <div class="d-flex flex-column ps-3">
                  <a class="profile__text--dark">Juan Rodrick</a>
                  <span class="similar-advisor__profile--expertise">Coporate Income Tax</span>
                  <span class="similar-advisor__profile--type d-flex align-items-center"><img class="me-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>">Freelancer</span>
                </div>
            </div>
        
            <div class="similar-advisor__profile d-flex flex-row justify-content-start align-items-center mt-4">
                <img class="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png">
                <div class="d-flex flex-column ps-3">
                  <a class="profile__text--dark">Juan Rodrick</a>
                  <span class="similar-advisor__profile--expertise">Coporate Income Tax</span>
                  <span class="similar-advisor__profile--type d-flex align-items-center"><img class="me-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>">Freelancer</span>
                </div>
            </div>
        
            <div class="similar-advisor__profile d-flex flex-row justify-content-start align-items-center mt-4">
                <img class="" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/advisors/1.png">
                <div class="d-flex flex-column ps-3">
                  <a class="profile__text--dark">Juan Rodrick</a>
                  <span class="similar-advisor__profile--expertise">Coporate Income Tax</span>
                  <span class="similar-advisor__profile--type d-flex align-items-center"><img class="me-1" src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>">Freelancer</span>
                </div>
            </div>
        
          </div>
        </section>  


                

            <!-- ############### NEW CARDS SECTION -->
            <section class="based-on-your-activity-section container d-flex flex-column align-items-center">
              <div class="d-flex flex-row justify-content-between align-items-center">
                <span class="fs-6 text--black">Based on your activity</span>
                <div class="text-center p-2 slick-arrow" >
                    <i class="fas fa-angle-right"></i>
                </div>
              </div>
              <div class="mt-4 pt-2">
                <div class="profile-card d-flex flex-column">
                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/activities/Ade-Lateef.png" alt="profile image">
                  <div class="ps-2">
                    <div class="d-flex align-items-center profile-card-title mt-2">
                      <h4 class="profile__text--dark profile__text--dark--normal me-2">Ade Lateef</h4>
                      <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/profile/<?php _esc($advisorType == "freelancer"?"freelancer-icon.png":"agency-icon.png") ?>" alt="">
                    </div>
                    <div>
                      <p>
                        
                      </p>
                    </div>

                  </div>
                </div>

              </div>
            </section>



            <div class="container-fluid mt-50">
              <div class="text-left">
                <span class="section-title b-activities b-activities-head mb-10 wow animate__ animate__fadeInUp animated fs-6" style="visibility: visible; animation-name: fadeInUp;">Based on your activity</span>
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
// include('footer.php');
overall_footer();
?>