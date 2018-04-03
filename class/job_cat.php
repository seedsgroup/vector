<?php
/**
 * This class deals with the job categories
 */
class JobCategory extends Database
{

  function __construct()
  {
    $this->table(" job_cat ");
    Database::Database();
  }

  public function selectall(){
    $this->orderBy(' title asc ');
    $data=$this->select();
    return $data;
  }
}

?>
