<?php
/**
 * This class deals about the career related things
 */
class Career extends Database
{

  function __construct()
  {
    $this->table(" career ");
    Database::Database();
  }

  public function insertData($data){
    $result = $this->insert($data);
    return $result;
  }

}

?>
