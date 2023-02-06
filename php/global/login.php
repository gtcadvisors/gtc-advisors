<?php

if(checkloggedin())
{

    header("Location: ".$config['site_url']."myaccount");

    exit;
}


if(isset($_POST['forgot']))
{
    $_GET['forgot'] = $_POST['forgot'];
}
if(isset($_POST['r']))
{
    $_GET['r'] = $_POST['r'];
}
if(isset($_POST['e']))
{
    $_GET['e'] = $_POST['e'];
}
if(isset($_POST['t']))
{
    $_GET['t'] = $_POST['t'];
}

if(isset($_GET['ref']))
{
    $_GET['ref'] = htmlentities($_GET['ref']);
}
if(isset($_POST['ref']))
{
    $_POST['ref'] = htmlentities($_POST['ref']);
}

if(isset($_GET['r']))
{
    $_GET['r'] = htmlentities($_GET['r']);
}
if(isset($_POST['r']))
{
    $_POST['r'] = htmlentities($_POST['r']);
}

if(isset($_GET['t']))
{
    $_GET['t'] = htmlentities($_GET['t']);
}
if(isset($_POST['r']))
{
    $_POST['t'] = htmlentities($_POST['t']);
}

if(isset($_GET['e']))
{
    $_GET['e'] = htmlentities($_GET['e']);
}
if(isset($_POST['r']))
{
    $_POST['e'] = htmlentities($_POST['e']);
}

//Loop for list view
$freelancers = array();
if (!empty($result1)) {
    // output data of each row
    foreach ($result1 as $info) {
        // $freelancers[$info['id']]['id'] = $info['id'];
        // $freelancers[$info['id']]['username'] = $info['username'];
        // $freelancers[$info['id']]['name'] = !empty($info['name'])?$info['name']:$info['username'];
        // $freelancers[$info['id']]['description'] = !empty($info['tagline'])?$info['tagline']:strlimiter(strip_tags($info['description']),200);
        // $freelancers[$info['id']]['sex'] = $info['sex'];
        // $freelancers[$info['id']]['image'] = !empty($info['image'])?$info['image']:'default_user.png';
        // $freelancers[$info['id']]['country_code'] = strtolower($info['country_code']);

        $freelancers[$info['id']]['category'] = $freelancers[$info['id']]['subcategory'] = null;
        if(!empty($info['category'])){
            $get_cat = get_maincat_by_id($info['category']);
            $freelancers[$info['id']]['category'] = $get_cat['cat_name'];
        }
        if(!empty($info['subcategory'])){
            $get_cat = get_subcat_by_id($info['subcategory']);
            $freelancers[$info['id']]['subcategory'] = $get_cat['sub_cat_name'];
        }

        // $user_id = $info['id'];
        // $freelancers[$info['id']]['rating'] = averageRating($user_id,$info['user_type']);

        // $hourly_rate = price_format(get_user_option($user_id,'hourly_rate','0'));
        // $freelancers[$info['id']]['hourly_rate'] = ($hourly_rate)? $hourly_rate: '-';

        // $win_project = $rehired_count = 0;

        // $win_project = ORM::for_table($config['db']['pre'].'project')
        //     ->where('freelancer_id' , $user_id)
        //     ->count();
        // $freelancers[$info['id']]['win_project'] = $win_project;
        // $rehired = ORM::for_table($config['db']['pre'].'project')
        //     ->select_many_expr('user_id, COUNT(user_id) as hired')
        //     ->where('freelancer_id' , $user_id)
        //     ->group_by('user_id')
        //     ->having_raw('COUNT(user_id) > 1')
        //     ->find_many();

        // $i = 0;
        // foreach($rehired as $info1){
        //     $i+=$info1['hired']-1;
        // }
        // $rehired_count = $i;
        // $freelancers[$info['id']]['rehired'] = $rehired_count;
    }
}

//categories
$result = ORM::for_table($config['db']['pre'].'catagory_main')
        ->order_by_asc('cat_order')
        ->limit(7)
        ->find_many();
foreach ($result as $info) {
    if($config['lang_code'] != 'en' && $config['userlangsel'] == '1'){
        $maincat = get_category_translation("main",$info['cat_id']);
        $info['cat_name'] = $maincat['title'];
        $info['slug'] = $maincat['slug'];
    }
    $category[$info['cat_id']]['slug'] = $info['slug'];
    $category[$info['cat_id']]['name'] = $info['cat_name'];
    $category[$info['cat_id']]['main_id'] = $info['cat_id'];
    $category[$info['cat_id']]['link'] = $config['site_url'].'projects/'.$info['slug'];

    if(trim($config['login_page']) == "login_page"){
        $totalAdsMaincat = ORM::for_table($config['db']['pre'].'project')
            ->where(array(
                'category'=> $info['cat_id'],
                'status'=> 'open'
                ))
            ->count();
    }
    else{
        $totalAdsMaincat = get_items_count(false,"active",false,null,$info['cat_id'],true);
    }

    $category[$info['cat_id']]['main_ads_count'] = $totalAdsMaincat;
    $count = 1;

}


