<?php
  function debugger($var, $is_die = false){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if($is_die){
      exit;
    }
  }
  function sanitize($string){
		if(get_magic_quotes_gpc()){
			$string = trim(stripslashes($string));
		}
			$string = strip_tags($string);
			$string = trim($string);
		return $string;
	}

function getStatus($status){
	if($status == 1){
		return "Active";
	} else if($status == 0){
		return "Inactive";
	} else {
		return "Other";
	}
}

function getFileExtension($fileName){
  $ext = pathinfo($fileName, PATHINFO_EXTENSION);
  return $ext;
}
?>
