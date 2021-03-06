<?php 
	include 'credenciales.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Preguntas</title>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'/>
        <link href="estilos/personalizado.css" rel="stylesheet" type="text/css" />
        <link rel='stylesheet' 
       	type='text/css' 
       	media='only screen and (max-width: 480px)'
       	href='estilos/smartphone.css' />
        <style type="text/css">
        .wrapper .page div .right-column-content-heading div table tr td p {
	font-family: Verdana, Geneva, sans-serif;
}
        .wrapper .page div .right-column-content-heading div table tr td p {
	font-family: Verdana, Geneva, sans-serif;
}
        </style>
</head>
    
    
    <body>
        <div class="wrapper">
        	<div class="logo-menu-container">
            	<div class="logo">Quiz: el juego de las preguntas</div>
          	</div>
          	<div class="page">
          	  <div>
               	<div class="right-column-content-heading">
                  		<h1>&nbsp;</h1>
                        <h1>Lista de Preguntas</h1>
                        <h2>&nbsp; </h2>
                  <h2>&nbsp;</h2>
                  <div align="center">
            		<!--Aqui metemos el PHP para que se haga la conexion con la BD-->
                    <?php				
					
						function get_client_ip() {
							$ipaddress = '';
							if (getenv('HTTP_CLIENT_IP'))
								$ipaddress = getenv('HTTP_CLIENT_IP');
							else if(getenv('HTTP_X_FORWARDED_FOR'))
								$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
							else if(getenv('HTTP_X_FORWARDED'))
								$ipaddress = getenv('HTTP_X_FORWARDED');
							else if(getenv('HTTP_FORWARDED_FOR'))
								$ipaddress = getenv('HTTP_FORWARDED_FOR');
							else if(getenv('HTTP_FORWARDED'))
							   $ipaddress = getenv('HTTP_FORWARDED');
							else if(getenv('REMOTE_ADDR'))
								$ipaddress = getenv('REMOTE_ADDR');
							else
								$ipaddress = 'UNKNOWN';
							return $ipaddress;
						}
						
						/////// INFO SERVIDOR ///////
						$servidor 	= "mysql.hostinger.es";
						$usuario 	= "u837753965_root";	//Olatz: u432294351_root; Jose: u837753965_root; Nombre de usuario para acceder a la BD.
						$password 	= "soyelroot";	//Password de la BD en Hostinger
						$nombre_bd 	= "u837753965_quiz";	//Olatz: u432294351_quiz; Jose: u837753965_quiz; Nuestra base de datos se llama "quiz".
                        
						$email = $_POST['email'];
						$dir_ip = get_client_ip();

                        // Crear la conexion
                        $conexion = new mysqli($servidor, $usuario_servidor, $password_servidor, $nombre_bd);
                        
                        // Comprobar la conexion
                        if ($conexion->connect_error) {
                            die("La conexion ha fallado: " . $conexion->connect_error);
                        }
                    
                        $sql = "SELECT * FROM pregunta";		//Sentencia, seleccionar todos los campos de la tabla pregunta.
                        $result = mysqli_query($conexion, $sql);
                        $num_col = $result->num_rows;
                        
                        //Anado esto:
                        if ($num_col > 0) {
                            //Aqui dibujamos la primera fila (row) de la tabla.
                            echo "
                            <table border=3>
                                <tr>
                                    <th>Pregunta</th>
                                    <th>Complejidad</th>
                                </tr>
                            "; 
                            
                            // Con este while pretendemos escribir el contenido de la base de datos, rellenar las proximas filas.
                            while($row = $result->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td>".$row["pregunta"]."</td>
                                    <td>".$row["complejidad"]."</td>
                                </tr>";
                            }//La complejidad igual puede ser una imagen.
                            echo "</table>";
                        } else {
                            echo "La tabla está vacía. No hay entradas en la base de datos.";
                        }
						if($email=NULL){
							$sql_accion = "INSERT INTO ".$nombre_bd.".acciones (id_accion, id_conexion, email, tipo, hora, ip)
							VALUES (DEFAULT, DEFAULT ,'NULL', '2', DEFAULT, '{$dir_ip}')";
							//Vamos a suponer tipo=1 para insertar y tipo=2 para ver, ya que en nuestra tabla es un int.
						}else{
							$sql_accion = "INSERT INTO ".$nombre_bd.".acciones (id_accion, id_conexion, email, tipo, hora, ip)
							VALUES (DEFAULT, DEFAULT ,'{$email}', '2', DEFAULT, '{$dir_ip}')";
							//Vamos a suponer tipo=1 para insertar y tipo=2 para ver, ya que en nuestra tabla es un int.
						}
						if ($conexion->query($sql_accion) === TRUE) {
							echo "La accion realizada se ha agregado a la base de datos correctamente.";
						} else {
							echo "Error: " . $sql_accion . "<br>" . $conexion->error;
						}
						
						
                        $conexion->close();
                    ?>
                    <!--Fuente: http://www.w3schools.com/php/php_mysql_select.asp-->
				</div>
               	</div>
          	  </div>
          </div>
        </div>
        <div class="footer-wrapper">
          <p align="center" class="date"><a href="layout.html">Volver</a><a href="https://github.com"></a></p>
        </div>
</body>

</html>
