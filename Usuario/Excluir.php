 <?php
 //include_once '../topo.php';
    include'Usuario.php';
	include'UsuarioDao.php';
    if($_GET){
		
		$id = $_GET['Id'];
	
		$objusuario = New Usuario();
		$objusuario->id = $id;
		
		$obj = new UsuarioDao();
		$obj->excluir($objusuario);
		if($obj->excluir($objusuario) == TRUE){
			echo("deletado");
			}
		else{
			echo("Error");
		}
	}
 ?>
 
 <?php
	//include_once '../rodape.php';
?>