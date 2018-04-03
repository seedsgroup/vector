<?php
require "Essential.php";
include "../class/job.php";

$event = new job();
if(isset($_GET) && !empty($_GET['type'])){
  $id = sanitize($_GET['id']);
  $type= substr(sha1("delete-".$id), 9, 9);
  if($type == $_GET['type']){
    $confirmData = $event->selectOneData($id);
    if($confirmData){
      $deleteData = $event->deleteData($id);
      if($deleteData){
        $_SESSION['success'] = "Job category has been deleted!";
        @header('location: ../jobCat');
        exit;
      }
    } else{
      $_SESSION['warning'] = "Job has been already removed or doesn't exists.";
      @header('location: ../jobCat');
      exit;
    }

  }else{
    $_SESSION['error'] = "Invalid Request!!";
    @header('location: ../jobCat');
    exit;
  }
}else{
  $_SESSION['error'] = "Invalid Request!!";
  @header('location: ../jobCat');
  exit;
}
?>
