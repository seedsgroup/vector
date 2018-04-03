  <link rel="stylesheet" type="text/css" href="<?php echo css_url; ?>/test.css">
  <style type="text/css">
    .img1{
      margin: 2em 2em 2em 2em; float: right;
      width: 25%;
      height: auto;
    }
    .clearfix{
      overflow: auto;
    }
  </style>
  <div class="row" style="margin-bottom: 2em !important;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
          <div class="list-group">
            <?php foreach ($getSubCatData as $key => $value): ?>
              <a href="#" class="list-group-item text-center <?php echo($key == 0)? 'active' : ''; ?>">
                <?php echo $value->sub_cat; ?>
              </a>
            <?php endforeach ?>
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
          <!-- section starts here -->
          <?php foreach ($getSubCatData as $key => $value): ?>
          <div class="bhoechie-tab-content <?php  echo($key == 0)? 'active' : ''; ?>">
            <center>
              <div class="clearfix"></div>
              <?php if(!empty($value->sub_cat_image)){ ?> 
              <img src="<?php echo images_url."/".$value->sub_cat_image; ?>" class="img-thumbnail img1">
      <?php }?> 
              <?php echo ($value->description)? html_entity_decode(stripslashes(ucfirst($value->description))) : 'Not Available'; ?>
            </center>
          </div>
          <?php endforeach ?>
            <!-- section ends here -->
        </div>
    </div>
  </div>
<script type="text/javascript" src="<?php echo js_url; ?>/test.js"></script>