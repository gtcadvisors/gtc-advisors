<?php
// if resume is disable
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
	$id = $certificate_name = $certificate_from = $error = $resume_file = '';
    global $match;
	if(isset($match['params']['id'])){
        $_GET['id'] = $match['params']['id'];

		$result = ORM::for_table($config['db']['pre'].'certifications')
		->where('user_id' , $_SESSION['user']['id'])
		->where('id' , $_GET['id'])
		->where('active' , '1')
		->find_one();

		$certificate_name = $result['certificate_name'];
		$certificate_from = $result['certificate_from'];
		$id = $_GET['id'];
	}

	if(isset($_POST['submit'])){
		if(empty($_POST['certificate_name'])){
			$_POST['certificate_name'] = date('Y-m-d-h-i');
		}
		$certificate_name = $_POST['certificate_name'];
		$certificate_from = $_POST['certificate_from'];

		if(!empty($_FILES['certificate'])){
			$file = $_FILES['certificate'];
			// Valid formats
            $resume_files = trim(get_option("resume_files"));
            $valid_formats = explode(',', $resume_files);
			$filename = $file['name'];
			$ext = getExtension($filename);
			$ext = strtolower($ext);
			if (!empty($filename)) {
                //File extension check
				if (in_array($ext, $valid_formats)) {
					$main_path = ROOTPATH . "/storage/certifications/";
					$filename = uniqid(time()).'.'.$ext;
					if(move_uploaded_file($file['tmp_name'], $main_path.$filename)){
						$resume_file = $filename;
					}else{
						$error = __("Error: Please try again.");
					}
				} else {
					$error = __("Only pdf, doc, docx, rtf, rtx, ppt, pptx, jpeg, jpg, bmp, png file types allowed.");
				}
			}
		}else{
			if(empty($_POST['id'])){
				$error = __("Certificate is required");
			}
		}

		if($error == ''){
			// save resume in database
			$now = date("Y-m-d H:i:s");
			if(!empty($_POST['id'])){
				$resume_create = ORM::for_table($config['db']['pre'].'certifications')
				->where('id',$_POST['id'])
				->where('user_id',$_SESSION['user']['id'])
				->find_one();

				if($resume_create){
					if(!empty($resume_file)){
						$resume_create->set('filename', $resume_file);
					}
					$resume_create->set('certificate_name', validate_input($_POST['certificate_name']));
					$resume_create->set('certificate_from', validate_input($_POST['certificate_from']));
					$resume_create->set('updated_at', $now);
					$resume_create->save();
				}
			}else{
				$resume_create = ORM::for_table($config['db']['pre'].'certifications')->create();
				$resume_create->certificate_name = validate_input($_POST['certificate_name']);
				$resume_create->certificate_from = validate_input($_POST['certificate_from']);
				$resume_create->filename = $resume_file;
				$resume_create->user_id = $_SESSION['user']['id'];
				$resume_create->created_at = $now;
				$resume_create->updated_at = $now;
				$resume_create->save();
			}

			transfer($link['CERTIFICATE'],__("Certificate Uploaded."),__("Certificate Uploaded."));
			exit;
		}
	}

	//Print Template
	HtmlTemplate::display('certificate', array(
		'certificate_name' => $certificate_name,
		'certificate_from' => $certificate_from,
		'id' => $id,
		'error' => $error
	));
	exit;
}else{
	headerRedirect($link['LOGIN']);
}
?>