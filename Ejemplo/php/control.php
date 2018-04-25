<?php 
	session_start();
	require('conexion.php');

	if(isset($_POST['Enviar'])){
		$usuario = $_POST['txtUsuario'];
		$pass = $_POST['txtPassword'];
		$sql = 'select * from persona where usuario_persona = :usuario AND password_persona = :pass';
		$resultado = $conexion->prepare($sql);
		$resultado->execute(array(':usuario' => $usuario, ':pass' => $pass));

		if($resultado == true){

			while($respuesta = $resultado->fetch()){
				$nombreU = $respuesta['nombre_persona'];
				$apellidoU = $respuesta['apellido_persona'];
				$usuarioU = $respuesta['usuario_persona'];
				$password = $respuesta['password_persona'];
			}

			$_SESSION['usuario'] = $usuarioU;
			$_SESSION['apellido'] = $apellidoU;
			$_SESSION['nombre'] = $nombreU;
			$_SESSION['pass'] = $password;

			header('Location: main.php');
		}

	}
	else if(isset($_POST['agregar'])){
		$addNombre = $_POST['addNombre'];
		$addApellido = $_POST['addApellido'];
		$addUsuario = $_POST['addUsuario'];
		$addPass = $_POST['addPass'];

		echo $addNombre;
		echo $addApellido;
		echo $addUsuario;
		echo $addPass;

		$sql = 'CALL addPersona(:nombre, :apellido, :usuario, :password)';
		$resultado = $conexion->prepare($sql);
		$resultado->execute(array(':nombre'=>$addNombre, ':apellido'=>$addApellido,':usuario'=>$addUsuario,':password'=>$addPass));
		if($resultado == true){
			header('Location: persona.php');
		}
	}
	else{
		header('Location: ../login.php');
	}
 ?>