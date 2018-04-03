<?php
/**
 * This class deals with all the things related to news and events
 */
class News extends Database
{

  function __construct()
  {
    $this->table(" events ");
    Database::Database();
  }

  public function selectall(){
    $this->fields(" events.*, ncat.title as catType ");
    $this->join(" Left join ncat on ncat.id=events.type");
    $this->orderBy(" events.event_date Desc");
    $data = $this->select();
    return $data;
  }
}

?>
