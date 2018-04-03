<?php
require "Essential.php";
include "../class/career.php";

$career = new Career();
if(isset($_GET) && !empty($_GET['type'])){
  $id = sanitize($_GET['id']);
  $type= substr(sha1("delete-".$id), 9, 9);
  if($type == $_GET['type']){
    $confirmData = $career->getOneData($id);

    if($confirmData){
      $deleteData = $career->deleteData($id);
  unlink("../../images/uploads/".$confirmData[0]->cv);

      if($deleteData){
        $_SESSION['success'] = "Resume has been deleted!";
        @header('location: ../career');
        exit;
      }
    } else{
      $_SESSION['warning'] = "Resume has been already removed or doesn't exists.";
      @header('location: ../career');
      exit;
    }

  }else{
    $_SESSION['error'] = "Invalid Request!!";
    @header('location: ../career');
    exit;
  }
}else{
  $_SESSION['error'] = "Invalid Request!!";
  @header('location: ../career');
  exit;
}
?>
