<?php
require "Essential.php";
	include '../class/file.php';
	$fileData = new File();
	if(isset($_POST) && !empty($_POST)){
		$id = sanitize($_POST['id']);
		$pre_image = $_POST['pre_image'];
		$deleteImage = $fileData->deleteFileofService($id);
		if (file_exists("../../images/uploads/".$pre_image)){
			unlink("../../images/uploads/".$pre_image);
		}
		if(isset($_FILES) && !empty($_FILES['image']['tmp_name'])){
			$path = "../../images/uploads/";
            for($i=0; $i<count($_FILES['image']['tmp_name']); $i++){
               $temporary_name = $_FILES['image']['tmp_name'];
                $ext = getFileExtension($_FILES['image']['name']);
                if(in_array(strtolower($ext), $allowed_image_ext)){
                    $file_name = substr(sha1($id."Vector-".$ext), 9,9).rand(0,999999999).".".$ext;
                    $success = @move_uploaded_file($temporary_name, $path."/".$file_name);
                    if($success){
						$images = array();
						$images['services_id'] = $id;
                        $images['title']= $file_name;
                    } // end of determine success
                } //end of finding extension in array
            } //end of for
			$uploads = $fileData->addServiceFile($images);
	        if($uploads){
	            $_SESSION['success'] = "Image has been updated successfully";
	          	@header('location: ../services?id='.$id);
	            exit;
			} //end of upload if its true
			else{
					$_SESSION['info'] = "Image wasn't updated. Please try again later.";
					@header('location: ../services?id='.$id);
					exit;
			} //end of upload if its false
		} //end of file if it exists
		else{
			$_SESSION['warning'] = "Invalid Entry.";
			@header('location: ../services?id='.$id);
			exit;
		}

	}else{
		$_SESSION['warning'] = "Invalid Entry.";
		@header('location: ../services?id='.$id);
		exit;
	}
?>
