<?php $i=1; $getallJob = $job->selectData(); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Job Category
      <small>
        <a href="career" class="btn btn-success headerBtn"> <i class="fa fa-undo"></i> <span>Go back</span> </a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Job category</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include "inc/notification.php"; ?>
<div class="row">
  <div class="col-md-6">
    <form class="form form-horizontal" action="controller/job" method="post">
      <div class="form-group">
        <label class="col-md-2 control-label">Job Title: </label>
        <div class="col-md-10">
          <input type="text" name="title" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
          <button type="submit" name="submit" class="btn btn-success">Add</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-6">
    <table class="table table-bordered table-hover">
      <thead>
        <th>#</th>
        <th>Title</th>
        <th class="action">Action</th>
      </thead>
      <?php foreach ($getallJob as $key => $value): ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $value->title; ?></td>
          <td class="action">
            <a href="controller/deleteJob?id=<?php echo $value->id; ?>&type=<?php echo substr(sha1('delete-'.$value->id), 9, 9);?>" onclick="return confirm('Are you sure you want to delete this job category?')"  class="btn btn-danger actionBtn" title="Delete Job Category"> <i class="fa fa-trash"></i> </a>
          </td>
        </tr>
          <?php endforeach; ?>
    </table>
  </div>
</div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
