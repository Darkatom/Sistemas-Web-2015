<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

	/*$d = intval($_GET['d']);
	$e = intval($_GET['e']);
	$p = intval($_GET['p']);
	$r = intval($_GET['r']);
	$t = intval($_GET['t']);
	$c = intval($_GET['c']);*/
	
	$d = ($_GET['d']);
	$e = ($_GET['e']);
	$p = ($_GET['p']);
	$r = ($_GET['r']);
	$t = ($_GET['t']);
	$c = ($_GET['c']);

	//INFO SERVIDOR:
	$servidor = 'mysql.hostinger.es';
	$usuario_servidor = 'u837753965_root';
	$password_servidor = 'soyelroot';
	$nombre_bd = 'u837753965_quiz';
	
	$conexion = mysqli_connect($servidor,$usuario_servidor,$password_servidor,$nombre_bd);
	$sql = "INSERT INTO ".$nombre_bd.".pregunta (id, pregunta, respuesta, tema, complejidad, email)
		VALUES (DEFAULT, '{$p}','{$r}','{$t}','{$c}','{$e}')";

		//Las preguntas solo las pueden añadir los usuarios registrados, siempre hay un email.
			
		$inserted = ($conexion->query($sql));
		
		$conexion->close();
			
		return $inserted;
?>
</body>
</html>