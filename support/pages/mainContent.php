<?php include "class/session.php"; $session = new session(); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <?php echo $centerName; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include ADMIN_SITEMAP."inc/notification.php"; ?>

       <?php $login = $session->selectData();
       foreach($login as $loginData){
         $i = $loginData->id;
       } ?>
      <h2>
        Login page visited: <?php echo $i+1; ?>
      </h2>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
