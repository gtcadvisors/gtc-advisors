<?php
// if certificate is disable
if(!$config['resume_enable']){
    error(__("Page Not Found"), __LINE__, __FILE__, 1);
}

if(checkloggedin())
{
	update_lastactive();
	$ses_userdata = get_user_data($_SESSION['user']['username']);
	if($ses_userdata['user_type'] == 'freelancer' ? : 'agency'){
		headerRedirect($link['']);
	}

	$keywords = '';

	$orm = ORM::for_table($config['db']['pre'].'certifications')
        ->where('user_id' , $_SESSION['user']['id'])
        ->where('active' , '1');

    if(!empty($_GET['keywords'])){
    	$keywords = $_GET['keywords'];
    	$orm->where_like('certificate_name','%'.$keywords.'%');
    }

    $result = $orm->find_many();
    $items = array();
    if ($result) {
        foreach ($result as $info)
        {
        	$items[$info['id']]['id'] = $info['id'];
        	$items[$info['id']]['certificate_name'] = $info['certificate_name'];
            $items[$info['id']]['certificate_from'] = $info['certificate_from'];
        	$items[$info['id']]['filename'] = $info['filename'];
        }
    }

    //Print Template
    HtmlTemplate::display('my-certificates', array(
        'items' => $items,
        'certifications' => certifications_count($_SESSION['user']['id']),
        'keywords' => $keywords
    ));
    exit;
}else{
	headerRedirect($link['LOGIN']);
}
?>
