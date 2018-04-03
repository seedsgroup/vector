<?php
    require "Essential.php";
	include '../class/file.php';
	$fileData = new File();
	  //debugger($_POST); debugger($_FILES); exit;  debugger($_FILES); debugger($_FILES['images']['tmp_name']);
	if(isset($_POST) && !empty($_POST)){
		$id = sanitize($_POST['id']);
		$page = sanitize($_POST['service_id']);
		if(!empty($_POST['pre_image'])){
			//update ko lagi aayeko ho
			$pre_image = $_POST['pre_image'];
			$deleteImage = $fileData->deleteFileofServiceSubCat($id);
			if (file_exists("../../images/uploads/".$pre_image)){
				unlink("../../images/uploads/".$pre_image);
			}
			$act = "updat";
		}
		else{
			$act = "add";
		}
			if(isset($_FILES) && !empty($_FILES['image']['tmp_name'])){ //here image is name sent from image
				$path = "../../images/uploads/";
		        for($i=0; $i<count($_FILES['image']['tmp_name']); $i++){
		           $temporary_name = $_FILES['image']['tmp_name'];
		            $ext = getFileExtension($_FILES['image']['name']);
		            //print_r("extension is :".$ext."\n");
		            //print_r($allowed_image_ext);
		            if(in_array(strtolower($ext), $allowed_image_ext)){
		            	//echo "here";
		                $file_name = substr(sha1($id."Vector-".$ext), 9,9).rand(0,999999999).".".$ext;
		                echo $file_name;
		                $success = @move_uploaded_file($temporary_name, $path."/".$file_name);
		               // echo "success is: ".$success;
		                if($success){
							$images = array();
							$images['service_subCat_id'] = $id;
		                    $images['title']= $file_name;
		                }
		            }
		        }
		     	if($act == "updat"){
		     		$uploads = $fileData->updateFileofServiceSubCat($images, $id);
		     	}else{
		     		$uploads = $fileData->addFile($images);
		     	}
		        if($uploads){
		            $_SESSION['success'] = "Image has been ".$act."ed successfully";
		          	@header('location: ../services?id='.$page);
		            exit;
				}
				else{
					$_SESSION['info'] = "Image wasn't ".$act."ed. Please try again later.";
					@header('location: ../services?id='.$page);
					exit;
				}
			}
			else{
				$_SESSION['error'] = "Please add your file again.";
				@header('location: ../services?id='.$page);
				exit;
			}
			
		}else{
			$_SESSION['error'] = "Invalid Entry.";
			@header('location: ../services?id='.$page);
		    exit;
		}
?>
