<?php
use Stripe\Terminal\Location;

if(!$config['job_seeker_enable']){
    error(__("Page Not Found"), __LINE__, __FILE__, 1);
}

if(!isset($_GET['page']))
    $page_number = 1;
else{
    $page_number = $_GET['page'];
}

$limit = 10;
$keywords = isset($_GET['keywords']) ? str_replace("-"," ",$_GET['keywords']) : "";


$category = $subcat = $gender = $range1 = $range2 = $age_range1 = $age_range2 = "";

if(isset($_GET['subcat']) && !empty($_GET['subcat'])){

    if(is_numeric($_GET['subcat'])){
        if(check_sub_category_exists($_GET['subcat'])){
            $subcat = $_GET['subcat'];
        }
    }else{
        $subcat = get_subcategory_id_by_slug($_GET['subcat']);
    }
}elseif(isset($_GET['category']) && !empty($_GET['category'])){ 
       
   get_category_id_by_slug($_GET['category']);    
   $category = 2;

}

 

if(isset($_GET['city']) && !empty($_GET['city'])){
    $city = $_GET['city'];
}else{
    $city = "";
}

$total = 0;

$where = '';
$order_by = 'u.id DESC';
// if(isset($_GET['keywords']) && !empty($_GET['keywords'])){
//     $where.= "AND (u.username LIKE '%$keywords%' or u.name LIKE '%$keywords%' or u.tagline LIKE '%$keywords%' or u.description LIKE '%$keywords%') ";
//     $order_by = "(CASE
//     WHEN u.username = '$keywords' THEN 1
//     WHEN u.name = '$keywords' THEN 2
//     WHEN u.name LIKE '$keywords%' THEN 3
//     WHEN u.name LIKE '%$keywords%' THEN 4
//     WHEN u.tagline = '$keywords' THEN 5
//     WHEN u.tagline LIKE '$keywords%' THEN 6
//     WHEN u.tagline LIKE '%$keywords%' THEN 7
//     WHEN u.description LIKE '$keywords%' THEN 8
//     WHEN u.description LIKE '%$keywords%' THEN 9
//     ELSE 10
//   END)";
// }

if(isset($category) && !empty($category)){ 
    $where.= "AND (u.status = '$category')";
}

if(isset($_GET['freelancer']) || isset($_GET['agency'])){
    $freelancer = $_GET['freelancer'];
    $agency = $_GET['agency'];
    if(isset($freelancer) && !empty($freelancer)){ 
        $where.= "AND (u.user_type = 'freelancer')";
    }
    if(isset($agency) && !empty($agency)){ 
        $where.= "AND (u.user_type = 'agency')";
    }
    
}


if(isset($_GET['coun'])){
    $coun = $_GET['coun'];
    if(isset($coun) && !empty($coun)){
        $where.= "AND (u.country = '$coun')";
    }
}

 

$total = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM `".$config['db']['pre']."user` u where  u.group_id = 'free' $where"));

$query = "SELECT u.* FROM `".$config['db']['pre']."user` u
     where u.group_id = 'free' $where ORDER BY $order_by";

$count = 0;
$noresult_id = "";
//Loop for list view
$items = array();
$result = $mysqli->query($query);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($info = mysqli_fetch_assoc($result)) {
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

        $items[$info['id']]['country'] = $info['country'];
        $items[$info['id']]['city'] = $info['city'];
        if(!empty($info['city_code'])) {
            $city_detail = get_cityDetail_by_id($info['city_code']);
            $items[$info['id']]['city'] = $city_detail['asciiname'];
            $items[$info['id']]['city'] .= ' '.get_stateName_by_id($city_detail['subadmin1_code']).','; 
        }

        $items[$info['id']]['favorite'] = check_user_favorite($info['id']);
        $items[$info['id']]['rating'] = averageRating($info['id'],$info['user_type']);
        $items[$info['id']]['user_type'] = $info['user_type'];
    }
}  

$selected = "";
if(isset($_GET['category']) && !empty($_GET['cat'])){
    $selected = $_GET['cat'];
}
// Check Settings For quotes
$GetCategory = get_maincategory($selected);
$cat_dropdown = get_categories_dropdown($lang);

if(isset($_GET['cat']) || !empty($category)){
    $maincatname = get_maincat_by_id($category);
    $maincatname = $maincatname['cat_name'];
    $mainCategory = $maincatname;
}else{
    $maincatname = "";
    $mainCategory = "";
}
if(isset($_GET['subcat']) && !empty($subcat)){
    $subcatname = get_subcat_by_id($subcat);
    $subcatname = $subcatname['sub_cat_name'];
    $subCategory = $subcatname;
}else{
    $subcatname = "";
    $subCategory = "";
}

if(isset($category) && !empty($category)){
    $Pagetitle = $mainCategory;
}
elseif(isset($subcat) && !empty($subcat)){
    $Pagetitle = $subCategory;
}
elseif(!empty($keywords)){
    $Pagetitle = ucfirst($keywords);
}
else{
    $Pagetitle = __("Category");
}

$cat_dropdown = get_categories_dropdown($lang);
$Pagelink = "";
if(count($_GET) >= 1){
    $get = http_build_query($_GET);
    $Pagelink .= "?".$get;
    $pagging = pagenav($total,$page_number,$limit,$link['CATEGORY'].$Pagelink,1);
}else{
    $pagging = pagenav($total,$page_number,$limit,$link['CATEGORY']);
}
$country_code = check_user_country();

//Print Template
HtmlTemplate::display('category', array( 
    'pagetitle' => $Pagetitle,
    'items' => $items,
    'usersfound' => $total,
    'cat_dropdown' => $cat_dropdown,
    'user_country' => strtolower($country_code), 
    'default_country_id' => $country_code,
    'category' => $GetCategory,
    'maincat' => $category,
    'subcat' => $subcat,
    'maincategory' => $mainCategory,
    'subcategory' => $subCategory,
    'keywords' => $keywords,
    'gender' => $gender,
    'range1' => $range1,
    'range2' => $range2,
    'age_range1' => $age_range1,
    'age_range2' => $age_range2,
    'pages' => $pagging, 
));
 