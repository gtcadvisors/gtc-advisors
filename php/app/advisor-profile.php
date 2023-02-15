<?php

$username = $_GET['username'];
if(isset($username)){
  $get_userdata = get_user_data($username);
  if(is_array($get_userdata)){
    $name = $get_userdata["name"];
    $advisorType = $get_userdata["user_type"];
    $profileImage = $get_userdata["image"]; 
    $bio = $get_userdata["bio"];
    $categories = json_decode($get_userdata["category"]);
    $languages = json_decode($get_userdata["languages"]);
    $city = $get_userdata["city"];
    $country = $get_userdata["country"];
    $description = $get_userdata["description"];

    //certficates
    $certificates = ORM::for_table($config['db']['pre'].'certifications')
    ->where('user_id',$get_userdata["id"])
    ->find_many();

    //licenses
    $licenses = ORM::for_table($config['db']['pre'].'licenses')
    ->where('user_id',$get_userdata["id"])
    ->find_many();

    //resume
    $resume = ORM::for_table($config['db']['pre'].'resumes')
    ->where('user_id',$get_userdata["id"])
    ->find_one();

    HtmlTemplate::display('advisor-profile', array(
      "name" => $name,
      "advisorType" => $advisorType,
      "profileImage" => $profileImage,
      "bio" => $bio,
      "categories" => $categories,
      "languages" => $languages,
      "location" => $city.", ".$country,
      "description" => $description,
      "certificates" => $certificates,
      "licenses" => $licenses,
      "resume" => $resume,

    ));
    exit;

  }
  else{
    error(__("User Not Found"), __LINE__, __FILE__, 1);
  }





}else{
  error(__("Page Not Found"), __LINE__, __FILE__, 1);
}

 
 ?>