<?php

namespace Model;

use Model\Database;

class Geral{

	protected $db = null;
	
	public function __construct(){
		$this->db = Database::getInstance()->getDB();
	}


	public function all(){
		$sql = "SELECT * FROM procedures ORDER BY name";
		return $this-> db->query($sql);

	}	

}