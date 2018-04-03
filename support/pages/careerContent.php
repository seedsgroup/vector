<?php $i=1; $y=1; $z=1; $getAllData = $career->getAllData(); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Career Lists
      <small>
        <a href="jobCat.php" class="btn btn-success headerBtn"> <i class="fa fa-plus"></i> <span>Add job Category</span></a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Career</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include "inc/notification.php"; ?>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th class="action">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($getAllData as $key => $value): ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $value->fullname; ?></td>
      <td><?php echo $value->phone; ?></td>
      <td><?php echo $value->email; ?></td>
      <td class="action">
        <a href="#" class="btn btn-primary actionBtn" target="_blank" title="View Details" data-toggle="modal" data-target="#myModal<?php echo $y++; ?>"> <i class="fa fa-vimeo"></i> </a>
        <a href="<?php echo upload_file_url.$value->cv; ?>" class="btn btn-success actionBtn" target="_blank" title="View CV"> <i class="fa fa-eye"></i> </a>
        <a href="controller/deleteCareer?id=<?php echo $value->id; ?>&type=<?php echo substr(sha1('delete-'.$value->id), 9, 9);?>" onclick="return confirm('Are you sure you want to delete this resume?')"  class="btn btn-danger actionBtn" title="Delete resume"> <i class="fa fa-trash"></i> </a>
     </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php foreach ($getAllData as $key => $value): ?>
<div class="modal fade" id="myModal<?php echo $z++;?>" role="dialog">
<div class="modal-dialog modal-lg">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h1 class="modal-title" style="padding: 2rem 0;">Detail Information of <?php echo $value->fullname; ?></h1>
  </div>
  <div class="modal-body">
    <h4><b>Full Name:</b> <medium><?php echo $value->fullname; ?></medium></h4>
    <hr>
    <h4><b>Applied for:</b> <medium><?php echo $value->job_title; ?></medium></h4>
    <hr>
    <h4><b>Email:</b> <medium><?php echo $value->email; ?></medium></h4>
    <hr>
    <h4><b>Phone:</b> <medium><?php echo $value->phone; ?></medium></h4>
    <hr>
    <h4><b>Address:</b> <medium><?php echo $value->address; ?></medium></h4>
    <hr>
    <h4><b>Description:</b> <medium><?php echo ucfirst(html_entity_decode(stripslashes($value->description))); ?></medium></h4>
    <hr>
    <a href="<?php echo upload_file_url.$value->cv; ?>" class="btn btn-success" target="_blank" title="View CV" style="cursor: pointer; text-deocration: none;"> View CV </a>
  </div>
  <div class="modal-footer">
    <center>
  <h2><?php echo $legal; ?></h2>
  <center>
  </div>
</div>

</div>
</div>
<?php endforeach; ?>
