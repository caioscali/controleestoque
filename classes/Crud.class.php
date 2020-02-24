<?php

require_once '../config/DB.class.php';

abstract class Crud extends DB{

	protected $table;
        

	abstract public function insert();
	abstract public function update($id);

	public function find($id){
		$sql  = "SELECT * FROM $this->table WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}
        
    public function findAll($ordem){
		$sql  = "SELECT * FROM $this->table order by :ordem";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':ordem', $ordem, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id){
		$sql  = "DELETE FROM $this->table WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

}