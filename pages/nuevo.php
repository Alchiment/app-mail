<?php
//CREACION DE NUEVO REGISTRO
//validacion boton enviar
					
	//almacenado de valiables
		
			$vFecha = $_POST['txtFecha'];
			$vMail = $_POST['txtMail'];
			$vPagina = $_POST['txtPag'];
			//insercion de datos
			$query_insert = "INSERT INTO correos values (null, '".$vFecha."', '".$vMail."', '".$vPagina."')";
			$resultado= mysql_query($query_insert, $conn)or die(mysql_error()."Error al crear un nuevo registro");

			echo $resultado;
			
?>		
