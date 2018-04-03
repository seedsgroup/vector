<?php
/**
 * This class deals with all the file related things
 */
class File extends Database
{

  function __construct()
  {
    $this->table(" files ");
    Database::Database();
  }

  public function insertData($data){
    $result = $this->insert($data);
    return $result;
  }
}

?>
