<?php
require "Essential.php";
include "../class/job.php";
$job = new job();
if(isset($_POST) && !empty($_POST)){
  $data = array();
  $data['title'] = sanitize($_POST['title']);
  $insertData = $job->insertData($data);
  if($insertData){
    $_SESSION['success'] = "Job category has been added!";
  }else{
    $_SESSION['info'] = "Job category wasn't added. Please try again later!";
  }
  @header('location: ../jobCat');
  exit;
  }else{
    $_SESSION['error'] = "Invalid Entry!";
    @header('location: ../aboutVector');
    exit;
  }
?>
