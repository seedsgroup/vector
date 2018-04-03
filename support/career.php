<?php include "inc/header.php"; include "class/career.php"; $career = new Career();?>
<link rel="stylesheet" href="<?php echo datatables_css; ?>dataTables.bootstrap4.min.css">
<div class="wrapper">
<?php include "inc/topMenu.php"; ?>
<?php include "inc/sidebar.php"; ?>
<?php include "pages/careerContent.php"; ?>
<?php include "inc/footer.php"; ?>
<script src="<?php echo datatables_js; ?>jquery.dataTables.min.js" charset="utf-8"></script>
<script src="<?php echo datatables_js; ?>dataTables.bootstrap4.min.js" charset="utf-8"></script>
<script type="text/javascript">
  $('table').dataTable();
</script>
