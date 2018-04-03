<?php
require "Essential.php";
include "../class/carousel.php";

$carousel = new carousel();
if(isset($_GET) && !empty($_GET['type'])){
  $id = sanitize($_GET['id']);
  $type= substr(sha1("delete-".$id), 9, 9);
  if($type == $_GET['type']){
    $confirmData = $carousel->getcarouselById($id);

    if($confirmData){
      $deleteData = $carousel->deletecarousel($id);
  unlink("../../images/uploads/".$confirmData[0]->image);

      if($deleteData){
        $_SESSION['success'] = "Picture has been deleted!";
        @header('location: ../list_carousel');
        exit;
      }
    } else{
      $_SESSION['warning'] = "Picture has been already removed or doesn't exists.";
      @header('location: ../list_carousel');
      exit;
    }

  }else{
    $_SESSION['error'] = "Invalid Request!!";
    @header('location: ../list_carousel');
    exit;
  }
}else{
  $_SESSION['error'] = "Invalid Request!!";
  @header('location: ../list_carousel');
  exit;
}
?>
