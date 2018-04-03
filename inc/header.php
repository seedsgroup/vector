<?php  
    $current_page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME); 
    // echo $current_page;
    require "inc/config.php"; 
    include "class/database.php"; 
    include "inc/function.php";
?>
<?php 
    include('class/contact.php'); 
    $contactInfo = new Contact(); 
    $alldetails = $contactInfo->getContact();
?>
<?php include('class/services.php'); 
$getServices = new Services(); 
$serviceData = $getServices->selectAll(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Vector</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico"/>
    <link href="<?php echo css_url; ?>/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo css_url; ?>/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo css2_url; ?>/seedsGroupStyle.css">
    <?php if(($current_page=="index.php") || ($current_page=="index") || ($current_page=='')){?>
    	<link rel="stylesheet" type="text/css" href="<?php echo plugin_url; ?>slick/slick.css" />
    	<link rel="stylesheet" type="text/css" href="<?php echo plugin_url; ?>slick/slick-theme.css" />
    <?php } ?>
    <?php if(($current_page=="career") || ($current_page=="contact")){?>
    	<script type="text/javascript" defer src="<?php echo plugin_url; ?>parsley/parsley.min.js"></script>
    	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
    <?php } ?>
    <?php if($current_page=="contact"){ ?>
    	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <?php } ?>
    <?php if($current_page=="news"){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo css_url; ?>/news.css">
    <?php } ?>
</head>
<body>
    <?php include 'inc/topMenu.php';?>