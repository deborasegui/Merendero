<?php
	//include_once '../topo.php';
	include_once '../Usuario/UsuarioDao.php';
    include_once './UsuarioDao.php';
	
	//echo "<div class='centro'>
			//<h3>Registro</h3>";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Usuarios</title>
    </head>
    <body>
        <form action="RegistroOk.php" name="merendero" method="get">
			
			Fecha:<br>
            <input type="date" name="fecha" id="fecha"><br><br>
			
			Nombre Completo:<br>
            <input type="text" name="nombre" id="nombre"><br><br>
            
			Cedula de Identidad:<br>
            <input type="number" name="cedula" id="cedula" placeholder='12345678' pattern="\d{8}" required=""><br><br>
			
			LLeva merienda:<br>
            <input type="text" name="lleva" id="lleva"><br><br>
			
            <input type="submit" value="Enviar"><br><br>
            
        </form>   
    </body>
</html>

<?php
	//include_once '../rodape.php';
?>