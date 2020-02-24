<?php

require_once 'Crud.class.php';

class Produto extends Crud{
	
	protected $table = 'produto';
        
		private $descricao;
        private $marca;
        private $numeroPatrimonio;
        
        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getMarca() {
            return $this->marca;
        }

        public function setMarca($marca) {
            $this->marca = $marca;
        }
		
		public function getNumeroPatrimonio() {
			return this->numeroPatrimonio = $numeroPatrimonio;
		}
		
		public function serNumeroPatrimonio() {
			this->marca = $marca;
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