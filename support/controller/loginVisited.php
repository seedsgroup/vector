<?php
require "Essential.php";
include "../class/session.php";
$session = new session();
if(isset($_POST) && !empty($_POST)){
  $count = sanitize($_POST['count']);
  $data = array();
  $data['login_page'] = $count;
  $addData = $session->insertData($data);
  if($addData){
    echo 1;
    exit;
  }else{
    echo 0;
    exit;
  }
}else{
  echo -1;
  exit;
}
?>
