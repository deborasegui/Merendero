<?php
	//include_once '../topo.php';
	include './Usuario.php';
	include './UsuarioDao.php';	

	$objusuario = new  UsuarioDao();
	$x= $_GET['Id'];
	
	$objusuario = new UsuarioDao();
	$retorno = $objusuario->listar();

	if (isset($x)) {
		$editar = $objusuario->buscar($x);
		/*foreach($editar as $y){
			
			echo $y->nombre;
		}*/
	}
	echo "<div class='centro'>
			<h3>Editar</h3>";
?>

<html>
    <head>
        <title>Merendero</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <form  name="usuario" action="EditarOk.php" method="get">
            <fieldset>
                <legend></legend>
				
                Fecha:<br>
                <input type="date" name="Fecha" id="Fecha" required  value="<?php foreach($editar as $y){echo $y->Fecha;}?>" ><br><br>
				
				Nombre Completo:<br>
                <input type="text" name="Nombre" id="Nombre" required  value="<?php foreach($editar as $y){echo $y->Nombre;}?>" ><br><br>
				
				Cedula de Identidad:<br>
                <input type="number" name="Cedula" id="Cedula" placeholder='12345678' pattern="\d{8}" required  value="<?php foreach($editar as $y){echo $y->Cedula;}?>" ><br><br>
				
				LLeva Merienda:<br>
                <input type="text" name="Lleva" id="Lleva" required  value="<?php foreach($editar as $y){echo $y->Lleva;}?>" ><br><br>
				
				<input type="hidden" name="Id" id="Id" value="<?php foreach($editar as $y){echo $y->Id;}?>">
				
                <input type="submit" value="Enviar"> <input type="reset" value="Limpiar">
            </fieldset>
        </form>

    </body>
</html>

<?php
	//include_once '../rodape.php';
?>