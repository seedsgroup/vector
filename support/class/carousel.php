<?php
class carousel extends Database{

	public function carousel(){
		$this->table(' carousel ');
		Database::Database();
	}

	public function addcarousel($data){
		$carousel_id = $this->insert($data);
		return $carousel_id;
	}

	public function getAllcarousel(){
		$this->fields(" carousel.*, files.title as image ");
		$this->join(" Left JOIN files ON files.carousel_id = carousel.id ");
		$this->orderBy(" carousel.id DESC");
		$data = $this->select();
		return $data;
	}

	public function getcarouselById($id){
		$this->fields(" carousel.*, files.title as image ");
		$this->join(" Left JOIN files ON files.carousel_id = carousel.id ");
		$this->where(' carousel.id = '.$id);
		$data = $this->select();
		return $data;
	}

	public function deletecarousel($carousel_id){
		$this->where(' id = '.$carousel_id);
		$del = $this->delete();
		return $del;
	}


	public function updatecarousel($data, $id){
		$this->where(' id = '.$id);
		$update = $this->update($data);
		return $update;
	}
}
