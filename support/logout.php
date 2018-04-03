<?php
session_start();
setcookie('is_logged_in', 1, time()-60);
session_destroy();
header('location: ./');
exit;  			
?>
