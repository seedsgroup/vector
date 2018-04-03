<div id="sgFooter">
<div class="wrapper row4">
  <footer id="footer" class="clear" style="padding-top: 40px !important; padding-bottom: 20px !important;width: 80% !important; margin: 0 auto;">
    <div class="one_third first">
      <div class="row">
        <div class="col-md-6 pull-left">
          <img src="<?php echo images_url; ?>/logo.png" class="img img-responsive" alt="">
        </div>
        <div class="col-md-6">
        </div>
      </div>
      <h3>Contact us at</h3>
      <?php foreach ($alldetails as $key => $value): ?>
      <div class="down-optional">
        <i class="fa fa-mobile fa-lg"></i> <span class="spacing" title="MOBILE NUMBER">(+977)-<?php echo ($value->Mphone)? $value->Mphone : ''; ?></span>
        <span class="inbetween">
            <i class="fa fa-map fa-lg"></i> <span class="spacing"><?php echo ($value->location)? $value->location : ''; ?></span>
        </span>
      </div>
      <br>
      <div class="down-optional">
          <i class="fas fa-phone-volume"></i> <span class="spacing"><?php echo ($value->Ophone)? $value->Ophone : ''; ?></span>
          <span class="inbetween">
            <i class="fas fa-envelope"></i> <span class="spacing"><?php echo ($value->email)? $value->email : ''; ?></span>
        </span>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="one_third">
      <h6 class="title" style="font-size: 2.2rem; padding:0 !important; margin: 0 0 5% 0 !important;">Our Services</h6>
      <ul class="nospace linklist contact">
        <li class="footerBtn"><a class="footermenu" href="service?id=7; ?>">Software</a></li>
        <li class="footerBtn"><a class="footermenu" href="service?id=11; ?>">Energy</a></li>
        <li class="footerBtn"><a class="footermenu" href="service?id=12; ?>">Education</a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title xs-hidden" style="font-size: 2.2rem; padding:0 !important; margin: 0 0 5% 0 !important; color: transparent">&nbsp;</h6>
      <ul class="nospace linklist contact">
        <li class="footerBtn"><a class="footermenu" href="service?id=9; ?>">Avation</a></li>
        <li class="footerBtn"><a class="footermenu" href="service?id=10; ?>">Civil</a></li>
        <li class="footerBtn"><a class="footermenu" href="service?id=8; ?>">Telecom</a></li>
      </ul>
    </div>
</footer>
</div>
<div class="wrapper row5">
<div id="copyright" class="clear" style="width: 80% !important; margin: 0 auto;">
  <?php foreach ($alldetails as $key => $value): ?>
<p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="http://www.vgpl.com.np/"><?php echo ($value->name)? $value->name : ''; ?></a></p>
<p class="fl_right">Website of <a target="_blank" href="http://www.vgpl.com.np/" title="vector"><?php echo ($value->name)? $value->name : ''; ?></a></p>
<?php endforeach; ?>
</div>
</div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?php echo js_url; ?>/jquery.min.js"></script>
<script src="<?php echo js_url; ?>/bootstrap.min.js" charset="utf-8"></script>
<script src="<?php echo js_url; ?>/jquery.stellar.min.js" charset="utf-8"></script>
<?php if(($current_page == "index.php") || ($current_page == "index") || ($current_page == '')){?> 
<script type="text/javascript" src="<?php echo plugin_url; ?>slick/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo js_url; ?>/seedsScript.js"></script>
<?php } ?>

<script src="<?php echo js_url; ?>/jquery.backtotop.js"></script>
<script src="<?php echo js_url; ?>/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="<?php echo js_url; ?>/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
