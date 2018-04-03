<?php
require "Essential.php";
include "../class/ncat.php";

$event = new ncat();
if(isset($_GET) && !empty($_GET['type'])){
  $id = sanitize($_GET['id']);
  $type= substr(sha1("delete-".$id), 9, 9);
  if($type == $_GET['type']){
    $confirmData = $event->selectOneData($id);
    if($confirmData){
      $deleteData = $event->deleteData($id);
      if($deleteData){
        $_SESSION['success'] = "News category has been deleted!";
        @header('location: ../ncat');
        exit;
      }
    } else{
      $_SESSION['warning'] = "News category has been already removed or doesn't exists.";
      @header('location: ../ncat');
      exit;
    }

  }else{
    $_SESSION['error'] = "Invalid Request!!";
    @header('location: ../ncat');
    exit;
  }
}else{
  $_SESSION['error'] = "Invalid Request!!";
  @header('location: ../ncat');
  exit;
}
?>
