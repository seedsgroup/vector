<?php
/**
 * This function handles all the operations of "About Vector"
 */
class Services extends Database
{

  public function __construct()
  {
    $this->table(' services ');
    Database::Database();
  }

public function selectAll(){
  $this->orderBy(' title asc');
  $data = $this->select();
  return $data;
}
  public function selectData($id){
    $this->fields(" services.*, files.title as image ");
  $this->join(" Left join files on files.services_id = services.id ");
    $this->where(' services.id = '.$id);
    $data =  $this->select();
    return $data;
  }

  public function updateData($data, $id){
    //Update aboutcids set column = newdata where id = 4
    $this->where(' id = '.$id);
    $result = $this->update($data);
    return $result;
  }
}

?>
