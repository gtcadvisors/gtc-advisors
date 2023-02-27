<?php

if (checkloggedin()) {
    $ses_userdata = get_user_data($_SESSION['user']['username']); 
    $main_path = ROOTPATH . "/storage/"; 
    update_lastactive(); 


    if(!empty($_POST)){
        $errors = 0;
        $inputError = "";
        $languageSelectError = "";
        $expertiseListError = "";
        $contractorTypeError = "";
        $certificateFileError = "";
        $licenseFileError = "";
        $certificates = array();
        $licenses = array();
        $resumeError = "";


        // checking resume file for errors
        $resumeError = checkFile($_FILES["resume"]);
        if($resumeError){
            $errorPage = 5;
            $errors ++;
        }
        
        // checking license files for errors
        if(!empty($_FILES["licenseFile"])){
            $licenses = convertArray($_FILES["licenseFile"]);
            foreach($licenses as $license){
                $licenseFileError = checkFile($license);
                if($licenseFileError){
                    $errorPage = 4;
                    $errors ++;
                    break;
                }
            }
        }
        else{
            $licenseFileError =  "Atleast one License is Required";
            $errorPage = 4;
            $errors ++;
        }

        // checking certificate files for errors
        if(!empty($_FILES["certificateFile"])){
            $certificates = convertArray($_FILES["certificateFile"]);
            foreach($certificates as $certificate){
                $certificateFileError = checkFile($certificate);
                if($certificateFileError){
                    $errorPage = 3;
                    $errors ++;
                    break;
                }
            }
        }
        else{
            $certificateFileError =  "Atleast one certificate is Required";
            $errorPage = 3;
            $errors ++;
        }

    


        if(empty($_POST["contractor"])){
            $contractorTypeError = "You must choose a contractor option";
            $errorPage = 2;
            $errors ++;

        }

        if(empty($_POST["expertise"]) && empty($_POST["others"])){
            $expertiseListError = "You must select at least one expertise";
            $errorPage = 2;
            $errors ++;
        }

        if(empty($_POST["languages"])){
            $languageSelectError = "You must select at least one language";
            $errorPage = 1;
            $errors ++;
        }

        // checking all text input fields for errors
        $inputArray = array("fullName", "phone", "bio", "description");
        foreach($inputArray as $input){
            if(empty($_POST[$input])){
                $inputError = "You must fill all required fields";
                $errorPage = 1;
                $errors ++;
            }
        }



        // profile image file for errors
        $profileImageError = checkFile($_FILES["profileImage"], "picture");
        if($profileImageError){
            $errorPage = 1;
            $errors ++;
        }


        if($errors == 0){
            $now = date("Y-m-d H:i:s");
            $user_update = ORM::for_table($config['db']['pre'] . 'user')->find_one($_SESSION['user']['id']);
            $user_update->set('name', validate_input($_POST['fullName']));
            $user_update->set('phone',  validate_input($_POST['phone']));
            $user_update->set('bio', validate_input($_POST["bio"]));
            $user_update->set('description', validate_input($_POST["description"]));
            $user_update->set('languages', json_encode(validate_input($_POST["languages"])));
            $user_update->set('user_type', $_POST["contractor"]);
            $user_update->set('category', json_encode(validate_input($_POST["expertise"])));
            $user_update->set('others', json_encode(validate_input($_POST["others"])));

            
            // saving profile Image
            $profileImage = getFileData($_FILES["profileImage"]);
            $profileImageName = $ses_userdata['username']."_".$profileImage["fileNameNew"];
            move_uploaded_file($profileImage["fileTmpName"], $main_path."profile/".$profileImageName);
            $user_update->set('image', $profileImageName);
            $user_update->save();

            // saving certificates
            $certificateNo = 0;
            foreach($certificates as $certificate){
                $certificateData = getFileData($certificate);
                $certificateFileName =$ses_userdata['username']."_".$certificateData["fileNameNew"];
                move_uploaded_file($certificateData["fileTmpName"],$main_path."certifications/".$certificateFileName );

                $cert_create = ORM::for_table($config['db']['pre'].'certifications')->create();
                $cert_create->user_id = $_SESSION['user']['id'];
				$cert_create->certificate_name = validate_input($_POST['certificateName'][$certificateNo]);
				$cert_create->certificate_from = validate_input($_POST['certificateFrom'][$certificateNo]);
				$cert_create->filename = $certificateFileName;
				$cert_create->created_at = $now;
				$cert_create->updated_at = $now;
				$cert_create->save();
                $certificateNo ++;
            }

            // saving licenses
            $licenseNo = 0;
            foreach($licenses as $license){
                $licenseFileData = getFileData($license);
                $licenseFileName =$ses_userdata['username']."_".$licenseFileData["fileNameNew"];
                move_uploaded_file($licenseFileData["fileTmpName"],$main_path."licenses/".$licenseFileName );

                $license_create = ORM::for_table($config['db']['pre'].'licenses')->create();
                $license_create->user_id = $_SESSION['user']['id'];
				$license_create->license_name = validate_input($_POST['licenseName'][$licenseNo]);
				$license_create->license_from = validate_input($_POST['licenseFrom'][$licenseNo]);
				$license_create->license_number = validate_input($_POST['licenseNumber'][$licenseNo]);
				$license_create->filename = $licenseFileName;
				$license_create->created_at = $now;
				$license_create->updated_at = $now;
				$license_create->save();
                $licenseNo++;
            }

            // saving resume
            $resume = getFileData($_FILES["resume"]);
            $resume_create = ORM::for_table($config['db']['pre'].'resumes')->create();
            $resumeFileName = $ses_userdata['username']."_".$resume["fileNameNew"];
            move_uploaded_file($resume["fileTmpName"],$main_path."resumes/".$resumeFileName );
            $resume_create->filename =  $resumeFileName;
            $resume_create->user_id = $_SESSION['user']['id'];
            $resume_create->created_at = $now;
            $resume_create->updated_at = $now;
            $resume_create->save();
          

            $loggedin = get_user_data("", $_SESSION['user']['id']);
            create_user_session($loggedin['id'], $loggedin['username'], $loggedin['password'], $loggedin['user_type']);
            
            
            header("Location: ".$config['site_url']."dashboard");
            exit;
        }
              
    }


    //Print Template
    HtmlTemplate::display('become-an-advisor-form', array(
        'userName' => ucfirst($ses_userdata['username']),
        'email' => $ses_userdata['email'],
        'inputError' => $inputError,
        'languageSelectError' => $languageSelectError,
        'contractorTypeError' => $contractorTypeError,
        'expertiseListError' => $expertiseListError,
        'profileImageError' => $profileImageError,
        'certficateFileError' => $certificateFileError,
        'licenseFileError' => $licenseFileError,
        'resumeError' => $resumeError,
        "errorPage" =>  $errorPage,

 
    ));
    exit;
}else {
    headerRedirect($link['LOGIN']);
}




