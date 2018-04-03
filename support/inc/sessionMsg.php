<?php
if(isset($_POST) && !empty($_POST)){
  if($_POST['session'] == 1){
    $_SESSION['success'] = sanitize($_POST['msg']);
    echo 1;
    exit;
  }else if($_POST['session']) == 2){
    $_SESSION['info'] = sanitize($_POST['msg']);
    echo 0;
    exit;
  }else if($_POST['session'] == 3){
    $_SESSION['warning'] = sanitize($_POST['msg']);
    echo 0;
    exit;
  }else{
    $_SESSION['error'] = "Invalid entry!";
    echo 0;
    exit;
  }
}else{
  $_SESSION['error'] = "Invalid entry!";
  echo -1;
  exit;
}
?>
