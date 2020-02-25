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

    public function findAllDepartamento(){
        $sql  = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
	
        
    public function insert(){
        $desativado = false;
		$sql  = "INSERT INTO $this->table (nome, empresa, desativado) VALUES (:nome, :empresa, :desativado)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':empresa', $this->empresa);
        $stmt->bindParam(':desativado', $desativado);
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

    public function desativar($id){
        $desativado = true;
        $sql  = "UPDATE $this->table SET desativado = :desativado WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':desativado', $desativado);  
        return $stmt->execute();

    }
        
}