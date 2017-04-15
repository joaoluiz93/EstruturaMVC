<?php 

class Login extends Model{

	public function getLogin(){

		$array = array();

		$sql = "SELECT * FROM login";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

}

 ?>