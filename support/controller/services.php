<?php
require "Essential.php";
include "../class/services.php";
$services = new Services();
if(isset($_POST) && !empty($_POST)){
    $data = array();
    $id = sanitize($_POST['id']);
    $type = substr(Sha1("view-".$id), 9, 9);
    $data['summary'] = html_entity_decode(addslashes($_POST['summary']));
    $update = $services->updateData($data, $id);
    if($update){
      $_SESSION['success'] = "Data has been updated succcessfully.";
    }else{
      $_SESSION['error'] = "Can't update data at the moment";
    }
    @header('location: ../services?id='.$id);
    exit;
  }else{
    $_SESSION['error'] = "Invalid Entry!";
    @header('location: ../services?id='.$id);
    exit;
  }
?>
