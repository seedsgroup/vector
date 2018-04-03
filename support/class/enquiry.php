<?php
/**
 * This class process all the function and operations regarding the enquiry
 */
class Enquiry extends Database
{

  public function Enquiry()
  {
    $this->table('enquiry');
    Database::Database();
  }

  public function selectAllEnquiry(){
    $this->orderBy('added_date asc');
    $data = $this->select();
    return $data;
  }

  public function selectOneEnquiry($id){
    $this->where(" id=".$id);
    return $this->select();
  }
  public function deleteData($id){
    $this->where(" id=".$id);
    return $this->delete();
  }
}

?>
