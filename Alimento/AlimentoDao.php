<?php
	//include_once '../topo.php';
	include_once 'Alimento.php';


	class AlimentoDao{
   
		public function inserir(Alimento $alimento){
			$connection;
			try {
				$connection = new PDO('mysql:host=127.0.0.1;dbname=merendero', 'root', '');
				$connection->beginTransaction();
				$sql = "INSERT INTO alimento (nombre, unidad ) VALUES (:nombre, :unidad)";
				$preparedStatment = $connection->prepare($sql);
				//$preparedStatment->bindValue(":id",$alimento->id);
				$preparedStatment->bindValue(":nombre",$alimento->nombre);
				$preparedStatment->bindValue(":unidad",$alimento->unidad);
				$preparedStatment->execute();
				//var_dump($preparedStatment);
				$connection->commit();
				RETURN TRUE;
			} catch (PDOException $exc) {
				if ((isset($connection)) && ($connection->inTransaction())) {
					$connection->rollBack();
				}
				echo $exc->getMessage();
				return FALSE;
			} finally {
				if (isset($connection)) {
					unset($connection);
				}
			}   
		}
		
		public function buscar($x) {
			$connection = new PDO('mysql:host=127.0.0.1;dbname=merendero', 'root', '');
			$connection->beginTransaction();
			$sql = "SELECT * FROM alimento WHERE id = $x";
			$preparedStatment = $connection->prepare($sql);
			$preparedStatment->execute();
			$printar = $preparedStatment->fetchAll(PDO::FETCH_OBJ);
			return $printar;
			$connection->commit();
		}
			
		public function listar(){
		try{
			$connection = new PDO('mysql:host=127.0.0.1;dbname=merendero', 'root', '');
			$sql = "SELECT * FROM alimento";
			$preparedStatment = $connection->prepare($sql);
			
			if ($preparedStatment->execute() == TRUE) {
				return $preparedStatment->fetchAll();
			}
			else {
				return array();
			}
		} catch (PDOException $ex) {
			if ((isset($connection)) && ($connection->inTransaction())) {
				$connection->rollBack();
			}
			print $ex->getMessage();
		}finally {
			if (isset($connection)) {
				unset($connection);
			}
		}
		
		$retorno = mysqli_query($connection, $sql);
		
		return $retorno;
		
	}
		
		public function editar(Alimento $alimento){
			
			$connection;

			try{
				$connection = new PDO('mysql:host=localhost;dbname=merendero', 'root', '');
				$sql = "UPDATE alimento SET nombre = :nombre, unidad = :unidad  WHERE id = :id";
				$preparedStatment = $connection->prepare($sql);
				$preparedStatment->bindParam(":id",$alimento->id);
				$preparedStatment->bindParam(":nombre",$alimento->nombre);
				$preparedStatment->bindParam(":unidad",$alimento->unidad);
				
				$retorno = $preparedStatment->execute();
				//$connection->commit(););
				//var_dump($retorno);		
				return $retorno;
				
			} catch (PDOException $exc) {
				if ((isset($connection)) && ($connection->inTransaction())) {
					$connection->rollBack();
				}
				echo $exc->getMessage();
				return FALSE;
			} finally {
				if (isset($connection)) {
					unset($connection);
				}
			} 		
		}
		
		public function excluir(Alimento $alimento){
			try{
				$connection = new PDO('mysql:host=localhost;dbname=merendero', 'root', '');
				$sql = "DELETE FROM alimento WHERE id = :id";
				$preparedStatment = $connection->prepare($sql);
				$preparedStatment->bindValue(":id", $alimento->id);			
				
				$retorno = $preparedStatment->execute();
						//$connection->commit(););
				return $retorno;
				
			} catch (PDOException $exc) {
				if ((isset($connection)) && ($connection->inTransaction())) {
					$connection->rollBack();
				}
				echo $exc->getMessage();
				return FALSE;
			} finally {
				if (isset($connection)) {
					unset($connection);
				}
			} 	
		}
	}
?> 
<?php
	//include_once '../rodape.php';
?>


