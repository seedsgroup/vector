<?php
/**
 * This class deals all about jobs
 */
class session extends Database
{

  function __construct()
  {
    $this->table(" session");
    Database::Database();
  }

  public function selectData(){
    $result= $this->select();
    return $result;
  }

  public function selectOneData($id){
    $this->where(" id=".$id);
    $result = $this->select();
    return $result;
  }

  public function insertData($data){
    $result = $this->insert($data);
    return $result;
  }

}

?>
