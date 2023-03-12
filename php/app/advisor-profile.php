<?php
global $config,$lang,$link;
if(!checkloggedin()){
  headerRedirect($link['LOGIN']);
}
else{

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
      $agencySize = $get_userdata["agencySize"];
      $yearFounded = $get_userdata["yearFounded"];
  
      //certficates
      $certificates = ORM::for_table($config['db']['pre'].'certifications')
      ->where('user_id',$get_userdata["id"])
      ->find_many();
  
      //licenses
      $licenses = ORM::for_table($config['db']['pre'].'licenses')
      ->where('user_id',$get_userdata["id"])
      ->find_many();
  
      //resume
      $resumes = ORM::for_table($config['db']['pre'].'resumes')
      ->where('user_id',$get_userdata["id"])
      ->find_many();
  
  
      $defaultCategories = ORM::for_table($config['db']['pre'].'catagory_main')
      ->order_by_asc('cat_order')
      ->find_many();
      // $similarAdvisors = ORM::for_table($config['db']['pre'].'user')
      // ->where_raw(
      //   "JSON_CONTAINS(category, :value1) AND JSON_CONTAINS(category, :value2)",
      //   array(
      //       'value1' => json_encode("Tax Audit"),
      //       'value2' => json_encode("Tax Advice"),
      //     )
      //   )
      // // -> where_not_equal("user_id", 5)
      // ->find_many();
  

      $savedAdvisors = "";

      
      HtmlTemplate::display('advisor-profile', array(
        "defaultCategories" => $defaultCategories,
        "name" => $name,
        "advisorType" => $advisorType,
        "profileImage" => $profileImage,
        "bio" => $bio,
        "categories" => $categories,
        "languages" => $languages,
        "location" => $city.", ".$country,
        "agencySize" => $agencySize,
        "yearFounded" => $yearFounded,
        "description" => $description,
        "certificates" => $certificates,
        "licenses" => $licenses,
        "resumes" => $resumes,
        "savedAdvisors" =>$savedAdvisors,
      ));
      exit;
  
    }
    else{
      header("Location: ".$config['site_url']."404");
    }
    
  }
  else{
    header("Location: ".$config['site_url']."category");
  }
}



function search_categories($config, $search_values, $exclude_user_id = null) {
  $query = ORM::for_table($config['db']['pre'].'users');
      // ->order_by_asc('cat_order');
  
  // Modify the query based on the number of search values
  switch (count($search_values)) {
      case 0:
          // No search values provided, return all categories
          break;
      case 1:
          // Search for a single value in the JSON data
          $query->where_raw(
              "JSON_CONTAINS(data, :value)",
              array('value' => json_encode($search_values[0]))
          );
          break;
      default:
          // Search for multiple values in the JSON data
          $json_contains = array();
          foreach ($search_values as $value) {
              $json_contains[] = "JSON_CONTAINS(data, :$value)";
              $query->bind(":$value", json_encode($value));
          }
          $query->where_raw(join(' AND ', $json_contains));
          break;
  }
  
  // Exclude the specified user ID from the query
  if (!is_null($exclude_user_id)) {
      $query->where_not_equal('user_id', $exclude_user_id);
  }
  
  // Execute the query and return the result
  return $query->find_many();
}


 ?>


