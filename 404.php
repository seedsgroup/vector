<?php include 'inc/header.php';
      include 'inc/menu.php'; ?>
      <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
      <style>
          
      </style>
<div class="container">
  <div class="col-md-5">
    <img src="<?php echo file_url; ?>/boy.png" alt="Boy staring" class="img img-responsive">
  </div>
  <div class="col-md-7"  style="padding: 2em;">
    <h1 style="font-family: 'Sedgwick Ave Display', cursive;"><strong>Seems like you are on wrong page.</strong></h1>
    <h3>Please go back to previous page or return to home page before i takeout my sword!!</h3>
  </div>
  <center>
  <button class="btn btn-success" onclick="goBack()">Go Back</button>
  <a href="./" class="btn btn-primary">Homepage</a>
</center>
</div>
<?php include 'inc/footer.php'; ?>

<script>
function goBack() {
    window.history.back();
}
</script>
