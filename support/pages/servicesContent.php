<?php include('class/service_subCat.php'); $subcat = new Service_subCat();
if(isset($_GET) && !empty($_GET)){
  $id = sanitize($_GET['id']);
  $page = array(7, 8, 9, 10, 11, 12);
  if(in_array($id, $page)){
    $getData = $getServices->selectData($id); //for services
    $getCats = $subcat->SelectAllCatsByService($id); //for services ko sub categories
    $act="ADD";
  }
   else{
    $_SESSION['error']= "Invalid Reqest!";
    @header('location: ./');
    exit;  
   } 
}
else{
  $_SESSION['error']= "Invalid Reqest!";
  @header('location: ./');
  exit;
}
?>
<script src="<?php echo plugin_url; ?>parsley/parsley.min.js"></script>
<link rel="stylesheet" type="text/css" href="test.css">
<script type="text/javascript" src="test.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php  echo $getData[0]->title; // debugger($getCats);?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li>Services</li>
      <li class="active"><?php  echo $getData[0]->title; ?></li>

    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include "inc/notification.php"; ?>
<div class="row">
  <div class="col-md-8">
    <form class="form-horizontal" action="controller/services.php" method="post">
      <div class="form-group">
        <label class="col-md-2 control-label">Summary</label>
        <div class="col-md-10">
          <textarea name="summary" class="form-control"><?php  echo $getData[0]->summary; ?></textarea>
        </div>
      </div>
      
      <input type="hidden" name="id" value="<?php echo $getData[0]->id; ?>">

      <input type="hidden" name="pre_image" value="<?php echo $getData[0]->image; ?>">


      <div class="form-group">
        <div class="col-sm-offset-2 col-md-10">
          <button type="submit" class="btn btn-success"><?php echo ucfirst($act); ?></button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-4">
    <table class="table">
      <tbody>
        <td style="background:url(<?php echo upload_file_url.$getData[0]->image; ?>) no-repeat; width: 200px; height: 250px; background-size: contain; background-position: center center; border: none;">
          <a href="#" class="btn btn-success uploadPic" data-toggle="modal" data-target="#myModal"> Change Pic</a>
        </td>
      </tbody>
    </table>
  </div>
</div>

<h1>
  SERVICES 
    <a href="#" class="btn btn-success headerButton" data-toggle="modal" data-target="#subCat"> <i class="fa fa-plus"></i> <span class="headerButton">Add new Service</span></a>
</h1>
  <?php include "service.php"; ?>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- tinymce starts -->
<?php include('inc/tinymce.php'); ?>
<!-- tinymce ends -->


<!-- models class for Services -->
<?php include('pages/model/service_subCat.php'); ?>
<!-- model class for Services ends here -->

<!-- model class for pic starts here -->
 <?php include('pages/model/pic_update.php'); ?>
 <!-- model class for pic ends here -->