<?php
global $config,$lang,$link;
if(!checkloggedin()){
  headerRedirect($link['LOGIN']);
}
else{
    $defaultCategories = ORM::for_table($config['db']['pre'].'catagory_main')
    ->order_by_asc('cat_order')
    ->find_many();


    
    HtmlTemplate::display('category', array(
        "defaultCategories" => $defaultCategories,

    ));
    exit;
  
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


