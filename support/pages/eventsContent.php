<?php
if(isset($_GET) && !empty($_GET)){
  $id=sanitize($_GET['id']);
  $type = substr(sha1("view-".$id), 9, 9);
  if($type == $_GET['type']){
    $confirmData = $allEventData->selectOneData($id);
    if($confirmData){
      $act="update";
    }else{
      $_SESSION['error']="Event doesn't exists or already deleted.";
      ?>
      <script>
          window.location.replace('http://support.vgpl.com.np/list_events');
      </script>
     <?php exit;
    }
  }else{
    $_SESSION['error']="Invalid Request!";
    ?>
      <script>
          window.location.replace('http://support.vgpl.com.np/list_events');
      </script>
     <?php
    exit;
  }
}else{
  $act="add";
}
?>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vac10evlzh1ylmepy70qr1q28wkygjzqa36g98uakma5l2jc"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo ucfirst($act)." Events"; ?>
       <small>
        <a href="list_events.php" class="btn btn-success"> <i class="fa fa-undo"></i> Go Back </a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?php echo ucfirst($act)." Event"; ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
      <?php include "inc/notification.php"; ?>
      <form class="form-horizontal" action="<?php echo ($act == 'update')? 'controller/updateEvents' : 'controller/addEvents'; ?>" method="post">
        <div class="form-group">
          <label class="col-md-2 control-label">Event title: </label>
          <div class="col-md-6">
            <input type="text" required class="form-control" name="title" value="<?php echo($act=="update")? $confirmData[0]->title : ''; ?>">
            <?php if($act == "update"){?>
                <input type="hidden" name="id" value="<?php echo $confirmData[0]->id; ?>">
        <?php    } ?>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Event Summary: </label>
          <div class="col-md-6">
            <textarea name="summary" class="form-control"><?php echo ($act=="update")? $confirmData[0]->summary : ''; ?></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Event Description: </label>
          <div class="col-md-6">
            <textarea name="description" class="form-control"><?php echo ($act=="update")? $confirmData[0]->description : ''; ?></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Location: </label>
          <div class="col-md-6">
            <input type="text" name="location" class="form-control" value="<?php echo ($act=="update")? $confirmData[0]->location : ''; ?>">
          </div>
        </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Event Date: </label>
        <div class="col-md-6">
          <input type="date" class="form-control" name="event_date" value="<?php echo ($act=="update")? $confirmData[0]->event_date : ''; ?>">
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-2 control-label">Event Category: </label>
        <div class="col-md-6">
          <select class="form-control" name="type">
            <option disabled <?php echo ($act != "update")? 'selected': ''; ?>>Select any one</option>
            <?php foreach ($allCats as $key => $value): ?>
            <option value="<?php echo $value->id; ?>" <?php echo (($act == "update") && ($confirmData[0]->type == $value->id))? 'selected': ''; ?>> <?php echo ($value->title)? $value->title : ''; ?> </option>
            <?php endforeach ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">Show at front?</label>
        <div class="col-md-6">
          <select class="form-control" name="front">
            <option disabled <?php echo ($act != "update")? 'selected': ''; ?>>Select any one</option>
            <option value="1" <?php echo (($act == "update") && $confirmData[0]->front == 1)? 'selected' : '';  ?>>Yes</option>
            <option value="0" <?php echo (($act == "update") && $confirmData[0]->front == 0)? 'selected' : '';  ?>>No</option>
          </select>
        </div>
      </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-md-6">
            <button type="submit" class="btn btn-success"><?php echo ucfirst($act)." Event"; ?></button>
          </div>
        </div>
      </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
         tinymce.init({
            selector: 'textarea',
            height: 300,
            theme: 'modern',
             plugins: [
                 'codesample imagetools',
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect ',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
         });
      </script>
