<?php 
	try{
		$dato = "mysql:host=localhost;dbname=Ejemplo";
		$conexion = new PDO($dato, 'root', '');
	}
	catch(PDOException $e){
		echo 'Error: ' . $e->getMessage();
	}
 ?>