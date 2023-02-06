<?php
overall_header(__("Profile Edit"));
?>
<style>
textarea.form-control {
    min-height: calc(8.5em + 0.75rem + 2px) !important;
    width: 100%;
}

btn-update-pic[type="file"]{
    padding:12px 10px;
    width: 20% !important;
}
input[type="text"]:disabled {
  background: #EEF5FC;
 color:#FC4438;

}

.form-group select, input {
    background: #fff;
    border: 1px solid #E0E6F6;
    height: 56px;
    box-shadow: none;
    padding-left: 20px;
    font-size: 16px;
    width: 100% !important;
}
.form-group select {
    background: #fff;
    borderContact GitHub
: 1px solid #E0E6F6;
    height: 56px !important;
    box-shadow: none;
    padding-left: 20px;
    font-size: 16px;
    width: 100% !important;
}
.form-field-bg, input select, textarea {
    background: #EEF5FC !important;
}

@media only screen and (max-width:480px)
{
  .city-search {
    margin-left: 371px !important;
    margin-top: 18px;
}

  .btn-detect-country{
    padding: 10px 20px;
    height: 56px;
    background: #EEF5FC;
    border-radius: 0px 4px 4px 0px;
    margin-left: 356px;
    margin-top: -103px;
  }
}
@media only screen and (max-width:480px)
{
  .city-search {
  margin-left: 291px !important;
  margin-top: 20px;

}
.btn-detect-country{
  padding: 10px 20px;
  height: 56px !important;
  background: #EEF5FC;
  border-radius: 0px 4px 4px 0px;
  margin-left: 270px ;
  margin-top: -101px;
}
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #fff transparent transparent transparent !important;  
    border-style: solid #fff !important;
    border-width: 0px 0px 0 0px !important;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0;
}
.form-control, .custom-select {
    font-size: 16px;
}
.select2-container--default .select2-selection--single {
    border: 1px solid #ced4da;
    background: #EEF5FC !important;
    border-radius: 0.25rem;
    padding: 13px 16px;
    height: 58.5px !important;
    font-size: 13px;
}

.mult-select-tag .body{
    background: #EEF5FC !important;
    border-radius: 4px !important;
    width: 100% !important;
    min-height: 56px !important;
    padding: 5px 20px !important;
    color: #495C77 !important;
}

.mult-select-tag .item-container{
    border-radius: 8px !important;
    padding: 6px 8px !important;
    background: #FFFFFF !important;
    width: 87px !important;
    height: 36px !important;
    border: none !important;
}

.mult-select-tag .item-close-svg{
    color: #495C77;
    background: #EEF5FC;
    border-radius: 50%;
    padding: 1px;
}

