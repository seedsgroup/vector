<?php
	include '../inc/config.php';
  include '../class/database.php';
  include '../inc/function.php';
  include '../class/enquiry.php';

  $enquiry = new Enquiry();

	if(isset($_POST) && !empty($_POST)){
		$data = array();
		$data['name'] = sanitize($_POST['name']);
		$data['email'] = sanitize($_POST['email']);
    $data['phone'] = sanitize($_POST['phone']);
    $data['hear'] = sanitize($_POST['hear']);
    $data['message'] = sanitize($_POST['message']);
    
		$result = $enquiry->insertData($data);
		
    if($result){
      echo http_response_code(205);
    }else{
      echo http_response_code(500);
    }
  }

?>
