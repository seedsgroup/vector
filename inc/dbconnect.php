<?php
 $conn=mysqli_connect(DBHOST,DBUSER,DBPASSWORD) OR die("Error in establishing database connection due to ".mysqli_error($conn)." right now.");$db=mysqli_select_db($conn,DBNAME) OR die(" ".mysqli_error($conn)." ");?>
