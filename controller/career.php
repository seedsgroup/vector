<?php
	include '../inc/config.php';
  include '../class/database.php';
  include '../inc/function.php';
  include '../class/career.php';
  include '../class/file.php';

  $career = new Career();
  $file = new File();

	// debugger($_POST);  debugger($_FILES); debugger($_FILES['images']['tmp_name']); exit;
	if(isset($_POST) && !empty($_POST)){
		$data = array();
		$data['fullname']= sanitize($_POST['fullname']);
		$data['email'] = sanitize($_POST['email']);
    $data['phone'] = sanitize($_POST['phone']);
    $data['address'] = sanitize($_POST['address']);
    $data['job_cat_id'] = sanitize($_POST['job_cat_id']);
    $data['description'] = htmlentities(addslashes($_POST['description']));
		$careerid = $career->insertData($data);
		//debugger($banner_id); exit;
		if($careerid){
                for($i=0; $i<count($_FILES['file']['tmp_name']); $i++){
                    // debugger($_FILES, true);
                   $temporary_name = $_FILES['file']['tmp_name'];
                    $ext = getFileExtension($_FILES['file']['name']);
                    $upload_path = "../../images/uploads";
                    if(in_array(strtolower($ext), $allowed_image_ext)){
                        $file_name = "Vector-".rand(0,999999999).".".$ext;
												//debugger($file_name); exit;
                        $success = @move_uploaded_file($temporary_name, $upload_path."/".$file_name);

                        if($success){
                          $filedata = array();
                          $filedata['career_id'] = $careerid;
                          $filedata['title'] = $file_name;
                        }
                    }
                }

// debugger($images); debugger($banner_id); exit;
$uploads = $file->insertData($filedata);
					}
                            if($uploads){
                                @header("location: ../");
                                exit;
							}
							else{
									@header("location: ../");
									exit;
							}


					}else{
							@header('location: ../');
							exit;
		}

?>
