<?php 
/*Query para la seleccion de los campos*/
			$query_lista = "SELECT id, fecha, mail, page  FROM correos";
			$temp_lista = mysql_query($query_lista, $conn);
?>


<?php 
	echo "<table align='center'>";
	/*CICLO PARA LA IMPRESION DE LOS DATOS*/

	//FILAS -- titulos
	echo "<tr>";
		echo "<th>";
			echo "No.";
		echo "</td>";
		echo "<th>";
			echo "FECHA";
		echo "</td>";
		echo "<th>";
			echo "CORREO";
		echo "</td>";
		echo "<th>";
			echo "PAGINA";
		echo "</td>";
		//condicion del boton cancelar
	echo "</tr>";
	while ($row = mysql_fetch_array($temp_lista)) {
		$id = $row['id'];
		$fecha = $row['fecha'];
		$mail = $row['mail'];
		$page = $row['page'];
		//CREACION DE LA TABLA
			//FILAS -- registros
			echo "<tr>";
				//COLUMNAS
				echo "<td>";
					echo $id;
				echo "</td>";
				echo "<td>";
					echo $fecha;
				echo "</td>";
				echo "<td>";
					echo $mail;
				echo "</td>";
				echo "<td>";
					echo "<a href='$page'> <img src='images/enlace.ico' width='18' height='18'/> </a>";
				echo "</td>";
				echo "<td>";
					echo "<a id='edi' href='?edit=$id&fecha=$fecha&mail=$mail&page=$page'><img src='images/edi.ico'  height='16' width='16''></a> ";
					echo " - ";
					echo "<a href='?elim=$id&fecha=$fecha&mail=$mail&page=$page' ><img src='images/elim.ico'  height='16' width='16''></a>";
					echo "</td>";
			echo "</tr>";
			}
	echo "</table>";
?>