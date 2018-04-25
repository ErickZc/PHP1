<?php 
	session_start();
	if(isset($_SESSION['usuario'])){

 ?>

 	<!DOCTYPE html>
 	<html>
 	<head>
 		<title>Agregar</title>
 		<style type="text/css">
		input{
			width: 200px;
			padding: 10px;
			font-size: 15px;
			display: block;
			margin: 10px 0;
			font-family: Triforce;
			border: 1px solid #000; 
		}
		h2{
			font-family: Triforce;
			font-size: 50px;
		}
		.button{
			width: 220px;
			padding: 12px;
			font-size: 15px;
			background: #2980B9  ;
			color: #fff;
			border: none;
		}
	</style>
 	</head>
 	<body>
 		<h2>Agregar Persona</h2>
 		<form method="POST" action="control.php">
 			<input type="text" name="addNombre" placeholder="Nombre" required="">
 			<input type="text" name="addApellido" placeholder="Apellido" required="">
 			<input type="text" name="addUsuario" placeholder="Usuario" required="">
 			<input type="password" name="addPass" placeholder="Password" required="">
 			<input type="submit" name="agregar" class="button">
 		</form>
 	</body>
 	</html>

 <?php 
 	}else{
 		header('Location: ../login.php');
 	}
  ?>