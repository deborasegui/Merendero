<?php
	//include_once '../topo.php';
	include_once 'Usuario.php';


	class UsuarioDao{
	   
	   public function inserir(Usuario $usuario){
			$connection;
			try {
			
				$connection = new PDO('mysql:host=127.0.0.1;dbname=merendero', 'root', '');
				$connection->beginTransaction();
				$sql = "INSERT INTO usuario (fecha, nombre, cedula, lleva) VALUES (:fecha, :nombre, :cedula, :lleva)";
				$preparedStatment = $connection->prepare($sql);
				$preparedStatment->bindParam(":fecha",$usuario->fecha);
				$preparedStatment->bindParam(":nombre",$usuario->nombre);
				$preparedStatment->bindParam(":cedula",$usuario->cedula);
				$preparedStatment->bindParam(":lleva",$usuario->lleva);
				$preparedStatment->execute();
			
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
			$sql = "SELECT * FROM usuario WHERE id = $x";
			$preparedStatment = $connection->prepare($sql);
			$preparedStatment->execute();
			$printar = $preparedStatment->fetchAll(PDO::FETCH_OBJ);
			return $printar;
			$connection->commit();
		}
			
		public function listar(){
			try{
				$connection = new PDO('mysql:host=127.0.0.1;dbname=merendero', 'root', '');
				$sql = "SELECT * FROM usuario";
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
		
		public function editar(Usuario $usuario){
			
			$connection;
			
			try{
				$connection = new PDO('mysql:host=localhost;dbname=merendero', 'root', '');
				$sql = "UPDATE usuario SET Fecha = :fecha, Nombre = :nombre, Cedula = :cedula, Lleva = :lleva WHERE Id = :id";
				$preparedStatment = $connection->prepare($sql);
				$preparedStatment->bindParam(":id",$usuario->id);
				$preparedStatment->bindParam(":fecha",$usuario->fecha);
				$preparedStatment->bindParam(":nombre",$usuario->nombre);
				$preparedStatment->bindParam(":cedula",$usuario->cedula);
				$preparedStatment->bindParam(":lleva",$usuario->lleva);
				
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
		
		public function excluir(Usuario $usuario){
			try{
				$connection = new PDO('mysql:host=localhost;dbname=merendero', 'root', '');
				$sql = "DELETE FROM usuario WHERE id = :id";
				$preparedStatment = $connection->prepare($sql);
				$preparedStatment->bindValue(":id", $usuario->id);			
				
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