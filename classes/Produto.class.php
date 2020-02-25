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
			return $this->numeroPatrimonio;
		}
		
		public function setNumeroPatrimonio($numeroPatrimonio) {
			$this->numeroPatrimonio = $numeroPatrimonio;
		}

		public function findAllProdutos(){
			$sql  = "SELECT p.id AS id, p.descricao AS descricao, p.marca AS marca, p.numeroPatrimonio AS numeroPatrimonio,
			 c.descricao AS categoria, dp.dataCadastro AS dataCadastro, dp.quantidade AS quantidade,
			 d.nome AS departamento, d.empresa AS empresa
			 FROM produto AS p
					 INNER JOIN categoria AS c ON p.idCategoria = c.id
					 INNER JOIN departamentoprodutos AS dp ON p.id = dp.idProduto	
					 INNER JOIN departamento AS d ON dp.idDepartamento = d.id";
			$stmt = DB::prepare($sql);
			$stmt->execute();
			return json_encode ($stmt->fetchAll());
		}
        
        public function insert(){

			$sql  = "INSERT INTO $this->table (descricao, marca, numeroPatrimonio) VALUES (:descricao, :marca, :numeroPatrimonio)";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':descricao', $this->descricao);
			$stmt->bindParam(':marca', $this->marca);
			$stmt->bindParam(':numeroPatrimonio', $this->numeroPatrimonio);
            
            return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET  descricao = :descricao, marca = :marca, numeroPatrimonio = :numeroPatrimonio WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':marca', $this->marca);
		$stmt->bindParam(':numeroPatrimonio', $this->numeroPatrimonio);
        $stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

	
        
}