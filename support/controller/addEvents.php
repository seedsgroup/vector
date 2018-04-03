<?php
require "Essential.php";
include "../class/event.php";
$eventData = new Event();
if(isset($_POST) && !empty($_POST)){
  $data = array();
  $data['title'] = addslashes(sanitize($_POST['title']));
  $data['summary'] = htmlentities(addslashes($_POST['summary']));
  $data['description'] = htmlentities(addslashes($_POST['description']));
  $data['front'] = sanitize($_POST['front']);
  $data['type'] = sanitize($_POST['type']);
  $data['location'] = sanitize($_POST['location']);
  $data['event_date'] = sanitize($_POST['event_date']);
  $insertData = $eventData->insertData($data);
  if($insertData){
    $_SESSION['success'] = "Event has been added successfully!";
  }else{
    $_SESSION['error'] = "Event data wasn't added. Please try again later.";
  }
  @header('location: ../list_events');
  exit;
}else{
  $_SESSION['error'] = "Data couldn't be added at this moment!";
  @header('location: ../list_events');
  exit;
}
?>
