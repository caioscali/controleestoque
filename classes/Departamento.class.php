<?php

require_once 'Crud.class.php';

class Departamento extends Crud{
	
	protected $table = 'departamento';
        
	private $nome;
    private $empresa;
        
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }
	
        
    public function insert(){

		$sql  = "INSERT INTO $this->table (nome, empresa) VALUES (:nome, :empresa)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':empresa', $this->empresa);
        
        return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, empresa= :empresa WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':empresa', $this->empresa);
        $stmt->bindParam(':id', $id);
		return $stmt->execute();

	}
        
}