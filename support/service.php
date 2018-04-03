	<style type="text/css">
		.img1{
			margin: 2em 2em 2em 2em; float: right;
		}
		.clearfix{
			overflow: auto;
		}
    ul#sub_cat_options > li{
      float: left !important;
      display: inline !important;
    } 
	</style>
	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
              	<?php foreach ($getCats as $key => $value): ?>
                    <a href="#" class="list-group-item text-left <?php echo($key == 0)? 'active' : ''; ?>">
                    <?php echo $value->sub_cat; ?>
                  </a>
              	<?php endforeach ?>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">

                <!-- section starts here -->
                <?php foreach ($getCats as $key => $value): ?>
                <div class="bhoechie-tab-content <?php echo($key == 0)? 'active' : ''; ?>">
                    <center>
                    	<div class="clearfix"></div>
                    	<?php if(!empty($value->sub_cat_image)){ ?> 
                     <div class="img1">
				        <div style="background:url(<?php echo upload_file_url.$value->sub_cat_image; ?>) no-repeat; width: 200px; height: 200px; background-size: contain; background-position: center center; border: none;">
				          <a href="#" class="btn btn-success" id="tabUploadBtn" data-toggle="modal" data-target="#tabPic<?php echo ($key+1); ?>"> <i class="fa fa-fw fa-upload"></i></a>
				      </div>
				  </div>
				  <?php }else{ ?> 
				  	<div class="img1">
				  		<a href="#" class="btn btn-success headerButton" data-toggle="modal" data-target="#tabPic<?php echo ($key+1); ?>"> Upload Image</a>
				  	</div>
				  <?php } ?>
          <ul id='sub_cat_options'>
            <li>
              <a href="#" class="btn btn-info headerBtn" data-toggle="modal" data-target="#subDes<?php echo ($key+1); ?>"><i class="fa fa-fw fa-pencil"></i> Update <span style="padding-left: 5%;"></span></a>&nbsp; &nbsp;
            </li>
            <li>
              <a href="controller/delete_service_subCat?id=<?php echo $value->id; ?>&page=<?php echo $value->service_id; ?>&type=<?php echo substr(sha1("delete-".$value->id), 9, 9); ?>" class="btn btn-danger headerBtn" title='Delete' id="delete_subCat"><i class="fa fa-trash"></i> &nbsp;Delete</a>            
            </li>
          </ul>
          <br/><br/>
          <?php echo ($value->description)? html_entity_decode(stripslashes(ucfirst($value->description))) : 'Not Available'; ?>
            </center>
          </div>

                <?php endforeach ?>
                <!-- section ends here -->

            </div>
        </div>
  </div>

<script type="text/javascript">
  $('#delete_subCat').click(function(e){
    alert("Are you sure you want to delete this?");
  });  
</script>