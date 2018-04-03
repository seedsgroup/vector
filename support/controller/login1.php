<?php 
  require "Essential.php";
  include "../class/user.php";
$user = new USER();
  if(isset($_POST) && !empty($_POST)){
    $username = sanitize($_POST['username']);
    $user_info = $user->getUserByUsername($username);
    if($user_info){
      foreach($user_info as $key=>$value){
        if($username == $value->username){
          $password = sha1($_POST['password']);
          if($password == $value->password){
            $_SESSION['username'] = $value->username;
            $_SESSION['success'] = 'Welcome '.ucfirst($value->name).'! to VGPL Admin Panel.';
            $_SESSION['is_logged_in'] = 1;
            if(isset($_POST['remember']) && !empty($_POST['remember'])){
              setcookie('is_logged_in', 1, time()+3600);                              //cookies set here for three days
            }
            echo http_response_code(200);
            exit;
          }
          else{
            echo http_response_code(500);
            exit;
          }
        }
        else{
          echo http_response_code(500);
          exit;
        }
      }
    }
    else{
    echo http_response_code(500);
    exit;
    }
  }else{
    echo http_response_code(500);
    exit;
  }
?>
