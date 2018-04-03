<?php session_start(); require 'inc/config.php'; include "class/database.php"; include "inc/function.php"; include "inc/security_inside.php";?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VGPL Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-green.min.css">

  <script src="<?php echo js_url; ?>jquery-3.2.1.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
</head>
<style>
  a.headerButton{
    text-decoration: none;
    cursor: pointer;
    color: white;
  }

  span.headerButton{
    padding-left: 5%;
  }
  th.action, td.action{
    text-align: center;
  }
  table, th, td{
  border: 1px solid black;
  }
  a.actionBtn{
    text-decoration: none;
    border-radius: 50%;
    cursor: pointer;
  }
  a.actionBtnPic{
    text-decoration: none;
    border-radius: 50%;
    margin-top: 60%;
    cursor: pointer;
  }
  a.uploadPic{
    text-decoration: none;
    border-radius: 25%;
    margin-top: 60%;
    margin-left: 45%;
    cursor: pointer;
  }
  a#tabUploadBtn{
    text-decoration: none;
    border-radius: 50%;
    margin-top: 60%;
    cursor: pointer;
  }
</style>
<body class="hold-transition skin-green sidebar-mini">
