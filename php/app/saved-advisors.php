<?php

use Stripe\Terminal\Location;

global $config,$link;
 
   if(isset($_GET['remove_fav']) && !empty($_GET['remove_fav'])){ 
      ORM::for_table($config['db']['pre'].'fav_users')
        ->where(array(
            'user_id' => $_SESSION['user']['id'],
            'fav_user_id' => $_GET['remove_fav'] 
        ))
        ->delete_many();

 
    headerRedirect($link['SAVED-ADVISORS']); 
 
   } 

  
if(checkloggedin()) { 

    update_lastactive();
    $items = array();
    $ses_userdata = get_user_data($_SESSION['user']['username']);

    if(!isset($_GET['page']))
        $_GET['page'] = 1;

    $limit = 5;
    $page = $_GET['page'];
    $offset = ($page-1)*$limit;

    $result = ORM::for_table($config['db']['pre'].'fav_users')
        ->select('fav_user_id')
        ->where('user_id', $_SESSION['user']['id'])
        ->limit($limit)->offset($offset)
        ->find_many();

    if (count($result) > 0) {
        foreach ($result as $fav) {
            $sql = "SELECT *
FROM `".$config['db']['pre']."user`
 WHERE user_type = 'freelancer' OR user_type = 'agency'   AND id = '".$fav['fav_user_id']."' ";
            $info = ORM::for_table($config['db']['pre'].'user')->raw_query($sql)->find_one();
            if (!empty($info)) {
                $items[$info['id']]['id'] = $info['id'];
                $items[$info['id']]['username'] = $info['username'];
                $items[$info['id']]['name'] = !empty($info['name'])?$info['name']:$info['username'];
                $items[$info['id']]['description'] = !empty($info['tagline'])?$info['tagline']:strlimiter(strip_tags($info['description']),200);
                $items[$info['id']]['sex'] = $info['sex'];
                $items[$info['id']]['image'] = !empty($info['image'])?$info['image']:'default_user.png';

                $items[$info['id']]['category'] = $items[$info['id']]['subcategory'] = null;
                if(!empty($info['category'])){ 
                    $get_cat = json_decode($info['category']); 
                    if(is_array($get_cat)){ 
                        $items[$info['id']]['category'] = $get_cat; 
                    }
                     
                }
                if(!empty($info['subcategory'])){
                    $get_cat = get_subcat_by_id($info['subcategory']);
                    $items[$info['id']]['subcategory'] = $get_cat['sub_cat_name'];
                }

                $country_code = $info['country_code'];
                $items[$info['id']]['salary_min'] = price_format($info['salary_min'], $country_code);
                $items[$info['id']]['salary_max'] = price_format($info['salary_max'], $country_code);

                $items[$info['id']]['city'] = $info['city'];
                if(!empty($info['city_code'])) {
                    $city_detail = get_cityDetail_by_id($info['city_code']);
                    $items[$info['id']]['city'] = $city_detail['asciiname'];
                    $items[$info['id']]['city'] .= ', '.get_stateName_by_id($city_detail['subadmin1_code']);
                   
                }

                $items[$info['id']]['favorite'] = check_user_favorite($info['id']);
                 $items[$info['id']]['rating'] = averageRating($info['id'],$info['user_type']);
                $items[$info['id']]['user_type'] = $info['user_type'];
            }
        }  
    }  

    
       
        

    $total_item = favorite_users_count($_SESSION['user']['id']);
    $pagging = pagenav($total_item,$_GET['page'],$limit,$link['SAVED-ADVISORS']);

    //Print Template
    HtmlTemplate::display('saved-advisors', array(
        'items' => $items,
        'totalitem' => $total_item,
        'pages' => $pagging, 
    ));
    exit;
}
else{
    error(__("Page Not Found"), __LINE__, __FILE__, 1);
    exit();
}

