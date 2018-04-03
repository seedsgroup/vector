<?php
require "Essential.php";
include "../class/service_subCat.php";
include "../class/file.php";

$subCat = new Service_subCat();
$file = new File();

if(isset($_GET) && !empty($_GET['type'])){
  $id = sanitize($_GET['id']);
  $gotopage = sanitize($_GET['page']);
  $type= substr(sha1("delete-".$id), 9, 9);
  if($type == $_GET['type']){
    $confirmData = $subCat->selectData($id);
    if($confirmData){
      if(file_exists("../../images/uploads/".$confirmData[0]->sub_cat_image)){
        unlink("../../images/uploads/".$confirmData[0]->sub_cat_image);
      }
      if($confirmData[0]->sub_cat_image){
        $deleteFile = $file->deleteFileofServiceSubCat($id);
      }
      $deletesubCat = $subCat->deleteOne($id);
      if($deletesubCat){
        $_SESSION['success'] = "Data category has been deleted!";
        @header('location: ../services?id='.$gotopage);
        exit;
      }
    } else{
      $_SESSION['warning'] = "Data has been already removed or doesn't exists.";
      @header('location: ../services?id='.$gotopage);
      exit;
    }

  }else{
    $_SESSION['error'] = "Invalid Request!!";
    @header('location: ../services?id='.$gotopage);
    exit;
  }
}else{
  $_SESSION['error'] = "Invalid Request!!";
  @header('location: ../services?id='.$gotopage);
  exit;
}
?>
