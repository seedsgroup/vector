<?php if( (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] != "") || (isset($_COOKIE['is_logged_in']) && $_COOKIE['is_logged_in'] != "")) {
      @header('location: dashboard');
      exit;
  }
  ?>