function checkFile($fileArray, $fileType=null){
    if(!empty($fileArray)){
        $file = $fileArray;
        $fileName = $file["name"];
        $fileSize = $file["size"];

        $fileExt = explode(".", $fileName);
        $fileExt = strtolower(end($fileExt));
        $extensions = $fileType? array("jpg", "jpeg", "png",):array("jpg", "jpeg", "png", "pdf", "docx");
        
        clearstatcache($fileName);
        if($fileSize){
            if(in_array($fileExt, $extensions)){
                if($fileSize < 1024*1024){
                    return "";
                }
                else{   
                    return "File Too Large. Must be less than 2mb";   
                }
            }else{
                return "Invalid File Type. Only ". join(", ",$extensions) ." file types are allowed";
            }
        }
        else{
            return  $fileType? "Profile Image required": "Resume File required";
        }

    }
}

function getFileData($fileArray){
    $fileName = $fileArray["name"];
    $fileTmpName = $fileArray["tmp_name"];
    $fileExt = explode(".", $fileName);
    $fileExt = strtolower(end($fileExt));
    return [
        "fileName"=>$fileName,
        "fileTmpName"=>$fileTmpName,
        "fileNameNew"=>uniqid('').".".$fileExt,
    ];
}

function convertArray($originalArray) {
    $resultArray = array();
    $keys = array_keys($originalArray);
    $numFiles = count($originalArray[$keys[0]]);
    for ($i = 0; $i < $numFiles; $i++) {
        $tempArray = array();
        foreach ($keys as $key) {
            $tempArray[$key] = $originalArray[$key][$i];
        }
        $resultArray[] = $tempArray;
    }
    return $resultArray;
}
?>