if(trim($config['login_page']) == "login"){
    $login_page = 'login';
}

//Print Template 'Login Page'
HtmlTemplate::display($login_page, array(
    'category' => $category
));


// Check if they are using a forgot password link
if(isset($_GET['forgot']))
{
    if(!isset($_GET['start']))
    {
        $check_forgot1 = ORM::for_table($config['db']['pre'].'user')
            ->select_many('id', 'forgot', 'username')
            ->where('email', $_GET['e'])
            ->find_one();

        if($_GET['forgot'] == $check_forgot1->forgot)
        {
            if($_GET['forgot'] == md5($_GET['t'].'_:_'.$_GET['r'].'_:_'.$_GET['e']))
            {
                // Check that the link hasn't timed out (30 minutes old)
                if($_GET['t'] > (time()-108000))
                {
                    $forgot_error = '';

                    if(isset($_POST['password']))
                    {
                        if( (strlen($_POST['password']) < 4) OR (strlen($_POST['password']) > 16) )
                        {
                            $forgot_error = __("Password must be between 4 and 20 characters long");
                        }
                        else
                        {
                            if($_POST['password'] == $_POST['password2'])
                            {
                                $password = $_POST["password"];
                                $pass_hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 13]);

                                $forgot_update = ORM::for_table($config['db']['pre'].'user')->find_one($check_forgot1->id);
                                $forgot_update->set('forgot', '');
                                $forgot_update->set('password_hash', $pass_hash);
                                $forgot_update->save();

                                message(__("Success"),__("Your password has been changed, please go to login."), 'login');
                                exit;
                            }
                            else
                            {
                                $forgot_error = __("The passwords you entered did not match");
                            }
                        }
                    }

                    //Print Template 'Forgot Page'
                    HtmlTemplate::display('global/forgot', array(
                        'field_forgot' => $_GET['forgot'],
                        'field_r' => $_GET['r'],
                        'field_e' => $_GET['e'],
                        'field_t' => $_GET['t'],
                        'username' => $check_forgot1->username,
                        'forgot_error' => $forgot_error
                    ));
                }
                else
                {
                    $login_error = __("Forgot Password code has expired");
                }
            }
            else
            {
                $login_error = __("Invalid Forgot Password code");
            }
        }
        else
        {
            $login_error = __("Invalid Forgot Password code");
        }
    }
    //Print Template
    HtmlTemplate::display('global/login', array(
        'error' => $login_error
    ));
    exit;
}

// Check if they are trying to retrieve their email
if(isset($_POST['email']))
{
    // Lookup the email address
    $email_info1 = check_account_exists($_POST['email']);

    // Check if the email address exists
    if($email_info1 != 0)
    {
        $email_userid = get_user_id_by_email($_POST['email']);
        // Send the email
        send_forgot_email($_POST['email'],$email_userid);

        $login_error = '';
        //Print Template
        HtmlTemplate::display('global/forgot_form', array(
            'success' => __("Please check your email account for the forgot password details"),
            'login_error' => $login_error
        ));
        exit;
    }
    else
    {
        $success = '';
        //Print Template
        HtmlTemplate::display('global/forgot_form', array(
            'success' => $success,
            'login_error' => __("Email address does not exist")
        ));
        exit;
    }
}

if(isset($_GET['fstart']))
{
    $success = '';
    $login_error = '';
    //Print Template
    HtmlTemplate::display('global/forgot_form', array(
        'success' => $success,
        'login_error' => $login_error
    ));
    exit;
}

if(!isset($_POST['submit'])) {
    if(!isset($_GET['ref'])) {

        $_GET['ref'] = 'myaccount';

    }
    $error = '';
    //Print Template
    HtmlTemplate::display('global/login', array(
        'ref' => $_GET['ref'],
        'error' => $error
    ));
}
else
{
    $loggedin = userlogin($_POST['username'], $_POST['password']);

    $ref = isset($_GET['ref'])? $_GET['ref'] : $link['MYACCOUNT'];

    if(!is_array($loggedin))
    {

        $error = __("Username or Password not found");
        //Print Template
        HtmlTemplate::display('global/login', array(
            'ref' => $ref,
            'category' => $category,
            'error' => $error
        ));
    }
    elseif($loggedin['status'] == 2)
    {
        $error = __("This account has been banned");
        //Print Template
        HtmlTemplate::display('global/login', array(
            'ref' => $ref,
            'error' => $error
        ));
    }
    else
    {
        create_user_session($loggedin['id'],$loggedin['username'],$loggedin['password'],$loggedin['user_type']);
        update_lastactive();

        header("Location: " . $ref);
    }
}
?>
