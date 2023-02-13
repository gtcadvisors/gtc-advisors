<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin="">
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page"> 
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/template/favicon.svg"> 
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/css/stylez.css" rel="stylesheet">
    <link href="<?php _esc(TEMPLATE_URL); ?>/assets/css/forms.css" rel="stylesheet">
    <title>GTC - Category Page</title>                 
  </head>  
  <body>
<?php  
include('header_2.php');
?>


    <!-- Mobile Version -->
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area adv-font">
          <div class="perfect-scroll">
            <a href="signup.html"><span class="signup-btn">Sign Up</span></a>
            <div class="mobile-menu-wrap pt-40">
              <a href=""><h6 class="adv-font mb-10 mt-35">Log In</h6></a>
              <!-- mobile menu start-->
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
            <div class="mobile-account">
              <ul class="mobile-menu font-heading">
                <li><a href="#">Become an Advisor</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Home</a></li>

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
  <main class="main bg-white mb-200">    
    <!-- MAIN PAGE VIEW/LAYOUT FOR THE PAGE -->
      <div class="container-fluid d-none d-lg-flex flex-row justify-content-evenly" id="cat_header">
        <a class="mt-3 mb-3" href="#">Tax Audits</a>
        <a class="mt-3 mb-3" href="#">International</a>
        <a class="mt-3 mb-3" href="#">Sales Tax</a>
        <a class="mt-3 mb-3" href="#">Financial Plannning</a>
        <a class="mt-3 mb-3" href="#">Corporations</a>
        <a class="mt-3 mb-3" href="#">IRS Represntation</a>
        <a class="mt-3 mb-3" href="#">Individual Tax Preparation</a>
        <i class="mt-3 mb-3">See All</i>
      </div>
        <div class="container-fluid d-flex  d-lg-none flex-row justify-content-evenly" id="cat_header">
          <a class="mt-3 mb-3" href="#">Tax Pricing</a>
          <a class="mt-3 mb-3" href="#">Personal Income Tax</a>
          <a class="mt-3 mb-3" href="#">Tax Audits</a>
          <a class="mt-3 mb-3" href="#">Sales Tax</a>
          
        </div>
      <!-- <hr> -->
      <div id="cat_header_under">
        <p class="mt-3 mb-3 ml-10"><i class=""></i> <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/home-2.png" alt="" width="17px" class="mr-5"><a href="<?php url("INDEX") ?>"><?php _e("Home") ?></a>&#10095; Area of Services &#10095; <a id="under_1"> 
          <?php
            if($maincategory != ""){
                echo _esc($maincategory,false);
            }
            if($subcategory != ""){
                echo _esc($subcategory,false);
            }
            if($maincategory == "" && $subcategory == ""){
                echo __("All Categories");
            }
            ?></a>
          <hr class="d-block d-md-none d-lg-none">
          <p class="mt-3 mb-3 ml-10" id="under_2 text-center text-md-start text-lg-start">Personal Income Tax is a type of income that is levied on an individual's wages, salaries, and other types of income. </p> 
        </p>
      </div>
          <form method="get" action="<?php url("CATEGORY") ?>" name="locationForm">
  <section class="section-box mt-30">
    <div class="container-fluid container-lg mx-lg-auto mx-md-auto mx-0">
      <div class="row flex-row-reverse flex-md-row-reverse m-0">
        <div class="d-flex d-md-none d-lg-none flex-row justify-content-between mb-20">
          <p class="ml-20"><span class="font-weight-600"><?php _esc($usersfound) ?> <?php _e("Advisors Available") ?></span></p>
          <button style="border-radius: 5px; outline: none; margin-right: 10px;" class="bg-primary text-white pl-15 pr-15 border-0 pt-5 pb-5"  id="fil_but">Filter</button> 
        </div> 
        <div class="col-lg-8 col-md-8 col-sm-12 col-12 float-right">
          <div class="content-page"> 
            
  <div class="row display-list m-0">
                <?php foreach ($items as $item){ ?>
            <div class="col-xl-12 col-12" style="width: max-content;">
                <div class="d-flex flex-column flex-lg-row flex-md-row" id="cat_list"> 
                <div class="image-box d-none d-md-block d-lg-block"><img src="<?php _esc($config['site_url'])?>storage/profile/<?php _esc($item['image'])?>" alt="<?php _esc($item['name'])?>" id="user"></div>
                <div class="dropdown d-block d-md-none d-lg-none"> 
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 float-right">
                    <li class="nav-item dropdown">
                    <i class="fa fa-heart text-danger fa-2x love mt-4"></i>
                    </li>
                </ul>
                    <div class="image-box"><img src="<?php _esc($config['site_url'])?>storage/profile/<?php _esc($item['image'])?>" alt="<?php _esc($item['name'])?>" id="user"></div>
                </div>
                <div class="d-flex flex-column flex-lg-column flex-md-column" id="cat_column">
                    <div class="d-flex flex-row justify-content-lg-between justify-content-md-between justify-content-center">
                        <p class="ml-lg-5 fs-5 mt-30 text-dark text-center text-lg-start" id="name"><?php _esc($item['name'])?> 
                        <?php if($usertype == 'employer') { ?>
                          <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/employer.png" alt="employer">
                                <?php } else {?> 
                                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/User.png" alt="user">
                                  <?php } ?>
                      </p>
                        <div class="dropdown d-none d-md-block d-lg-block"> 
                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                            <li class="nav-item dropdown"> 
                            <i class="fa fa-heart fa-2x love mt-4  <?php if($item['favorite'] == 'employer' || $item['favorite'] == 'user') { echo 'text-danger'; }?>" data-favuser-id="<?php _esc($item['id'])?>" data-userid="<?php _esc($user_id)?>" data-action="setFavUser"></i>
                            </li>
                        </ul>
                        
                        </div>
                    </div>   
                
                    <div class="container-fluid d-flex flex-column flex-lg-row flex-md-column justify-content-evenly justify-content-md-start" id="cat_header2">
                    <div class="d-flex flex-row justify-content-evenly justify-content-md-start">  
                        <?php
                        if($item['category'] != ""){
                            echo '<a class="ml-0" href="#">';
                            _esc($item['category']); 
                            echo "</a>";
                        }?>
                      </div> 
                   </div>
                    <p class="ml-5 text-dark text-lg-start text-md-start text-center">Response Rate: <span> replies in
                     <?php
                        if($item['rating'] != ""){
                            echo _esc($item['rating']).' hour(s)'; 
                        }else{
                          echo ' 24 hour';
                        }?> </span></p>
                    <p class="ml-5 text-dark text-lg-start text-md-start text-center">Location: <span ><?php _esc($item['city'])?> <?php _esc($item['country'])?></span></p>
                    <div class="d-flex flex-row justify-content-lg-start justify-content-center justify-content-md-start ml-20 mt-20 mb-20">
                    <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/verified.png" alt="acca-logo" id="b">
                    <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/acca-logo 1.png" alt="acca-logo" class="ml-40" id="b">
                    </div>
                </div>
                </div>
            </div>  
            <?php } ?>

            </div>
          </div> 
        </div> 
          <div class="col-lg-4 col-md-4 col-sm-12 d-lg-flex d-md-flex flex-column flex-md-column flex-lg-column" id="filter_column">
          <!-- <div class="sidebar-shadow none-shadow mb-30 container-fluid" id="filter_column"> -->
            <div class="" id="filter_column2">
              <div class="mb-30 mt-30 " id="filter_h5">
                <h5 id="filter_h5_under">Filter.....</h5>
              </div>
              
              <!-- <div class="filter-block mb-30">
                <div class="form-group select-style select-style-icon">
                  <select class="form-control form-icons select-active">
                    <option>New York, US</option>
                    <option>London</option>
                    <option>Paris</option>
                    <option>Berlin</option>
                  </select><i class="fi-rr-marker"></i>
                </div>
              </div> -->

              <div class="filter-block mb-20">
                <div class="d-flex flex-row justify-content-between" id="filter_next">
                  <p class="mb-20 ml-10">Industry</p> <i class="fa fi-rr-angle-down mb-20 mr-20" id="arrow_down" onclick="show_down('industry')"></i>
                </div>
              
              
                <div class="form-group" id="industry" style="display: none;">
                  <ul class="list-checkbox">
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" ><span class="text-small">Freelancer</span><span class="checkmark"></span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" ><span class="text-small">Agency</span><span class="checkmark"></span>
                    </li>
                    
                  </ul>
                  
                </div>

                <div class="d-flex flex-row justify-content-between" id="filter_next">
                  <p class="mb-20 mt-10 ml-10">Sort by</p> <i class="fa fi-rr-angle-down mb-20 mt-10 mr-20" id="arrow_down" onclick="show_down('sortby')"></i>
                </div>
              
              
                <div class="form-group" id="sortby" style="display: none;">
                  <ul class="list-checkbox">
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" ><span class="text-small">Nearest Location</span><span class="checkmark"></span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" ><span class="text-small ">verified Advisor</span><span class="checkmark"></span>
                    </li>
                    
                  </ul>
                  
                </div>

                <div class="d-flex flex-row justify-content-between" id="filter_next">
                  <p class="mb-20 mt-10 ml-10">Expertise</p> <i class="fa fi-rr-angle-down mb-20 mt-10 mr-20" id="arrow_down1" onclick="show_down('expertise')"></i>
                </div>
              
                
                <div class="form-group category-dropdown" style="display: none;" id="expertise">
                 
                  <ul class="list-checkbox">
                    <?php _esc($cat_dropdown) ?> 
                  </ul> 
                 
                </div>

                <div class="d-flex flex-row justify-content-between" id="filter_next">
                  <p class="mb-20 mt-10 ml-10">Country</p> <i class="fa fi-rr-angle-down mb-20 mt-10 mr-20" id="arrow_down" onclick="show_down('country')"></i>
                </div>
                <!-- THE DROPDOWN FOR THE SEARCH OF COUNTRY -->
                <div class="form-group mt-10" id="country" style="display: block;">
                  <select class="form-control" >
                  <option value="" selected id="search1" style="display: none;">Search</option>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antartica">Antarctica</option>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Bouvet Island">Bouvet Island</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Congo">Congo, the Democratic Republic of the</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                  <option value="Croatia">Croatia (Hrvatska)</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="East Timor">East Timor</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="France Metropolitan">France, Metropolitan</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern Territories">French Southern Territories</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                  <option value="Holy See">Holy See (Vatican City State)</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran">Iran (Islamic Republic of)</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                  <option value="Korea">Korea, Republic of</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Lao">Lao People's Democratic Republic</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macau">Macau</option>
                  <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia">Micronesia, Federated States of</option>
                  <option value="Moldova">Moldova, Republic of</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russia">Russian Federation</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                  <option value="Saint LUCIA">Saint LUCIA</option>
                  <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia (Slovak Republic)</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                  <option value="Span">Spain</option>
                  <option value="SriLanka">Sri Lanka</option>
                  <option value="St. Helena">St. Helena</option>
                  <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syrian Arab Republic</option>
                  <option value="Taiwan">Taiwan, Province of China</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania">Tanzania, United Republic of</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks and Caicos">Turks and Caicos Islands</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States">United States</option>
                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Viet Nam</option>
                  <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                  <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                  <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                  <option value="Western Sahara">Western Sahara</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Serbia">Serbia</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                  </select>  <i class="fi-rr-search" id="search_select"></i>
                </div> 
              </div>
              
              <input type="hidden" id="input-maincat" name="cat" value="<?php _esc($maincat) ?>">
              <button id="button_apply" class="bg-primary button ripple-effect d-flex justify-content-center mb-40 mt-40">Apply</button>
                      
            </div>     
              </div> 
          
            </div>      
        </div>
      </div>
    </div>
  </section> 
  </form>
</main>
   <!-- JAVASCRIPT LIBRARIES AND SCRIPT LINKING -->
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/waypoints.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/wow.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/magnific-popup.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/select2.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/isotope.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/scrollup.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/noUISlider.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/slider.js"></script>
    <script src="<?php _esc(TEMPLATE_URL); ?>/assets/js/main.js"></script>
  </body>
</html>