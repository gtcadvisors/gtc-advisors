<?php
global $config,$lang,$link;
if(!checkloggedin()){
  headerRedirect($link['LOGIN']);
}

if(isset($_GET["delete-account"])){
  $ses_userdata = get_user_data($_SESSION['user']['username']);

  if($_GET["delete-account"] == "true"){
    $user = ORM::for_table($config['db']['pre'].'user')
    ->where('id', $ses_userdata["id"])
    ->find_one();

    if ($user) {
      $user->delete();
      signOut();
      exit;

    } else {
      $error = "User record not found.";
    }
    
    
  } 
}


HtmlTemplate::display("delete-account", array(
  "error" => $error,
    
));



function signOut(){
  // Unset all session values
  $_SESSION = array();

  // get session parameters
  $params = session_get_cookie_params();

  // Delete the actual cookie.
  setcookie(session_name(),
      '', time() - 42000,
      $params["path"],
      $params["domain"],
      $params["secure"],
      $params["httponly"]);

  // Remove access token from session
  unset($_SESSION['facebook_access_token']);
  //Unset token and user data from session
  unset($_SESSION['token']);

  unset($_SESSION['user']);
  unset($_SESSION['chatHistory']);
  unset($_SESSION['openChatBoxes']);
  // will delete just the name data
  session_destroy();
  // Destroy session will delete ALL data associated with that user.


  echo "<script>window.location='signup'</script>";
  }


?>