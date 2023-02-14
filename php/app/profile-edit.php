<?php
if (checkloggedin()) {
    update_lastactive();
    $ses_userdata = get_user_data($_SESSION['user']['username']);

    $author_image = $ses_userdata['image'];
    $author_lastactive = $ses_userdata['lastactive'];
    $username_error = $email_error = $password_error = $type_error = $avatar_error = '';
    $avatarName = null;
    $errors = 0;
    if (isset($_POST['submit'])) {

        // if (!empty($_POST["gender"])) {
        //     if (!in_array($_POST["gender"], array('Male', 'Female', 'Other'))) {
        //         $_POST["gender"] = 'Male';
        //     }
        // }

        // if (!empty($_POST["hourly_rate"])) {
        //     update_user_option($_SESSION['user']['id'],'hourly_rate', validate_input($_POST['hourly_rate']));
        // }

        // if($_SESSION['user']['user_type'] == "user") {
        //     if (!empty($_POST["skills"])) {
        //         update_user_option($_SESSION['user']['id'], 'skills', validate_input(implode(",", $_POST['skills'])));
        //     }
        // }

        if ($errors == 0) {
            if (!empty($_FILES['avatar'])) {
                $file = $_FILES['avatar'];
                // Valid formats
                $valid_formats = array("jpeg", "jpg", "png");
                $filename = $file['name'];
                $ext = getExtension($filename);
                $ext = strtolower($ext);
                if (!empty($filename)) {
                    //File extension check
                    if (in_array($ext, $valid_formats)) {
                        $main_path = ROOTPATH . "/storage/profile/";
                        $filename = uniqid($_SESSION['user']['username'] . '_') . '.' . $ext;
                        if (move_uploaded_file($file['tmp_name'], $main_path . $filename)) {
                            $avatarName = $filename;
                            resizeImage(150, $main_path . $filename, $main_path . $filename);
                            resizeImage(60, $main_path . 'small_' . $filename, $main_path . $filename);
                            if (file_exists($main_path . $author_image) && $author_image != 'default_user.png') {
                                unlink($main_path . $author_image);
                                unlink($main_path . 'small_' . $author_image);
                            }
                        } else {
                            $errors++;
                            $avatar_error = __("Error: Please try again.");
                            $avatar_error = "<span class='status-not-available'>" . $avatar_error . "</span>";
                        }
                    } else {
                        $errors++;
                        $avatar_error = __("Sorry, only JPG, JPEG and PNG files are allowed.");
                        $avatar_error = "<span class='status-not-available'>" . $avatar_error . "</span>";
                    }
                }
            }
        }

        if ($errors == 0) {

            // $salary_min = $salary_max = 0;
            // $dob = null;

            // if (!empty($_POST['dob'])) {
            //     $dob = date("Y-m-d", strtotime($_POST['dob']));
            // }

            // if (!empty($_POST['salary_min']) or !empty($_POST['salary_max'])) {
            //     $salary_min = is_numeric($_POST['salary_min']) ? $_POST['salary_min'] : 0;
            //     $salary_max = is_numeric($_POST['salary_max']) ? $_POST['salary_max'] : 0;
            // }

            // $city = '';
            // $country = '';
            // $state = '';
            // if(isset($_POST['city']) && $_POST['city'] != 0){
            //     $city = $_POST['city'];
            //     $citydata = get_cityDetail_by_id($city);
            //     $country = $citydata['country_code'];
            //     $state = $citydata['subadmin1_code'];
            // }

            // if (empty($_POST['city']) && empty($ses_userdata['country_code'])) {
            //     $location = getLocationInfoByIp();
            //     $country = $location['countryCode'];
            // }

            // if(!isset($_POST['category']) || $_POST['category'] == ''){
            //     $category = null;
            // }else{
            //     $category = $_POST['category'];
            // }
            // if(!isset($_POST['subcategory']) || $_POST['subcategory'] == ''){
            //     $subcategory = null;
            // }else{
            //     $subcategory = $_POST['subcategory'];
            // }

            //$gender = isset($_POST['gender']) ? $_POST['gender'] : 'Other';
            //$now = date("Y-m-d H:i:s");
            $countryInfo = ORM::for_table($config['db']['pre'].'countries')
            ->where('code',strtoupper($_POST['country']))
            ->find_one();

            $country = $countryInfo["name"];


            $user_update = ORM::for_table($config['db']['pre'] . 'user')->find_one($_SESSION['user']['id']);
            $user_update->set('name', $_POST['name']);
            $user_update->set('phone', $_POST['phone']);
            $user_update->set('address', validate_input($_POST["address"]));
            //$user_update->set('sex', validate_input($gender));
            $user_update->set('tagline', isset($_POST["tagline"]) ? validate_input(strlimiter($_POST["tagline"], 200)) : null);
            $user_update->set('description', validate_input($_POST["aboutme"],true));
            // $user_update->set('city_code', $city);
            $user_update->set('city', $_POST["city"]);
            $user_update->set('country_code', $_POST["country"]);
            $user_update->set('country', $country);
            $user_update->set('category', validate_input($category));
            $user_update->set('subcategory', validate_input($subcategory));
            //$user_update->set('dob', $dob);
            $user_update->set('updated_at', $now);
            if ($avatarName) {
                $user_update->set('image', $avatarName);
            }
            $user_update->save();

            $loggedin = get_user_data("", $_SESSION['user']['id']);
            create_user_session($loggedin['id'], $loggedin['username'], $loggedin['password'], $loggedin['user_type']);

            transfer($link['EDITPROFILE'], __("Profile Updated Successfully"), __("Profile Updated Successfully"));
            exit;
        }

    }
    else if (isset($_POST['submit_type'])) {
        $errors = 0;
        if (empty($_POST["user-type"])) {
            $errors++;
            $type_error = "<span class='status-not-available'> " . __("Please select a user type.") . "</span>";
        } else {
            if (!in_array($_POST["user-type"], array(1, 2))) {
                $errors++;
                $type_error = "<span class='status-not-available'> " . __("Invalid user type.") . "</span>";
            }
        }

        if ($errors == 0) {
           // $now = date("Y-m-d H:i:s");
            $user_update = ORM::for_table($config['db']['pre'] . 'user')->find_one($_SESSION['user']['id']);
            if($_POST["user-type"] == 1){
                $user_update->user_type = 'user';
            }else{
                $user_update->user_type = 'employer';
            }
            $user_update->set('updated_at', $now);
            $user_update->save();

            $loggedin = get_user_data("", $_SESSION['user']['id']);
            create_user_session($loggedin['id'], $loggedin['username'], $loggedin['password'], $loggedin['user_type']);

            transfer($link['EDITPROFILE'], __("Profile Updated Successfully"), __("Profile Updated Successfully"));
            exit;
        }
    }

    if(isset($_POST['submit2']))
    {
        // Check if this is an Password availability check from signup page using ajax
        if(!empty($_POST["password"]) && !empty($_POST["re_password"]))
        {
            if( (strlen($_POST['password']) < 5) OR (strlen($_POST['password']) > 21) )
            {
                $errors++;
                $password_error = __("Password must be between 4 and 20 characters long");
                $password_error = "<span class='status-not-available'> ".$password_error.".</span>";
            }elseif ($_POST["password"] != $_POST["re_password"]){
                $errors++;
                $password_error = __("The passwords you entered did not match");
                $password_error = "<span class='status-not-available'> ".$password_error.".</span>";
            }
        }

        if($errors == 0)
        {
            $queryVar = "";

            $person = ORM::for_table($config['db']['pre'].'user')->find_one($_SESSION['user']['id']);
            if(!empty($_POST["password"]))
            {
                $password = $_POST["password"];
                $pass_hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 13]);

                $person->set('password_hash', $pass_hash);
            }
            $person->save();

            //Updating Session Values
            $loggedin = get_user_data("",$_SESSION['user']['id']);
            create_user_session($loggedin['id'],$loggedin['username'],$loggedin['password']);

            transfer($link['EDITPROFILE'],__("Settings Saved Successfully"),__("Settings Saved"));
            exit;
        }
    }


    $author_lastactive = date('d M Y H:i', strtotime($ses_userdata['lastactive']));

    $country_code = !empty($ses_userdata['country_code']) ? $ses_userdata['country_code'] : check_user_country();
    $currency_info = set_user_currency($country_code);
    $currency_sign = $currency_info['html_entity'];



    // get SKILLS
    $rows = ORM::for_table($config['db']['pre'].'catagory_sub')
        ->order_by_asc('cat_order')
        ->find_many();
    $skills = array();
    $selected_skills = get_user_option($_SESSION['user']['id'],'skills');
    if(!empty($selected_skills)){
        $selected_skills = explode(',',$selected_skills);
    }else{
        $selected_skills = array();
    }
    foreach($rows as $row){
        $skills[$row['sub_cat_id']]['id'] = $row['sub_cat_id'];
        $skills[$row['sub_cat_id']]['title'] = $row['sub_cat_name'];
        if(in_array($row['sub_cat_id'], $selected_skills))
        {
            $skills[$row['sub_cat_id']]['selected'] = 'selected';
        }
        else
        {
            $skills[$row['sub_cat_id']]['selected'] = "";
        }
    }
    // Get membership details
    if (check_user_upgrades($_SESSION['user']['id'])) {
        $sub_info = get_user_membership_detail($_SESSION['user']['id']);
        $sub_title = $sub_info['sub_title'];
        $sub_image = $sub_info['sub_image'];
        $skills_limit = $sub_info['settings']['skills'];
    } else {
        $sub_title = '';
        $sub_image = '';
        $skills_limit = '';
    }

