<?php
global $config,$lang,$link;
if(checkloggedin()){
  update_lastactive();

  $ses_userdata = get_user_data($_SESSION['user']['username']);
  

  if (!empty($_POST)){
    $user_update = ORM::for_table($config['db']['pre'] . 'user')->find_one($_SESSION['user']['id']);
    $user_update->set('user_type', "advisor");
    $user_update->set('name', $_POST["fullName"]);
    $user_update->set('username', $_POST["userName"]);
    $user_update->set('email', $_POST["email"]);
    $user_update->set('phone', $_POST["phoneNumber"]);
    $user_update->set('bio', $_POST["bio"]);
    $user_update->set('description', $_POST["description"]);
    $user_update->set('languages', json_encode($_POST["languages"]));
  
    $user_update->save();
  
   
    exit;
  } 
  
  //Print Template 'become an advisor form'
  HtmlTemplate::display("become-an-advisor-form", array(
    'email' => $ses_userdata["email"], 
    'data' => $ses_userdata["email"],  
  ));
 
  
}

else{
  headerRedirect($url("LOGIN"));
}