.mult-select-tag .drawer{
    width: 100% !important;
    position: relative !important;
}
</style>

  
    <div class="bdrd-top"></div>
    <main class="main mt-50">
      <section class="section-box-2">
        <div class="container">
          <div class="box-company-profile">
            <div class="icon-container">
                <img class="rounded-circle img-fluid" src="<?php _esc($config['site_url']);?>storage/profile/<?php _esc($userpic)?>" alt="<?php _esc($username);?>" style="max-width:45px;" /><div class="status-circle"></div></div>
            <div class="row mt--20">
              <div class="col-lg-8 col-md-12">
                <h5 class="edit-profile-title f-18"><?php _esc($authorname)?> / Edit Profile </h5>
                <p class="edit-profile-subtitle mt-0 font-md color-text-paragraph-2 mb-15">Set up your Global Tax Complaince presence and hiring needs</p>
              </div>
            </div>
          </div>
          <div class=" pt-10 pb-10"></div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
              
                <div class="box-nav-tabs nav-tavs-profile mb-5">

                  <select name="" id="profileOption" class="d-xl-none d-xxl-none d-lg-none d-md-none  mobile-select-option" onclick="select()">
                    <option class="option-select mobile-select-text" value="tab-my-profile" id="#tab-my-profile">Edit Profile</option>
                    <option class="option-select mobile-select-text" value="password" id="#password">Password</option>
                    <option class="option-select mobile-select-text" value="notifications" id="#notifications">Email Notifications</option>
                    <option class="option-select mobile-select-text" value="delete-account" id="delete-account">Delete Account</option>
                  </select>
                  <div class="d-xl-none">
                  <br /> <br>
                </div>

                  <ul class="nav d-none d-sm-block" role="tablist">
                    <li><a class="btn mb-20 active" href="#tab-my-profile" data-bs-toggle="tab" role="tab" aria-controls="tab-my-profile" aria-selected="true">Edit Profile</a></li>
                    <li><a class="btn profile-nav mb-20" href="#password" data-bs-toggle="tab" role="tab" aria-controls="tab-my-jobs" aria-selected="false">Password</a></li>
                    <li><a class="btn profile-nav mb-20" href="#notifications" data-bs-toggle="tab" role="tab" aria-controls="notifications" aria-selected="false">Email Notifications</a></li>
                  </ul>
                  <div class="border-bottom-pro d-none d-sm-block pt-10 pb-10"></div>
                  <div class="mt-15 mb-20 d-none d-sm-block">
                    <a class="user-delete-acct-btn" href="delete-account.php">Delete Account</a></div>
                </div>
              </div>

            <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
              <div class="content-single">
                <div class="tab-content">
                <div class="tab-pane show active" id="tab-my-profile" role="tabpanel" aria-labelledby="tab-my-profile">
                <form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="mt-35 mb-40 box-info-profie">
                    <div class="icon-container-big-img">
                        <img class="rounded-circle img-fluid mt-18" src="<?php _esc($config['site_url']);?>storage/profile/<?php _esc($userpic)?>" alt="<?php _esc($username);?>" style="max-width:90px;" />
                        <div class="status-circle-big-img"></div></div>
                        <label for="avatar" class="mt--20 mr--20 btn btn-update-pic">
                            <?php _e("Upload new picture") ?></label>
                        <input type="file" accept="images/*" id="avatar" name="avatar" style="display:none">
                            <a class="btn btn-delete">Delete</a>
                    </div>

                    <div class="row mr--20">
                        <div class="col-lg-7 col-md-12">
                        <div class="form-group">
                    <span id="email-availability-status" style="color:red !important;">
                        <?php if($avatar_error != ""){ _esc($avatar_error) ; }?>
                        </span>
                        </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                          <div class="form-group">
                            <label class="form-edit font-sm mb-10">Name <span class="text-danger">*</span></label>
                            <input class="mb-15 form-field-bg form-control" type="text" name="name" value="<?php _esc($authorname)?>">
                            <span class="pt-20 form-sub-text">We’re big on real names around here, so people know who’s who.</span>
                          </div>
      
                          <div class="form-group">
                              <label class="form-edit font-sm mb-10" for="Username">Username</label>
                              <input class="mb-15 form-field-bg form-control" type="text" name="username" value="<?php _esc($username)?>">
                              <span class="pt-20 form-sub-text">Your Global Tax Complaince URL: <?php _esc($config['site_url']);?>profile/<?php _esc($username);?></span>
                          </div>
      
                          <div class="form-group">
                            <label class="form-edit font-sm mb-10">Email</label>
                            <input class="mb-15 form-control" type="text" id="email" name="email" value="<?php _esc($email)?>" onBlur="checkAvailabilityEmail()" disabled>
                            <span id="email-availability-status"><?php if($email_error != ""){ _esc($email_error) ; }?></span>
                          </div>

                          <div class="form-group" id="coun">
                            <label class="form-edit font-sm color-text-mutted mb-10">Country</label>
                        
                            <input class="mb-15 form-field-bg-2 form-control" type="text" value="<?php
