<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
	<meta charset="UTF-8">
	<style type="text/css">
		h1{
			font-size: 50px;
			font-family: Triforce , verdana;
		}
		button{
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
		<h1>BIENVENIDO <?php echo $_SESSION['nombre']. ' ' . $_SESSION['apellido'] ?></h1>
		<button onclick="location.href='persona.php'">Personas</button>
		<button onclick="location.href='cerrar.php'">Cerrar Sesión</button>
	</center>
</body>
</html>

<?php 
	}else{
		header('Location: ../login.php');
	}
 ?>