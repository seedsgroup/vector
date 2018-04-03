 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="padding: 2rem 0;">Change Picture</h4>
        </div>
        <div class="modal-body">
          <form class="form form-horizontal" action="controller/insertImage.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-md-2 control-label">Change with</label>
              <div class="col-md-4">
                <input type="file" class="form-control" name="image" accept="image/*">
                <input type="hidden" name="id" value="<?php echo $getData[0]->id;?>">
                <input type="hidden" name="pre_image" value="<?php echo $getData[0]->image;?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-success"><?php echo ucfirst("upload"); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>