$ip = $_REQUEST['REMOTE_ADDR']; $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') { echo ''.$query['country'].', '.$query['city'].''; } else {
  echo 'Unable to get location'; } ?>" readonly>
                            <button class="btn btn-detect-country">Detect</button>
                          </div>
                          
                          <div class="form-group">
                              <label class="form-edit font-sm color-text-mutted mb-10">Time Zone</label>
                              <select name="price" class="ml-2- mb-15 form-field-bg form-control select">
                              <option value="(GMT +01:00) Africa/Lagos">(GMT +01:00) Africa/Lagos</option>
                              <option value="(GMT +01:00) Europe/London ">(GMT +01:00) Europe/London </option>
                              <option value="(GMT +01:00) Europe/Berlin">(GMT +01:00) Europe/Berlin</option>
                              <option value="(GMT +01:00) Africa/Casablanca">(GMT +01:00) Africa/Casablanca</option>
                              <option value="(GMT +02:00) Africa/Windhoek">(GMT +02:00) Africa/Windhoek</option>
                              </select>
                              </div>
                              
      
                              <div class="form-group">
                              <label class="form-edit font-sm color-text-mutted mb-10"><?php _e("City") ?></label>
                              <select id="city" name="city" data-size="7" title="<?php _e("Select") ?> <?php _e("City") ?>" class="ml-2- mb-15 form-field-bg form-control select">
                              <option value="0" selected="selected"><?php _e("Select") ?> <?php _e("City") ?></option>
                              <?php if($city != '')
                                    echo '<option value="'._esc($city,false).'" selected="selected">'._esc($cityname,false).'</option>';
                                     ?>
                                     <i class="city-search fi-rr-search"></i>
                              </select>
                              </div>
      
                          <div class="form-group">
                            <label class="form-edit font-sm color-text-mutted mb-10">Bio</label>
                            <textarea class="col-md-12 mb-15 form-field-bg form-control" rows="4" cols="5" id="pageContent" name="aboutme" aria-label="" required="" data-msg=""><?php _esc($aboutme)?></textarea>
                            <span class="pt-20 form-sub-text">Brief description for your profile</span>
                          </div>

                        <div class="form-group">
                              <label class="form-edit font-sm color-text-mutted mb-10">Languages</label>
                              <select id="languages" class="ml-2- mb-15 form-field-bg form-control select" multiple name="languages[]">
									<option value="arabic">Arabic</option>
									<option value="english">English</option>
									<option value="bengali">Bengali</option>
									<option value="french">French</option>
									<option value="spanish">Spanish</option>
								</select>
                              <!-- <input class="mb-15 form-field-bg form-control" type="text" value="" name="" placeholder="Fluent Languages"> -->
                            </div>

                          <div class="box-button mt-15">
                            <button type="submit" name="submit" class="btn btn-primary btn-md d-flex justify-content justify-content-end">Save Profile</button>
                          </div>
                          </div>
                        </div>
                  </div>
                </form>
                  

                  <div class="tab-pane" id="password" role="tabpanel" aria-labelledby="password">
                  <form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="row mr--20">
                        <div class="col-lg-7 col-md-12">
                          <div class="form-group">
                            <label class="form-edit font-sm color-text-mutted mb-10">Old Password <span class="text-danger">*</span></label>
                            <input class="mb-15 form-field-bg form-control" type="password" name="password" value="" placeholder="Old Password">
                          </div>
      
                          <div class="form-group">
                              <label class="form-edit font-sm color-text-utted mb-10" for="Password">New Password</label>
                              <input class="mb-15 form-field-bg form-control" type="text" value="" placeholder="New Password">
                              <span class="pt-20 form-sub-text">8 characters or longer. Combine upper and lowercase letters and numbers</span>
                          </div>
                          <div class="box-button mt-15">
                            <button class="btn float-lg-left btn-save-profile"><?php _e("Save Changes") ?></button>
                          </div>
                         </div>
                         </div>
                         </form>
                         </div>

                  <!-- Notification settings Tab -->
                  <div class="tab-pane" id="notifications" role="tabpanel" aria-labelledby="notifications">
                    <h6 class="mt-0 color-brand-1 mb-50">Alerts & Notifications</h6>
                    <div class="bottom-border"></div>
                    <br>
                    
                <form class="login-register text-start mt-20 pb-30" action="#">
                    <span class="notifications-setting">Send me:</span> 
                    <div class="form-group">
                        <ul class="list-checkbox">
                            <li>
                                <label class="cb-container">
                                  <input type="checkbox"><span class="notifications-alert-settings alert-settings">Global Tax Compliance Communication</span><span class="btn-checkbox"></span>
                                </label>
                                <span class="mr-2 mt--20 notifications-alert-settings">Get Global Tax Complaince news, announcements, and product updates</span>
                              </li>
                          </ul>
                    </div>
                    <br />
                    <div class="bottom-border"></div>
                    <br />
                    <div class="row">
                        <div class="col-lg-7 col-7"><span class="notifications-activities">Acccount Activity</span></div>
                        <div class="col-lg-2 col-2">
                            <ul class="list-checkbox">
                                <li>
                                    <label class="cb-container">
                                      <input type="checkbox" name="checkAll" id="checkedAll"><span class="notifications-check-all select-btn">Select All</span><span class="d-none btn-checkbox"></span>
                                    </label>
                                  </li>
                              </ul>
                              <div class="bottom-border-3"></div>
                        </div>
                      </div>
                      <br>
                    <div class="form-group">
                        <span class="email-me-title">Email me when:</span>
                        <ul class="list-checkbox">
                            <li>
                                <label class="cb-container">
                                  <input type="checkbox" name="checkAll" class="checkSingle"><span class="notifications-alert-settings alert-settings">when someone likes my profile</span><span class="btn-checkbox"></span>
                                </label>
                                <div class="bottom-border-2"></div>
                              </li>
                          <li>
                            <label class="cb-container">
                              <input type="checkbox" name="checkAll" class="checkSingle"><span class="notifications-alert-settings alert-settings">when someone mentions me</span><span class="btn-checkbox"></span>
                            </label>
                            <div class="bottom-border-2"></div>
                          </li>
                          <li>
                            <label class="cb-container">
                              <input type="checkbox" name="checkAll" class="checkSingle"><span class="notifications-alert-settings alert-settings">when someone sends a message</span><span class="btn-checkbox"></span>
                            </label>
                            <div class="bottom-border-2"></div>
                          </li>
                        </ul>
                      </div>
                      <div class="form-group-rep">
                        <button class="btn email-btn" type="submit" name="notifications">Update Email notifications</button>
                      </div>
             </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script>
            $(document).ready(function() {
                $("#checkedAll").change(function(){
                    if(this.checked){
                        $(".checkSingle").each(function(){
                            this.checked=true;
                        })
                    }else{
                        $(".checkSingle").each(function(){
                            this.checked=false;
                        })
                    }
                });
                $(".checkSingle").click(function () {
                    if ($(this).is(":checked")){
                        var isAllChecked = 0;
                $(".checkSingle").each(function(){
                    if(!this.checked)
                    isAllChecked = 1;
                    })
            if(isAllChecked == 0){$ ("#checkedAll").prop("checked, true"); }
            }else{
            $("#checkedAll").prop("checked", false);
            }
        });
    });
          </script>
          <script>  
          function select(){
          var a = document.getElementById('profileOption');
          var b = document.getElementById('tab-my-profile');
          var c = document.getElementById('password');
          var d = document.getElementById('notifications');

          if(window.screen.width <= 575){
            if(a.value == "tab-my-profile"){
              b.style.display = "block";
              c.style.display = "none";
              d.style.display = "none";
              
            }
            if(a.value == "password"){
              c.style.display = "block";
              b.style.display = "none";
              d.style.display = "none";
            }
            if(a.value == "notifications"){
              d.style.display = "block";
              b.style.display = "none";
              c.style.display = "none";
            }
            if(a.value == "delete-account"){
              window.location.assign();
            }
          } 
          }


    function validateForm(formSectionId){
    const languageSelect = $(`#${formSectionId} #languages`)
    let validate = true

    // validate select
    if(languageSelect.length > 0){
        if(languageSelect[0].value === ""){
            console.log("yes")
            const container = $(".mult-select-tag .body");
            if(container.hasClass("required") === false){
                container.addClass("required")
                container.after("<span class='error'>Required</span>")
            }
            validate = false
            return validate
        }
        else{
            $(".error").remove()
            $(".mult-select-tag .body").removeClass("required")
        }
    }
}


          </script>
         <!-- <link href="<?php _esc(TEMPLATE_URL);?>/assets/css/plugins/select2.min.css" rel="stylesheet"/> -->
            <script src="<?php _esc(TEMPLATE_URL);?>/assets/js/plugins/select2.min.js"></script>
            <script>
                $(document).ready(function () {
                    $("#header-container").removeClass('transparent-header').addClass('dashboard-header not-sticky');

                });

                jQuery(function($) {
                    $(".range-slider-single").slider();
                    $("#category").on('change', function(){
                        var catid = $(this).val();
                        var selectid = $(this).data('subcat');
                        var data = { action: "getsubcatbyid", catid: catid, selectid : selectid };
                        $.ajax({
                            type: "POST",
                            url: ajaxurl,
                            data: data,
                            success: function(result){
                                $("#sub_category").html(result).selectpicker('refresh');
                            }
                        });
                    });
                    $("#category").trigger('change');
                });

                /* Get and Bind cities */
                $('#city').select2({
                    ajax: {
                        url: ajaxurl + '?action=searchCityFromCountry',
                        dataType: 'json',
                        delay: 50,
                        data: function (params) {
                            return {
                                q: params.term, /* search term */
                                page: params.page
                            };
                        },
                        processResults: function (data, params) {
                            /*
                             // parse the results into the format expected by Select2
                             // since we are using custom formatting functions we do not need to
                             // alter the remote JSON data, except to indicate that infinite
                             // scrolling can be used
                             */
                            params.page = params.page || 1;

                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 10) < data.totalEntries
                                }
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function (markup) { return markup; }, /* let our custom formatter work */
                    minimumInputLength: 2,
                    templateResult: function (data) {
                        return data.text;
                    },
                    templateSelection: function (data, container) {
                        return data.text;
                    }
                });

            </script>
            <link href="<?php _esc(TEMPLATE_URL);?>/css/bootstrap-datepicker3.min.css" rel="stylesheet"/>
            <script src="<?php _esc(TEMPLATE_URL);?>/js/bootstrap-datepicker.min.js"></script>
<?php
overall_footer(__(""));
?>
        