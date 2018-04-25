<?php 
	session_start();
	require('conexion.php');
	if(isset($_SESSION['usuario'])){

 ?>

 	<!DOCTYPE html>
 	<html>
 	<head>
 		<title>Personas</title>
 		<meta charset="utf-8">
 		<style type="text/css">
 			table{
 				border: 1px solid #000;
 				text-align: center;
 				padding: 15px;
 				font-size: 20px;
 				width: 100%;
 			}
 			th td{
 				font-size: 50px;
 			}

 			th{
 				padding: 10px;
 				width: 25px;
 			}

 			button{
			width: 220px;
			padding: 12px;
			font-size: 15px;
			background: #2980B9  ;
			color: #fff;
			border: none;
			}
			.contenedor{
				width: 40%;
				display: block;
				margin: 0 auto;
			}

 		</style>

 	</head>
 	<body>
 		<div class="contenedor">
 			<center><h1>Datos de personas</h1></center>
 			<table>
 				<tr>
 					<th>ID</th>
 					<th>Usuario</th>
 					<th>Nombre</th>
 					<th>Apellido</th>
 				</tr>
 				<?php 
 					$sql = "CALL mostrarPersona()";
 					$resultado = $conexion->prepare($sql);
 					$resultado->execute();

 					while($respuesta = $resultado->fetch()){
 						echo "<tr>
			 					<td>{$respuesta['id_usuario']}</td>
			 					<td>{$respuesta['usuario_persona']}</td>
			 					<td>{$respuesta['nombre_persona']}</td>
			 					<td>{$respuesta['apellido_persona']}</td>
 							  </tr>";
 					}

 				 ?>
 			</table><br>
 			<center><button onclick="location.href='agregar.php'">Agregar Personas</button></center>
 		</div>


 	</body>
 	</html>

 <?php 
 	} else{
 		header('Location: ../login.php');
 	}

  ?>