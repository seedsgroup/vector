<?php session_start(); include "function.php";
if(isset($_POST) && !empty($_POST['session'])){
$checkSession = sanitize($_POST['session']);
  if($checkSession == 1){
    $_SESSION['is_logged_in']=1;
    $_SESSION['success'] = "Welcome to the dashboard";
    echo 1;
    exit;
  }else if($checkSession == 2){
    $_SESSION['error'] = "UserName or Password incorrect";
    echo 0;
    exit;
  }else{
    $_SESSION['error'] = "Login Invalid! Please try again";
    echo 0;
    exit;
  }
}else{
  $_SESSION['error'] = "Login Invalid! Please try again";
  echo 0;
  exit;
}
?>
