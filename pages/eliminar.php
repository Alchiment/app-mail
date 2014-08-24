<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php 
/*PARA LA ELIMINACION DE UN REGISTRO*/
//se toma el id que en este caso es llamado elim del link que se pasa desde el formulario
	if(isset($_GET['elim'])){
		$query_eliminar = "DELETE FROM correos
							WHERE id = '".$_GET['elim']."'";
		$result = mysql_query($query_eliminar, $conn) or die(mysql_error()."Fallo query eliminar");
		//se redirecciona al index para evitar fallos
		header("location: index.php");
	}
?>
</form>	
</body>
</html>
