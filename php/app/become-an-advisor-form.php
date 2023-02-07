<?php

if (checkloggedin()) {
    $ses_userdata = get_user_data($_SESSION['user']['username']); 
    $main_path = ROOTPATH . "/storage/"; 
    update_lastactive(); 
    if(!empty($_POST)){
        $errors = 0;
        $errorPage = 0;
        $certficateFileError = "";
        $certificates = array();

        // $profileImageError = checkFile($_FILES["profileImage"]);
        // if($profileImageError){
        //     $errors ++;
        // }
        if(!empty($_FILES["certificateFile"])){
            $certificates = convertArray($_FILES["certificateFile"]);
            foreach($certificates as $certificate){
                $certficateFileError = checkFile($certificate);
                if($certficateFileError){
                    $errors ++;
                    break;
                }
            }
        }
        else{
            $certficateFileError =  "Atleast one certificate is required";
            $errors ++;
        }
        
        

        echo $certficateFileError ;
        if($errors == 0){
            foreach($certificates as $certificate){
                $certificateData = getFileData($certificate);
                $certificateFileName =$ses_userdata['username']."_".$certificateData["fileNameNew"];
                move_uploaded_file($certificateData["fileTmpName"],$main_path."certificates/".$certificateFileName );
                echo($certificateFileName);
            }

        }
       

      
        
        exit;


        if($errors == 0){
            $user_update = ORM::for_table($config['db']['pre'] . 'user')->find_one($_SESSION['user']['id']);
            $user_update->set('name', validate_input($_POST['fullName']));
            $user_update->set('phone',  validate_input($_POST['phone']));
            $user_update->set('bio', validate_input($_POST["bio"]));
            $user_update->set('description', validate_input($_POST["description"]));
            $user_update->set('languages', json_encode(validate_input($_POST["languages"])));

            $user_update->set('user_type', $_POST["contractor"][0]);



            
            
            // saving profile Image
            $profileImage = getFileData("profileImage");
            $profileImageName = $ses_userdata['username']."_".$profileImage["fileNameNew"];
            move_uploaded_file($profileImage["fileTmpName"], $main_path."profile/".$profileImageName);
            $user_update->set('image', $profileImageName);



            $user_update->save();

            $loggedin = get_user_data("", $_SESSION['user']['id']);
            create_user_session($loggedin['id'], $loggedin['username'], $loggedin['password'], $loggedin['user_type']);
            
            
            // transfer($link['EDITPROFILE'], __("Profile Updated Successfully"), __("Profile Updated Successfully"));
            exit;
        }
              
    }


    //Print Template
    HtmlTemplate::display('become-an-advisor-form', array(
        'userName' => ucfirst($ses_userdata['username']),
        'email' => $ses_userdata['email'],
        'profileImageError' => $profileImageError,

 
    ));
    exit;
}else {
    headerRedirect($link['LOGIN']);
}




function checkFile($fileArray){
    if(!empty($fileArray)){
        $file = $fileArray;
        $fileName = $file["name"];
        $fileSize = $file["size"];

        $fileExt = explode(".", $fileName);
        $fileExt = strtolower(end($fileExt));
        $extensions = array("jpg", "jpeg", "png", "pdf");
        
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
                return "Invalid File Type";
            }
        }
        else{
            return "File Required";
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
        "fileNameNew"=>uniqid('', true).".".$fileExt,
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


