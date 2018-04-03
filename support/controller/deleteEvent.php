<?php
require "Essential.php";
include "../class/event.php";

$event = new Event();
if(isset($_GET) && !empty($_GET['type'])){
  $id = sanitize($_GET['id']);
  $type= substr(sha1("delete-".$id), 9, 9);
  if($type == $_GET['type']){
    $confirmData = $event->selectOneData($id);
    if($confirmData){
      $deleteData = $event->deleteData($id);
      if($deleteData){
        $_SESSION['success'] = "Event has been deleted!";
        @header('location: ../list_events');
        exit;
      }
    } else{
      $_SESSION['warning'] = "Event has been already removed or doesn't exists.";
      @header('location: ../list_events');
      exit;
    }

  }else{
    $_SESSION['error'] = "Invalid Request!!";
    @header('location: ../list_events');
    exit;
  }
}else{
  $_SESSION['error'] = "Invalid Request!!";
  @header('location: ../list_events');
  exit;
}
?>
