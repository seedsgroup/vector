<?php $current_page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME); include('class/services.php'); $getServices = new Services();?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="assets/images/avatar/profile_pic.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $name; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Selecting all the categories of services -->
    <?php $services = $getServices->selectAll(); ?>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header" style="color: white;">Menus</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="disabled"><a href="#"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
      <li class="<?php echo($current_page == 'aboutVector')? 'active' : '';?>"><a href="aboutVector"><i class="fa fa-home"></i> <span>About Vector</span></a></li>
      <li class="<?php echo (($current_page == 'events') || ($current_page=="list_events"))? 'active' : '';?>"><a href="list_events"><i class="fa fa-calendar-check-o "></i> <span>News/Events</span></a></li>
      <li class="<?php echo ($current_page == 'career')? 'active' : '';?>"><a href="career"><i class="fa fa-newspaper-o"></i> <span>Resumes</span></a></li>
      <li class="<?php echo ($current_page == 'ncat')? 'active' : '';?>"><a href="ncat"><i class="fa fa-link"></i> <span>Add News/Event Category</span></a></li>
      <li class="<?php echo ($current_page == 'enquiry')? 'active' : '';?>"><a href="enquiry"><i class="fa fa-info"></i> <span>Enquiry</span></a></li>

      <li class="treeview <?php echo (($current_page == 'services'))? 'active' : ''; ?>">
        <a href="#"><i class="fa fa-link"></i> <span>Our Services</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <?php foreach ($services as $key => $value): ?>
            <li><a href="services?id=<?php echo ($value->id); ?>"> <?php echo $value->title; ?><span></span> </a></li>
          <?php endforeach ?>
        </ul>
      </li>
      </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
