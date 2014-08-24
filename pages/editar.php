<html>
<head>
	<title>
		
	</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
<?php 
//VARIABLES DE LA CONEXION
include('varcon.php');
//CONEXION DE BDD
include('conexion.php');

	//Validacion del boton eliminar
	if(isset($_GET['edit'])){


		$query_select = "SELECT id, fecha, mail, page FROM correos
						 WHERE id = '".$_GET['edit']."'";
		
		$result = mysql_query($query_select, $conn)or die(mysql_error(). " Error al cargar el query Select");
		
	}
	?>
</form>	
</body>
</html>