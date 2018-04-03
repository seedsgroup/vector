<?php
/**
 * This class deals about the enquiry related things
 */
class Enquiry extends Database
{

  function __construct()
  {
    $this->table(" enquiry ");
    Database::Database();
  }

  public function insertData($data){
    $result = $this->insert($data);
    return $result;
  }

}

?>
