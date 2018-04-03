<?php
require "Essential.php";
include "../class/event.php";
$eventData = new Event();
// debugger($_POST, true);
if(isset($_POST) && !empty($_POST)){
  // echo "here"; exit;
  $id = sanitize($_POST[id]);
  $data = array();
  $data['title'] = addslashes(sanitize($_POST['title']));
  $data['summary'] = htmlentities(addslashes($_POST['summary']));
  $data['description'] = htmlentities(addslashes($_POST['description']));
  $data['front'] = sanitize($_POST['front']);
  $data['type'] = sanitize($_POST['type']);
  $data['location'] = sanitize($_POST['location']);
  $data['event_date'] = sanitize($_POST['event_date']);
  $updateData = $eventData->updateData($data, $id);
  if($updateData){
    $_SESSION['success'] = "Event has been updated successfully!";
  }else{
    $_SESSION['error'] = "Event data wasn't updated. Please try again later.";
  }
  @header('location: ../list_events');
  exit;
}else{
  $_SESSION['error'] = "Data couldn't be updated at this moment!";
  @header('location: ../list_events');
  exit;
}
?>
