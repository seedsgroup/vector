<?php require "Essential.php";
include ADMIN_SITEMAP."class/user.php";
$user = new USER();
  //debugger($_POST, true);
  if(isset($_POST) && !empty($_POST)){
    $username = sanitize($_POST['username']);
    $user_info = $user->getUserByUsername($username);
    //debugger($user_info, true);
    if($username == $user_info[0]->username){
      $password = sha1($_POST['password']);
      // debugger($user_info, true);
      if($password == $user_info[0]->password){
        $_SESSION['username'] = $user_info[0]->username;
        $_SESSION['success'] = 'Welcome '.$_SESSION['username'].'! to CIDS Admin Panel.';
        $_SESSION['is_logged_in'] = 1;
        if(isset($_POST['remember']) && !empty($_POST['remember'])){
          setcookie('is_logged_in', 1, time()+3600);   														//cookies set here for three days
        }
        @header('location: ../dashboard.php');
        exit;

      }else{
        $_SESSION['error'] = "PASSWORD DOESN'T MATCH!";
        @header('location: ../');
        exit;
      }
    }else{
      $_SESSION['error'] = "USERNAME IS INCORRECT!";
      @header('location: ../');
      exit;
    }

  }else{
    $_SESSION['error'] = "INVALID REQUEST! PLEASE TRY AGAIN.";
    @header('location: ../');
    exit;
  }
?>
