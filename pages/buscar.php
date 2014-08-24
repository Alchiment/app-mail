<?php

	$query_busqueda = "SELECT id, fecha, mail, page 
						FROM correos 
						WHERE mail = '".$_POST['txtBuscar']."'";
	$rs_busqueda = mysql_query($query_busqueda, $conn);
	
	echo "<table align='center'>";
		echo "<tr>";
			echo "<th>";
				echo "NUMERO";
			echo "</th>";
			echo "<th>";
				echo "FECHA";
			echo "</th>";
			echo "<th>";
				echo "CORREO";
			echo "</th>";
			echo "<th>";
				echo "PAGINA";
			echo "</th>";
		echo "</tr>";
	while ($fila = mysql_fetch_array($rs_busqueda)) {
		$id_bus = $fila['id'];
		$fecha_bus = $fila['fecha'];
		$mail_bus = $fila['mail'];
		$page_bus = $fila['page'];

		
		echo "<tr>";
			echo "<td>";
				echo $id_bus;
			echo "</td>";
			echo "<td>";
				echo $fecha_bus;
			echo "</td>";
			echo "<td>";
				echo $mail_bus;
			echo "</td>";
			echo "<td>";
				echo "<a href='$page_bus'> <img src='images/enlace.ico' width='18' height='18'/> </a>";
			echo "</td>";
		echo "</tr>";
	}
	echo "</table>";

?>
