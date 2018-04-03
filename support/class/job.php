<?php
/**
 * This class deals all about jobs
 */
class job extends Database
{

  function __construct()
  {
    $this->table(" job_cat");
    Database::Database();
  }

  public function selectData(){
    $this->orderBy(" title ASC");
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

  public function deleteData($id){
    $this->where(" id=".$id);
    return $this->delete();
  }
}

?>
