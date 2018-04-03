<?php
/**
 * This class deals with the career related things
 */
class Career extends Database
{

  function __construct()
  {
    $this->table(' career ');
    Database::Database();
  }

  public function getAllData(){
    $this->fields(" career.*, files.title as cv, job_cat.title as job_title ");
    $this->join(" left join files on files.career_id = career.id left join job_cat on job_cat.id = career.job_cat_id");
    $this->orderBy(" career.id DESC");
    $result = $this->select();
    return $result;
  }

  public function getOneData($id){
    $this->fields(" career.*, files.title as cv, job_cat.title as job_title ");
    $this->join(" left join files on files.career_id = career.id left join job_cat on job_cat.id = career.job_cat_id");
    $this->where(" career.id =".$id);
    $result = $this->select();
    return $result;
  }

  public function deleteData($id){
    $this->where(" id=".$id);
    return $this->delete();
  }
}

?>
