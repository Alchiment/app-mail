
<?php 

/*Conexion base de datos */
	$conn = mysql_connect($host, $user, $pass) or die("Conexion fallida".mysql_error());
	@mysql_select_db($bdd);
		if (!$conn) {
			echo "Error al conectar la bdd".mysql_error();
		}
?>
