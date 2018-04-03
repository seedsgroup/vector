<?php
require "Essential.php";
include "../class/aboutVector.php";
$aboutVector = new aboutVector();
if(isset($_POST) && !empty($_POST)){
    $data = array();
    $id = 1;
    $data['name'] = sanitize($_POST['name']);
    $data['Mphone'] = sanitize($_POST['Mphone']);
    $data['Ophone'] = sanitize($_POST['Ophone']);
    $data['email'] = sanitize($_POST['email']);
    $data['fax'] = sanitize($_POST['fax']);
    $data['location'] = sanitize($_POST['location']);
    $data['pobox'] = sanitize($_POST['pobox']);
    $update = $aboutVector->updateData($id, $data);
    if($update){
      $_SESSION['success'] = "Data has been updated succcessfully.";
    }else{
      $_SESSION['error'] = "Can't update data at the moment";
    }
    @header('location: ../aboutVector');
    exit;
  }else{
    $_SESSION['error'] = "Invalid Entry!";
    @header('location: ../aboutVector');
    exit;
  }
?>
