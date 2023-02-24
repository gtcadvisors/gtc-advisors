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
	$id = $license_name = $license_from = $license_number = $error = $resume_file = '';
    global $match;
	if(isset($match['params']['id'])){
        $_GET['id'] = $match['params']['id'];

		$result = ORM::for_table($config['db']['pre'].'licenses')
		->where('user_id' , $_SESSION['user']['id'])
		->where('id' , $_GET['id'])
		->where('active' , '1')
		->find_one();

		$license_name = $result['license_name'];
		$license_from = $result['license_from'];
		$license_number = $result['license_number'];
		$id = $_GET['id'];
	}

	if(isset($_POST['submit'])){
		if(empty($_POST['license_name'])){
			$_POST['license_name'] = date('Y-m-d-h-i');
		}
		$license_name = $_POST['license_name'];
		$license_from = $_POST['license_from'];
		$license_number = $_POST['license_number'];

		if(!empty($_FILES['license'])){
			$file = $_FILES['license'];
			// Valid formats
            $resume_files = trim(get_option("resume_files"));
            $valid_formats = explode(',', $resume_files);
			$filename = $file['name'];
			$ext = getExtension($filename);
			$ext = strtolower($ext);
			if (!empty($filename)) {
                //File extension check
				if (in_array($ext, $valid_formats)) {
					$main_path = ROOTPATH . "/storage/licenses/";
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
				$resume_create = ORM::for_table($config['db']['pre'].'licenses')
				->where('id',$_POST['id'])
				->where('user_id',$_SESSION['user']['id'])
				->find_one();

				if($resume_create){
					if(!empty($resume_file)){
						$resume_create->set('filename', $resume_file);
					}
					$resume_create->set('license_name', validate_input($_POST['license_name']));
					$resume_create->set('license_from', validate_input($_POST['license_from']));
					$resume_create->set('license_number', validate_input($_POST['license_number']));
					$resume_create->set('updated_at', $now);
					$resume_create->save();
				}
			}else{
				$resume_create = ORM::for_table($config['db']['pre'].'licenses')->create();
				$resume_create->license_name = validate_input($_POST['license_name']);
				$resume_create->license_from = validate_input($_POST['license_from']);
				$resume_create->license_number = validate_input($_POST['license_number']);
				$resume_create->filename = $resume_file;
				$resume_create->user_id = $_SESSION['user']['id'];
				$resume_create->created_at = $now;
				$resume_create->updated_at = $now;
				$resume_create->save();
			}

			transfer($link['LICENSES'],__("License Uploaded."),__("License Uploaded."));
			exit;
		}
	}

	//Print Template
	HtmlTemplate::display('license', array(
		'license_name' => $license_name,
		'license_from' => $license_name,
		'license_number' => $license_number,
		'id' => $id,
		'error' => $error
	));
	exit;
}else{
	headerRedirect($link['LOGIN']);
}
?>
