<?php
/**
 * This function handles all the operations of "About BEA"
 */
class aboutVector extends Database
{

  public function __construct()
  {
    $this->table(' about');
    Database::Database();
  }

  public function selectData($id){
    $this->where(' id = '.$id);
    $data =  $this->select();
    return $data;
  }

  public function updateData($id, $data){
    //Update aboutcids set column = newdata where id = 4
    $this->where(' id = '.$id);
    $result = $this->update($data);
    return $result;
  }
}

?>
