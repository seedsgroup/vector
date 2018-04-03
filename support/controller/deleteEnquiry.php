<?php
require "Essential.php";
include "../class/enquiry.php";

$career = new Career();
if(isset($_GET) && !empty($_GET['type'])){
  $id = sanitize($_GET['id']);
  $type= substr(sha1("delete-".$id), 9, 9);
  if($type == $_GET['type']){
    $confirmData = $career->selectOneEnquiry($id);

    if($confirmData){
      $deleteData = $career->deleteData($id);

      if($deleteData){
        $_SESSION['success'] = "Enquiry has been deleted!";
        @header('location: ../enquiry.php');
        exit;
      }
    } else{
      $_SESSION['warning'] = "Enquiry has been already removed or doesn't exists.";
      @header('location: ../enquiry');
      exit;
    }
  }else{
    $_SESSION['error'] = "Invalid Request!!";
    @header('location: ../enquiry');
    exit;
  }
}else{
  $_SESSION['error'] = "Invalid Request!!";
  @header('location: ../enquiry');
  exit;
}
?>
