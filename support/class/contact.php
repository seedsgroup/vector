<?php
/**
 * this class is for all the operation of contact
 */
class Contact extends Database
{
  public function contact(){
    try{
      $this->table(' contact ');
      Database::Database();
    }catch(Exception $e){
      error_log(date('Y-m-d h:m:s A').":".$e->getMessage(), 3, "error.log");
      return false;
    }
  }
  public function getContact(){
    try{
        $data = $this->select();
        return $data;
        }
        catch(Exception $e){
        error_log(date('Y-m-d h:m:s A').":".$e->getMessage(), 3, "error.log");
        return false;
      }
  }

  public function updateContact($data, $is_die=false){
    try {
      $this->where(' id = 1');
      $result = $this->update($data, $is_die=false);
    } catch (Exception $e) {
      error_log(date('Y-m-d h:m:s A').":".$e->getMessage(), 3, "error.log");
      return false;
    }

  }
}

?>
