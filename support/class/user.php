<?php
  /**
   * This class will do all the operation regarding user
   */
  class User extends Database
  {
    public function User(){
      $this->table('users');
      Database::Database();
    }
    public function getUserByUsername($username){
      $this->where(" username = '$username'");
      $data = $this->select();
      return $data;
    }
    public function updatePassword($data, $id){
      $this->where(" id=".$id);
      $result = $this->update($data);
      return $result;
    }
  }

?>
