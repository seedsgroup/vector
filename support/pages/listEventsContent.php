<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      News/Events
      <small>
        <a href="events" class="btn btn-success headerButton" title="Add new News/Events">
          <i class="fa fa-plus"> <span>Add new</span> </i>
        </a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">News/Events</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include "inc/notification.php"; ?>

      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Summary</th>
            <th>Category</th>
            <th>Shown at front?</th>
            <th>Date</th>
            <th class="action">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; $selectAllData = $eventsAllData->selectData();
          foreach ($selectAllData as $key => $value) { ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $value->title; ?></td>
            <td>
              <?php
              if((count(explode(' ', $value->summary)) * 2 - 1) > 100 ){
                echo ucfirst(html_entity_decode(substr($value->summary, 0, 200))."... <br> Click on edit to read more!!");
              }else{
                echo ucfirst(html_entity_decode($value->summary));
              }
              ?>
            </td>
            <td><?php echo($value->catType)? $value->catType :'Not Available'; ?></td>
            <td><?php echo ($value->front == 1)? 'This is shown at front' : 'This is not shown at front'; ?></td>
            <td><?php echo $value->event_date; ?></td>
            <td class="action">
              <a href="events?id=<?php echo $value->id; ?>&type=<?php echo substr(sha1("view-".$value->id), 9, 9); ?>" class="btn btn-success actionBtn" title="Edit Event!"> <i class="fa fa-pencil"></i> </a>
              <a onclick="return confirm('Are you sure you want to delete this event?')"  href="controller/deleteEvent?id=<?php echo $value->id; ?>&type=<?php echo substr(sha1("delete-".$value->id), 9, 9); ?>" class="btn btn-danger actionBtn" title="Delete Event!"> <i class="fa fa-trash"></i> </a>
            </td>
          </tr>
            <?php  } ?>
        </tbody>
      </table>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
