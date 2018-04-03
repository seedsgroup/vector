<?php
require "Essential.php";
include "class/contact.php";
$contact = new Contact();

if(isset($_POST) && !empty($_POST)){
  $data = array();
  $data['email'] = sanitize($_POST['email']);
  $data['address'] = sanitize($_POST['address']);
  $data['phone'] = sanitize($_POST['phone']);

  $updateContact = $contact->updateContact($data, $is_die = false);
  // debugger($updateContact, true);
  if($updateContact){
    $_SESSION['success'] = "Contact has been updated successfully.";
  }else{
    $_SESSION['error'] = "Sorry! There was problem while updating category.";
  }
  @header('location: ../contact_info');
  exit;
}else{
  $_SESSION['error'] = "Please fill the form properly.";
  @header('location: ../contact_info');
  exit;
}
?>
