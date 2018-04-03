<?php $act = "update"; $updateData = $aboutVector->selectData(1);?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $centerName; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">About <?php echo $centerName; ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include ADMIN_SITEMAP."inc/notification.php"; ?>
      <form class="form-horizontal" action="controller/aboutVector" method="post">
        <div class="form-group">
          <label class="col-md-2 control-label">Company Name: </label>
          <div class="col-md-6">
            <input type="text" required class="form-control" name="name" value="<?php echo $updateData[0]->name; ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Office number: </label>
          <div class="col-md-6">
            <input type="number" name="Ophone" class="form-control" value="<?php echo $updateData[0]->Ophone; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Email: </label>
          <div class="col-md-6">
            <input type="email" name="email" class="form-control" value="<?php echo $updateData[0]->email; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Location: </label>
          <div class="col-md-6">
            <input type="text" name="location" class="form-control" value="<?php echo $updateData[0]->location; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Fax: </label>
          <div class="col-md-6">
            <input type="text" name="fax" class="form-control" value="<?php echo $updateData[0]->fax; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Post Box Number: </label>
          <div class="col-md-6">
            <input type="text" name="pobox" class="form-control" value="<?php echo $updateData[0]->pobox; ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-md-6">
            <button type="submit" class="btn btn-success"><?php echo ucfirst($act); ?></button>
          </div>
        </div>
      </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
