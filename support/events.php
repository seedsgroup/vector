<?php include "inc/header.php"; include('class/event.php'); include('class/ncat.php');
$getallncat = new ncat(); $allCats = $getallncat->selectData();
$allEventData = new Event();?>
<div class="wrapper">
<?php include "inc/topMenu.php"; ?>
<?php include "inc/sidebar.php"; ?>
<?php include "pages/eventsContent.php"; ?>
<?php include "inc/footer.php"; ?>
