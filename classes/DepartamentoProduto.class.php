<?php

require_once 'Crud.class.php';

class Categoria extends Crud{
	
	protected $table = 'categoraia';
	       
	private $dataCadastro;
	private $quantidade;

	        
	public function getDataCadastro() {
	    return $this->dataCadastro;
	}

	public function setdataCadastro($dataCadastro) {
		$this->dataCadastro = $dataCadastro;
	}
   
    public function insert(){

		$sql  = "INSERT INTO $this->table (nome) VALUES (:nome)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
                return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
                $stmt->bindParam(':id', $id);
		return $stmt->execute();

	}
        
        public function updatePessoa($id){

		$sql  = "UPDATE $this->table SET idPessoa = :idPessoa WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':idPessoa', $this->idPessoa);
                $stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}