<!-- Model for adding new sub categories -->
<div class="modal fade" id="subCat" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add new service on <?php echo ($getData[0]->title); ?></h4>
        </div>
        <div class="modal-body">
          <form class="form form-horizontal" action="controller/service_subCat.php" method="Post" data-parsley-validate>
            <div class="form-group">
              <label class="col-md-2 control-label">New Service on <?php echo ($getData[0]->title); ?></label>
              <div class="col-md-4">
                <input type="text" id="newCat" class="form-control" name="newCat">
                <input type="hidden" name="service_id" value="<?php echo $getData[0]->id;?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-success" id="addCat"><?php echo strtoupper("Add"); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

<!-- Model for editing description -->
<?php foreach ($getCats as $key => $value): ?>
  <div class="modal fade" id="subDes<?php echo ($key+1)?>" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update <?php echo ($value->sub_cat); ?></h4>
          </div>
          <div class="modal-body">
            <form class="form form-horizontal" action="controller/service_subCat.php" method="Post" data-parsley-validate>
              <div class="form-group">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title" id='title' value="<?php echo ($value->sub_cat)? $value->sub_cat : ''; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <textarea class="form-control" style="resize: vertical;" name="description" id="description">
                    <?php echo ($value->description)? html_entity_decode(stripslashes(ucfirst($value->description))) : ''; ?>
                  </textarea>
                </div>
              </div>
                  <input type="hidden" name="service_id" value="<?php echo $value->service_id;?>">
                  <input type="hidden" name="id" value="<?php echo $value->id; ?>">
              <div class="form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-success form-control" id="addCat"><strong><?php echo strtoupper("Edit"); ?></strong></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
<?php endforeach; ?>

<!-- Model for adding adding picture -->
<?php foreach ($getCats as $key => $value): ?>
  <?php if(empty($value->sub_cat_image)){ $act = "add"; }else{ $act = "change"; } ?>
   <div class="modal fade" id="tabPic<?php echo($key+1); ?>" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="padding: 2rem 0;"><?php echo ucfirst($act) ?> Picture of <?php echo $value->sub_cat; ?></h4>
        </div>
        <div class="modal-body">
          <form class="form form-horizontal" action="controller/service_subCat_image.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-md-2 control-label"><?php echo ucfirst($act); ?> with</label>
              <div class="col-md-4">
                <input type="file" class="form-control" name="image" accept="image/*">
                <input type="hidden" name="id" value="<?php echo $value->id;?>">
                <input type="hidden" name="service_id" value="<?php echo $value->service_id; ?>">
                <?php if($act != "add"){?>
                  <input type="hidden" name="pre_image" value="<?php echo $value->sub_cat_image;?>">
                <?php } ?>
                
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-success"><?php echo ucfirst($act); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
<?php endforeach; ?>