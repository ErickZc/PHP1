<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		header("Location: php/main.php");
	}else{
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
	<meta charset="UTF-8">

	<style type="text/css">
		.input{
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
	<center>
	<h2>Iniciar Sesion</h2>
		<form method="post" action="php/control.php">
			<input type="text" name="txtUsuario" placeholder="USUARIO" required="" autofocus="" class="input">
			<input type="password" name="txtPassword" placeholder="PASSWORD" required="" class="input">
			<input type="submit" name="Enviar" class="button">
		</form>
	</center>
</body>
</html>

<?php 
	}
 ?>