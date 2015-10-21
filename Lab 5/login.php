<?php
	/////// INFO SERVIDOR ///////
	$servidor 	= "mysql.hostinger.es";
	$usuario 	= "u432294351_root";	//Nombre de usuario para acceder a la BD (UserID_root).
	$password 	= "soyelroot";			//Password de la BD en Hostinger
	$nombre_bd 	= "u432294351_quiz";	//Nuestra base de datos se llama "quiz" (UserID_quiz).
	/////////////////////////////

	/*////////// UserID //////////
	Olatz	=	u432294351_;		//
	José	=	u837753965_;		//
	////////////////////////////*/

	
	////////// CONSULTAR LA BASE DE DATOS //////////			
	// Abrir la conexion
	$conexion = new mysqli($servidor, $usuario, $password, $nombre_bd);
	
	// Comprobar la conexion
	if ($conexion->connect_error) {
		die("La conexion ha fallado: " . $conexion->connect_error);
	}
	
	// $_POST['email']
	// $_POST['password']
	
	//INSERT INTO `u837753965_quiz`.`usuario` (`Email`, `Nombre`, `Apellido1`, `Apellido2`, `Password`, `Teléfono`, `Especialidad`, `Intereses`, `Foto`) VALUES ('nuevouser001 2ikasle.ehu.es', 'Nuevo', 'Test', 'Prubas', '123456', '123456789', 'Software', NULL, 
	//VALUES (email, nombre, apellido1, apellido2, pass, telefono, especialidad, intereses, fileToUpload)";
	$sql = "SELECT ".$nombre_bd." email, password FROM usuario WHERE email = ".$_POST['email']." and password = ".$_POST['password'];
		
	if ($conexion->query($sql) === TRUE) {
		$conexion->close();
		header('Location: insertarPregunta.php');
	} else {
		$conexion->close();
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	/////////////


?> 
            