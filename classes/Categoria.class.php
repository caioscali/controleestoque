<?php

require_once 'Crud.class.php';

class Categoria extends Crud{
	
	protected $table = 'categoria';
        
	private $descricao;
        
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
        
    public function insert(){

		$sql  = "INSERT INTO $this->table (descricao) VALUES (:descricao)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':descricao', $this->descricao);
        return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET descricao = :descricao WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':id', $id);
		return $stmt->execute();

	}
        

}