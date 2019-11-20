 <?php
 //include_once '../topo.php';
    include'Alimento.php';
	include'AlimentoDao.php';
    if($_GET){
		
		$id = $_GET['id'];
	
		$objalimento = New Alimento();
		$objalimento->id = $id;
		
		$obj = new AlimentoDao();
		$obj->excluir($objalimento);
		if($obj->excluir($objalimento) == TRUE){
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