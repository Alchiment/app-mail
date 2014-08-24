<!DOCTYPE html>
<html>
	<head  lang="es">
	<meta charset="utf-8">
	<meta name="description" content="aplication practice">
	<title>
	Practice
	</title>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style1.0.css">
	<script src="js/functions.js"></script>
	</head>
<body>
	<!-- title header -->
	<div class="header">
		<div class="title">
			<h1>Practica Php, JavaScript, HTML5 y CSS3</h1>
		</div>
		<canvas id="bd-canvas">	</canvas>
		<script>dbCanvas();</script>
	</div>
	<!-- inputs -->
	<div class="cn-input">
		<?php
		//CONNECTION
			include('pages/varcon.php');
		//CONNECTION VAR'S
			include('pages/conexion.php');
		//DELETE VALIDATION - LINK
			if(isset($_GET['elim'])){
				include('pages/eliminar.php');
				echo "<script> window.location = 'index.php'; </script>";
			}
		//EDIT VALIDATION - LINK
			if(isset($_GET['edit'])){

				$query_select = "SELECT id, fecha, mail, page FROM correos
							 WHERE id = '".$_GET['edit']."'";
				$result = mysql_query($query_select, $conn)or die(mysql_error(). " Error al cargar el query Select");
			}
		?>
	<h1>Datos</h1>
	<!-- FORM -->
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="form1"><br>
		<div class="labels">
			<label><b>Id</b></label><br>
			<label><b>Fecha</b></label><br>
			<label><b>Correo</b></label><br>
			<label><b>Pagina</b></label><br>
		</div>
		<div class="inp">
			<input class="text" type="text" name="txtId" value="<?php
				echo isset($_GET['edit'])?mysql_result($result, 0, 'id'): '';?>"/><br>
			 <input class="text" type="text" name="txtFecha" value="<?php
				echo isset($_GET['edit'])?mysql_result($result, 0, 'fecha'): '';?>" /><br>
			<input class="text" type="text" name="txtMail" value="<?php
				echo isset($_GET['edit'])?mysql_result($result, 0, 'mail'): '';?>" /><br>
			 <input class="text" type="text" name="txtPag" value="<?php
				echo isset($_GET['edit'])?mysql_result($result, 0, 'page'): '';?>" /><br>
		</div>
		<?php
//VALIDATION DELETE AND EDIT
	   if(isset($_GET['edit'])){
		?>
		<input class="btn btn-mant" type="submit" name="btnGuardar" value="Guardar">
		<input class="btn btn-mant" type="submit" name="btnCancelarNuevo" value="Cancelar">
		<?php }else{ ?>
		<input class="btn btn-mant" type="submit" name="btnNuevo" value="Nuevo">
		<?php } ?>
	</div>
	<!-- CONTENT SEARCH -->
	<div class="cn-search">
		<label><b>Busqueda de correo: </b></label>
		<input type="text" name="txtBuscar"  class="text"/>
		<input   type="submit" name="btnBuscar" value="Buscar" class="btn"/>
		<?php if(isset($_POST['btnBuscar'])){
		?>
		<?php }
		if(isset($_POST['btnCancelarBusqueda'])){
			echo "<script> window.location = 'index.php'; </script>";
		}
		?>
			<?php
				if (isset($_POST['btnBuscar'])) {
					echo "<h3>  Resultado de la busqueda </h3>";
					include('pages/buscar.php');
				}
			?>

	</div>
		<?php
			//REGISTER SEARCH
			if(isset($_POST['btnCancelarNuevo'])){
				echo "<script> window.location = 'index.php'; </script>";
			}
		?>
	<div class="cn-list">
		<?php
		//REGISTER LIST
			echo "<br>  <h2> Listado de registros </h2>";
			include('pages/listar.php');

		//BUTTON NEW
		if(isset($_POST['btnNuevo'])){
			include('pages/nuevo.php');
			echo "<script> window.location = 'index.php'; </script>";
		}
		//BUTTON UPDATE
		if(isset($_POST['btnGuardar'])){
				$query_update = "UPDATE correos
								 SET fecha = '".$_POST['txtFecha']."',
								 	 mail = '".$_POST['txtMail']."',
								 	 page = '".$_POST['txtPag']."'
								 WHERE id = '".$_POST['txtId']."'";
			echo $query_update;
			$rs_update = mysql_query($query_update, $conn);
			echo "<script> window.location = 'index.php'; </script>";
		}


		?>
	</div>
	</form>
</body>
</html>