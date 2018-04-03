<?php
/**
 * This class deals all about ncats
 */
class ncat extends Database
{

  function __construct()
  {
    $this->table(" ncat");
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
