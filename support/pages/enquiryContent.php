<?php $i=1; include('class/enquiry.php'); $enquiry = new Enquiry(); $enquiries = $enquiry->selectAllEnquiry(); ?>
<style type="text/css">
  button.customBtn{
    border-radius:50% !important;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Enquiries
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Enquiries</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include "inc/notification.php"; ?>
      <table class="table table-bordered table-hover col-offset-md-3">
        <thead>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone number</th>
          <th>Heard us from?</th>
          <th class="action">Message for us?</th>
        </thead>
        <tbody>
          <?php foreach ($enquiries as $key => $value): ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $value->name; ?></td>
          <td><?php echo $value->email; ?></td>
          <td><?php echo $value->phone; ?></td>
          <td><?php echo $value->hear; ?></td>
          <td class="action"><button class="btn btn-info customBtn" data-toggle="modal" data-target="#myModal<?php echo $value->id; ?>">M</button></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<?php foreach ($enquiries as $key => $value): ?>
  <div class="modal fade" id="myModal<?php echo $value->id;?>" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Message</h4>
        </div>
        <div class="modal-body">
          <jumbotron>
            <?php echo ($value->message)? $value->message : ''; ?>
          </jumbotron>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>