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
                    <option value="1">English</alue=>
                    <option value="2">العربيّة</alue=>
                    <option value="3">Arabic</alue=>
                    <option value="3">Deutsch</alue=>
                    <option value="3">简体中文</alue=>
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
                           <a> <i class="fa fa-heart fa-2x love mt-4  <?php if($item['favorite'] == 'agency' || $item['favorite'] == 'freelancer') { echo 'text-danger'; }?>"   data-favuser-id="<?php _esc($item['id'])?>" data-userid="<?php _esc($user_id)?>" data-action="setFavUser" ></i></a>
                            </li>
                </ul>
                    <div class="image-box"><img src="<?php _esc($config['site_url'])?>storage/profile/<?php _esc($item['image'])?>" alt="<?php _esc($item['name'])?>" id="user"></div>
                </div>
                <div class="d-flex flex-column flex-lg-column flex-md-column" id="cat_column">
                    <div class="d-flex flex-row justify-content-lg-between justify-content-md-between justify-content-center">
                        <p class="ml-lg-5 fs-5 mt-30 text-dark text-center text-lg-start" id="name"><?php _esc($item['name'])?> 
                        <?php if( $item['user_type'] == 'agency') { ?>
                          <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/employer.png" alt="agency">
                                <?php } else {?> 
                                  <img src="<?php _esc(TEMPLATE_URL); ?>/assets/imgs/User.png" alt="user">
                                  <?php } ?>
                      </p>
                        <div class="dropdown d-none d-md-block d-lg-block"> 
                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                            <li class="nav-item dropdown"> 
                            <a href="<?php url("CATEGORY") ?>?setFav=<?php _esc($item['id'])?>"><i class="fa fa-heart fa-2x love mt-4  <?php if($item['favorite'] == 'agency' || $item['favorite'] == 'freelancer') { echo 'text-danger'; }?>"  data-favuser-id="<?php _esc($item['id'])?>" data-userid="<?php _esc($user_id)?>" data-action="setFavUser" ></i></a>
                            </li>
                        </ul>
                        
                        </div>
                    </div>   
                
                    <div class="container-fluid d-flex flex-column flex-lg-row flex-md-column justify-content-evenly justify-content-md-start" id="cat_header2">
                    <div class="d-flex flex-row   justify-content-evenly">  
                        <?php
                        $print_few = 0;
                        if($item['category'] != ""){
                          foreach($item['category'] as $item_category){
                          $num =  count($item['category']) - 3;
                         echo  '<a class="ml-0" href="#">';
                            _esc($item_category);
                         echo '</a>';

                          if (++$print_few > 1)
                            break;
                          }
                        }  
                        ?>
                      </div> 
                      <div class="d-flex flex-row  justify-content-evenly justify-content-md-start">
                      <?php
                        $print_few = 0;
                        if($item['category'] != ""){
                          
                          $num =  count($item['category']) - 3;
                          if(!empty($item['category'][2])){
                            echo  '<a class="ml-2" href="#">'.$item['category'][2].'</a>';
                            echo  '<a class="ml-2" href="#" id="cat_header2_a">+'.$num.'</a>';
                          }else{
                            echo  '<a class="ml-2" href="#" id="cat_header2_a">+0</a>';
                          }
                         

                          if (++$print_few > 1)
                            break;
                        }  
                        ?>
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
                        <input type="checkbox" name="freelancer" value="freelancer" ><span class="text-small">Freelancer</span><span class="checkmark"></span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" name="agency" value="agency" ><span class="text-small">Agency</span><span class="checkmark"></span>
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
                  <select class="form-control" name="coun">
                  <option value="" selected id="search1" style="display: none;">Search</alue=>
                  <option value="Afghanistan">Afghanistan</optioalue=>
                  <option value="Albania">Albania</optioalue=>
                  <option value="Algeria">Algeria</alue=>
                  <option value="American Samoa">American Samoa</alue=>
                  <option value="Andorra">Andorra</alue=>
                  <option value="Angola">Angola</alue=>
                  <option value="Anguilla">Anguilla</alue=>
                  <option value="Antartica">Antarctica</alue=>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</alue=>
                  <option value="Argentina">Argentina</alue=>
                  <option value="Armenia">Armenia</alue=>
                  <option value="Aruba">Aruba</alue=>
                  <option value="Australia">Australia</alue=>
                  <option value="Austria">Austria</alue=>
                  <option value="Azerbaijan">Azerbaijan</alue=>
                  <option value="Bahamas">Bahamas</alue=>
                  <option value="Bahrain">Bahrain</alue=>
                  <option value="Bangladesh">Bangladesh</alue=>
                  <option value="Barbados">Barbados</alue=>
                  <option value="Belarus">Belarus</alue=>
                  <option value="Belgium">Belgium</alue=>
                  <option value="Belize">Belize</alue=>
                  <option value="Benin">Benin</alue=>
                  <option value="Bermuda">Bermuda</alue=>
                  <option value="Bhutan">Bhutan</alue=>
                  <option value="Bolivia">Bolivia</alue=>
                  <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</alue=>
                  <option value="Botswana">Botswana</alue=>
                  <option value="Bouvet Island">Bouvet Island</alue=>
                  <option value="Brazil">Brazil</alue=>
                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</alue=>
                  <option value="Brunei Darussalam">Brunei Darussalam</alue=>
                  <option value="Bulgaria">Bulgaria</alue=>
                  <option value="Burkina Faso">Burkina Faso</alue=>
                  <option value="Burundi">Burundi</alue=>
                  <option value="Cambodia">Cambodia</alue=>
                  <option value="Cameroon">Cameroon</alue=>
                  <option value="Canada">Canada</alue=>
                  <option value="Cape Verde">Cape Verde</alue=>
                  <option value="Cayman Islands">Cayman Islands</alue=>
                  <option value="Central African Republic">Central African Republic</alue=>
                  <option value="Chad">Chad</alue=>
                  <option value="Chile">Chile</alue=>
                  <option value="China">China</alue=>
                  <option value="Christmas Island">Christmas Island</alue=>
                  <option value="Cocos Islands">Cocos (Keeling) Islands</alue=>
                  <option value="Colombia">Colombia</alue=>
                  <option value="Comoros">Comoros</alue=>
                  <option value="Congo">Congo</alue=>
                  <option value="Congo">Congo, the Democratic Republic of the</alue=>
                  <option value="Cook Islands">Cook Islands</alue=>
                  <option value="Costa Rica">Costa Rica</alue=>
                  <option value="Cota D'Ivoire">Cote d'Ivoire</alue=>
                  <option value="Croatia">Croatia (Hrvatska)</alue=>
                  <option value="Cuba">Cuba</alue=>
                  <option value="Cyprus">Cyprus</alue=>
                  <option value="Czech Republic">Czech Republic</alue=>
                  <option value="Denmark">Denmark</alue=>
                  <option value="Djibouti">Djibouti</alue=>
                  <option value="Dominica">Dominica</alue=>
                  <option value="Dominican Republic">Dominican Republic</alue=>
                  <option value="East Timor">East Timor</alue=>
                  <option value="Ecuador">Ecuador</alue=>
                  <option value="Egypt">Egypt</alue=>
                  <option value="El Salvador">El Salvador</alue=>
                  <option value="Equatorial Guinea">Equatorial Guinea</alue=>
                  <option value="Eritrea">Eritrea</alue=>
                  <option value="Estonia">Estonia</alue=>
                  <option value="Ethiopia">Ethiopia</alue=>
                  <option value="Falkland Islands">Falkland Islands (Malvinas)</alue=>
                  <option value="Faroe Islands">Faroe Islands</alue=>
                  <option value="Fiji">Fiji</alue=>
                  <option value="Finland">Finland</alue=>
                  <option value="France">France</alue=>
                  <option value="France Metropolitan">France, Metropolitan</alue=>
                  <option value="French Guiana">French Guiana</alue=>
                  <option value="French Polynesia">French Polynesia</alue=>
                  <option value="French Southern Territories">French Southern Territories</alue=>
                  <option value="Gabon">Gabon</alue=>
                  <option value="Gambia">Gambia</alue=>
                  <option value="Georgia">Georgia</alue=>
                  <option value="Germany">Germany</alue=>
                  <option value="Ghana">Ghana</alue=>
                  <option value="Gibraltar">Gibraltar</alue=>
                  <option value="Greece">Greece</alue=>
                  <option value="Greenland">Greenland</alue=>
                  <option value="Grenada">Grenada</alue=>
                  <option value="Guadeloupe">Guadeloupe</alue=>
                  <option value="Guam">Guam</alue=>
                  <option value="Guatemala">Guatemala</alue=>
                  <option value="Guinea">Guinea</alue=>
                  <option value="Guinea-Bissau">Guinea-Bissau</alue=>
                  <option value="Guyana">Guyana</alue=>
                  <option value="Haiti">Haiti</alue=>
                  <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</alue=>
                  <option value="Holy See">Holy See (Vatican City State)</alue=>
                  <option value="Honduras">Honduras</alue=>
                  <option value="Hong Kong">Hong Kong</alue=>
                  <option value="Hungary">Hungary</alue=>
                  <option value="Iceland">Iceland</alue=>
                  <option value="India">India</alue=>
                  <option value="Indonesia">Indonesia</alue=>
                  <option value="Iran">Iran (Islamic Republic of)</alue=>
                  <option value="Iraq">Iraq</alue=>
                  <option value="Ireland">Ireland</alue=>
                  <option value="Israel">Israel</alue=>
                  <option value="Italy">Italy</alue=>
                  <option value="Jamaica">Jamaica</alue=>
                  <option value="Japan">Japan</alue=>
                  <option value="Jordan">Jordan</alue=>
                  <option value="Kazakhstan">Kazakhstan</alue=>
                  <option value="Kenya">Kenya</alue=>
                  <option value="Kiribati">Kiribati</alue=>
                  <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</alue=>
                  <option value="Korea">Korea, Republic of</alue=>
                  <option value="Kuwait">Kuwait</alue=>
                  <option value="Kyrgyzstan">Kyrgyzstan</alue=>
                  <option value="Lao">Lao People's Democratic Republic</alue=>
                  <option value="Latvia">Latvia</alue=>
                  <option value="Lebanon">Lebanon</alue=>
                  <option value="Lesotho">Lesotho</alue=>
                  <option value="Liberia">Liberia</alue=>
                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</alue=>
                  <option value="Liechtenstein">Liechtenstein</alue=>
                  <option value="Lithuania">Lithuania</alue=>
                  <option value="Luxembourg">Luxembourg</alue=>
                  <option value="Macau">Macau</alue=>
                  <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</alue=>
                  <option value="Madagascar">Madagascar</alue=>
                  <option value="Malawi">Malawi</alue=>
                  <option value="Malaysia">Malaysia</alue=>
                  <option value="Maldives">Maldives</alue=>
                  <option value="Mali">Mali</alue=>
                  <option value="Malta">Malta</alue=>
                  <option value="Marshall Islands">Marshall Islands</alue=>
                  <option value="Martinique">Martinique</alue=>
                  <option value="Mauritania">Mauritania</alue=>
                  <option value="Mauritius">Mauritius</alue=>
                  <option value="Mayotte">Mayotte</alue=>
                  <option value="Mexico">Mexico</alue=>
                  <option value="Micronesia">Micronesia, Federated States of</alue=>
                  <option value="Moldova">Moldova, Republic of</alue=>
                  <option value="Monaco">Monaco</alue=>
                  <option value="Mongolia">Mongolia</alue=>
                  <option value="Montserrat">Montserrat</alue=>
                  <option value="Morocco">Morocco</alue=>
                  <option value="Mozambique">Mozambique</alue=>
                  <option value="Myanmar">Myanmar</alue=>
                  <option value="Namibia">Namibia</alue=>
                  <option value="Nauru">Nauru</alue=>
                  <option value="Nepal">Nepal</alue=>
                  <option value="Netherlands">Netherlands</alue=>
                  <option value="Netherlands Antilles">Netherlands Antilles</alue=>
                  <option value="New Caledonia">New Caledonia</alue=>
                  <option value="New Zealand">New Zealand</alue=>
                  <option value="Nicaragua">Nicaragua</alue=>
                  <option value="Niger">Niger</alue=>
                  <option value="Nigeria">Nigeria</alue=>
                  <option value="Niue">Niue</alue=>
                  <option value="Norfolk Island">Norfolk Island</alue=>
                  <option value="Northern Mariana Islands">Northern Mariana Islands</alue=>
                  <option value="Norway">Norway</alue=>
                  <option value="Oman">Oman</alue=>
                  <option value="Pakistan">Pakistan</alue=>
                  <option value="Palau">Palau</alue=>
                  <option value="Panama">Panama</alue=>
                  <option value="Papua New Guinea">Papua New Guinea</alue=>
                  <option value="Paraguay">Paraguay</alue=>
                  <option value="Peru">Peru</alue=>
                  <option value="Philippines">Philippines</alue=>
                  <option value="Pitcairn">Pitcairn</alue=>
                  <option value="Poland">Poland</alue=>
                  <option value="Portugal">Portugal</alue=>
                  <option value="Puerto Rico">Puerto Rico</alue=>
                  <option value="Qatar">Qatar</alue=>
                  <option value="Reunion">Reunion</alue=>
                  <option value="Romania">Romania</alue=>
                  <option value="Russia">Russian Federation</alue=>
                  <option value="Rwanda">Rwanda</alue=>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</alue=> 
                  <option value="Saint LUCIA">Saint LUCIA</alue=>
                  <option value="Saint Vincent">Saint Vincent and the Grenadines</alue=>
                  <option value="Samoa">Samoa</alue=>
                  <option value="San Marino">San Marino</alue=>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</alue=> 
                  <option value="Saudi Arabia">Saudi Arabia</alue=>
                  <option value="Senegal">Senegal</alue=>
                  <option value="Seychelles">Seychelles</alue=>
                  <option value="Sierra">Sierra Leone</alue=>
                  <option value="Singapore">Singapore</alue=>
                  <option value="Slovakia">Slovakia (Slovak Republic)</alue=>
                  <option value="Slovenia">Slovenia</alue=>
                  <option value="Solomon Islands">Solomon Islands</alue=>
                  <option value="Somalia">Somalia</alue=>
                  <option value="South Africa">South Africa</alue=>
                  <option value="South Georgia">South Georgia and the South Sandwich Islands</alue=>
                  <option value="Span">Spain</alue=>
                  <option value="SriLanka">Sri Lanka</alue=>
                  <option value="St. Helena">St. Helena</alue=>
                  <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</alue=>
                  <option value="Sudan">Sudan</alue=>
                  <option value="Suriname">Suriname</alue=>
                  <option value="Svalbard">Svalbard and Jan Mayen Islands</alue=>
                  <option value="Swaziland">Swaziland</alue=>
                  <option value="Sweden">Sweden</optioalue=>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syrian Arab Republic</optioalue=>
                  <option value="Taiwan">Taiwan, Province of China</optioalue=>
                  <option value="Tajikistan">Tajikistan</optioalue=>
                  <option value="Tanzania">Tanzania, United Republic of</optioalue=>
                  <option value="Thailand">Thailand</optioalue=>
                  <option value="Togo">Togo</optioalue=>
                  <option value="Tokelau">Tokelau</optioalue=>
                  <option value="Tonga">Tonga</optioalue=>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</optioalue=>
                  <option value="Tunisia">Tunisia</optioalue=>
                  <option value="Turkey">Turkey</optioalue=>
                  <option value="Turkmenistan">Turkmenistan</optioalue=>
                  <option value="Turks and Caicos">Turks and Caicos Islands</optioalue=>
                  <option value="Tuvalu">Tuvalu</optioalue=>
                  <option value="Uganda">Uganda</optioalue=>
                  <option value="Ukraine">Ukraine</optioalue=>
                  <option value="United Arab Emirates">United Arab Emirates</optioalue=>
                  <option value="United Kingdom">United Kingdom</optioalue=>
                  <option value="United States">United States</optioalue=>
                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</optioalue=>
                  <option value="Uruguay">Uruguay</optioalue=>
                  <option value="Uzbekistan">Uzbekistan</optioalue=>
                  <option value="Vanuatu">Vanuatu</optioalue=>
                  <option value="Venezuela">Venezuela</optioalue=>
                  <option value="Vietnam">Viet Nam</optioalue=>
                  <option value="Virgin Islands (British)">Virgin Islands (British)</optioalue=>
                  <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</optioalue=>
                  <option value="Wallis and Futana Islands">Wallis and Futuna Islands</optioalue=>
                  <option value="Western Sahara">Western Sahara</optioalue=>
                  <option value="Yemen">Yemen</optioalue=>
                  <option value="Serbia">Serbia</optioalue=>
                  <option value="Zambia">Zambia</optioalue=>
                  <option value="Zimbabwe">Zimbabwe</optioalue=>
                  </select>  <i class="fi-rr-search" id="search_select"></i>
                </div> 
              </div>
              
             <input type="hidden" id="input-maincat" name="cat" value = "<?php _esc($maincat) ?>">    <!-- value="" -->
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