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