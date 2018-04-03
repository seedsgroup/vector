<?php /**
 * @Author: Anusuman Pokharel
 * @Organization: Seeds Group Pvt. Ltd.
 */
class File extends Database{

	public function File(){
		$this->table(' files');
		Database::Database();
	}

	public function addFile($data){
		$File_id = $this->insert($data);
		return $File_id;
	}
	public function addServiceFile($data){
		$result = $this->insert($data);
		return $result;
	}

	public function getAllFile(){
		$this->orderBy();
		$data = $this->select();
		return $data;
	}

	public function getFileById($id){
		$this->where('id = '.$id);
		$data = $this->select();
		return $data;
	}

	public function deleteFileofService($File_id){
		$this->where(' services_id = '.$File_id);
		$del = $this->delete();
		return $del;
	}
	public function deleteFileofCarousel($File_id){
		$this->where(' carousel_id = '.$File_id);
		$del = $this->delete();
		return $del;
	}

	public function deleteFileofServiceSubCat($file_id){
		$this->where(' service_subCat_id='.$file_id);
		$del = $this->delete();
		return $del;
	}

	public function updateFile($data, $id, $is_die = false){
		$this->where(' id = '.$id);
		$update = $this->update($data, $is_die=true);
		return $update;
	}
	public function updateFileofServiceSubCat($data, $id){
		$this->where(' service_subCat_id = '.$id);
		$update = $this->update($data);
		return $update;	
	}

	public function updateServiceFile($data, $id){
		$this->where(' services_id ='.$id);
		$result = $this->update($data);
		return $result;
	}
}
