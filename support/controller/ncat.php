<?php
require "Essential.php";
include "../class/ncat.php";
$ncat = new ncat();

if(isset($_POST) && !empty($_POST)){
  $data = array();
  $data['title'] = sanitize($_POST['title']);
  $insertData = $ncat->insertData($data);
  if($insertData){
    $_SESSION['success'] = "News category has been added!";
  }else{
    $_SESSION['info'] = "News category wasn't added. Please try again later!";
  }
  @header('location: ../ncat');
  exit;
  }else{
    $_SESSION['error'] = "Invalid Entry!";
    @header('location: ../ncat');
    exit;
  }
?>
