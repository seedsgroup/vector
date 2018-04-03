<?php 
/**
 * This call deals with all the services sub-categories
 */
 class Service_subCat extends Database
 {
 	
 	function __construct()
 	{
 		$this->table(' sub_cat ');
 		Database::Database();
 	}

 	public function selectAll(){
 		$data = $this->select();
 		return $data;
 	}
 	public function SelectAllCatsByService($id){
 		$this->fields(" sub_cat.*, files.title as sub_cat_image ");
 		$this->join(" left join files on files.service_subCat_id = sub_cat.id ");
 		$this->where(" sub_cat.service_id =".$id);
 		$this->orderBy(' sub_cat.sub_cat asc');
 		$data = $this->select();
 		return $data;
 	}
 	public function selectData($id){
 		$this->fields(" sub_cat.*, files.title as sub_cat_image ");
 		$this->join(" left join files on files.service_subCat_id = sub_cat.service_id ");
 		$this->where(" sub_cat.id=".$id);
 		$data = $this->select();
 		return $data;
 	}
 	public function insertData($data){
 		$result= $this->insert($data);
 		return $result;
 	}

 	public function updateData($data, $id){
 		$this->where(" id=".$id);
 		$result = $this->update($data);
 		return $result;
 	} 

 	public function deleteOne($id){
 		$this->where(" id=".$id);
 		$result = $this->delete();
 		return $result;
 	}
}

?>