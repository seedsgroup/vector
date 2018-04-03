<?php 
//This class adds new sub categories of services and redirects to repective location
require "Essential.php";
include "../class/service_subCat.php";
$services = new Service_subCat();
if(!empty($_POST) && isset($_POST)){
	$data = array();
	$data['service_id'] = sanitize($_POST['service_id']);
	if($_POST['id']){
		//update ko lagi aayeko ho
		$act="updat";
		$data['sub_cat'] = addslashes(sanitize($_POST['title']));
		$data['description'] = htmlentities(addslashes($_POST['description']));
		$id = sanitize($_POST['id']);
		$addData = $services->updateData($data, $id);
	}else{
		//category add ko lagi aayeko ho
		$act = "add";
		$data['sub_cat'] = ($_POST['newCat'] != "")? sanitize($_POST['newCat']) : '';
		$addData = $services->insertData($data);
	}

	if($addData){
			$_SESSION['success'] = "Successfully ".$act."ed!";
			@header('location: ../services?id='.$data['service_id']);
			exit;
		}else{
			$_SESSION['info'] = "Cannot ".$act." at the moment. Please try again later!";
			@header('location: ../services?id='.$data['service_id']);
			exit;
		}	
	
}else{
	$_SESSION['error'] = "Invalid Request!";
	@header('location: ../services?id=1');
	exit;
}
?>