//     $countries = array();
// $count = 1;

// $row = ORM::for_table($config['db']['pre'].'countries')
//     ->where('active',1)
//     ->order_by_asc('asciiname')
//     ->find_many();
// $total = count($row);
// $divide = intval($total/4)+1;
// $col = "";
// foreach ($row as $info)
// {
//     $countrylang = getLangFromCountry($info['languages']);
//     $countries[$count]['tpl'] = "";
//     if($count == 1 or $count == $col){
//         $countries[$count]['tpl'] .= '<div class="flag-list col-3 "><ul>';
//         $checkEnd = $count+$divide-1;
//         $col = $count+$divide;
//     }
//     $countries[$count]['tpl'] .= '<li><span class="margin-right-5 flag flag-'.strtolower($info['code']).'"></span><a href="'.$config['site_url'].'home/'.$countrylang.'/'.$info['code'].'" data-id="'.$info['id'].'" data-name="'.$info['asciiname'].'">'.$info['asciiname'].'</a></li>';


//     if($count == $checkEnd or $count == $total){
//         $countries[$count]['tpl'] .= '</ul></div>';
//     }
//     $count++;
// }
    
    
    // Print Template
    HtmlTemplate::display('profile-edit', array(
        "trial"=> $_POST["city"],
        'authoruname' => ucfirst($ses_userdata['username']),
        'authorname' => ucfirst($ses_userdata['name']),
        'lastactive' => $author_lastactive,
        'balance' => $ses_userdata['balance'],
        'email' => $ses_userdata['email'],
        'phone' => $ses_userdata['phone'],
        'website' => $ses_userdata['website'],
        'facebook' => $ses_userdata['facebook'],
        'twitter' => $ses_userdata['twitter'],
        'instagram' => $ses_userdata['instagram'],
        'linkedin' => $ses_userdata['linkedin'],
        'youtube' => $ses_userdata['youtube'],
        'address' => stripcslashes(nl2br($ses_userdata['address'])),
        'gender' => $ses_userdata['sex'],
        'tagline' => $ses_userdata['tagline'],
        'aboutme' => $ses_userdata['description'],
        'cat' => $ses_userdata['category'],
        'subcat' => $ses_userdata['subcategory'],
        'salary_min' => $ses_userdata['salary_min'],
        'salary_max' => $ses_userdata['salary_max'],
        'dob' => $ses_userdata['dob'],
        'user_currency_sign' => $currency_sign,
        'avatar' => !empty($ses_userdata['image']) ? 'small_' . $ses_userdata['image'] : 'small_default_user.png',
        'user_country' => $ses_userdata['country'],
        'city' => $ses_userdata['city_code'],
        'cityname' => get_cityName_by_id($ses_userdata['city_code']),
        'username_error' => $username_error,
        'email_error' => $email_error,
        'type_error' => $type_error,
        'password_error' => $password_error,
        'avatar_error' => $avatar_error,
        'notify' => $ses_userdata['notify'],
        'hourly_rate' => get_user_option($_SESSION['user']['id'],'hourly_rate'),
        'skills' => $skills,
        'skills_limit' => $skills_limit,
        'sub_title' => $sub_title,
        'sub_image' => $sub_image,
        'countrylist' => $countries,
        'errors' => $errors,
        'categories' => get_maincategory($ses_userdata['category']),
        'lang_direction' => get_current_lang_direction()
    ));
    exit;
} else {
    headerRedirect($link['LOGIN']);
}
?>
