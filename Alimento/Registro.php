<?php
	/*include_once '../topo.php';

	echo "<div class='centro'>
				<h3>Registro</h3>";*/
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Merendero</title>
    </head>
    <body>
        <form action="RegistroOk.php" name="merendero" method="get">
		
			Nombre:<br>
            <input type="text" name="nombre" id="nombre"><br><br>
            			
			Unidad:<br>
            <input type="text" name="unidad" id="unidad"><br><br>
			
            <input type="submit" value="Enviar"><br><br>
            
        </form>  
       
    </div>
<?php
    include'./Alimento.php';
    if($_GET){
			echo "entrouu";
		$nombre = $_GET['nombre'];
		$unidad = $_GET['unidad'];
	}
	
	//include_once '../rodape.php';
?>

	</body>
</html>