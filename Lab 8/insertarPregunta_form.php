<?php
	include 'usuarios.php';
	session_start();
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
    </head>
    
    
    <body>
        <div class="wrapper">
        	<div class="logo-menu-container">
            	<div class="logo">Quiz: el juego de las preguntas</div>
          	</div>
          	<div class="page">
            	<div class="left-column">
            	  <div class="dark-panel">
                    <div class="dark-panel-center">
							<?php
                                $email = $_SESSION["email"];
								$profe = 'web000@ehu.es';
								if(!isset($_SESSION['email'])){ 
									$mensaje="Lo sentimos, no puedes estar aquí si no estás registrado.";
									echo "<script type='text/javascript'>alert('$mensaje');</script>";
									header("Location: layout.php");
								}
                                if (!empty($email)) {
									if (strcmp($email, $profe) === 0){
										echo menuProfe();
									}else{
                                    	echo menuRegistrado();
									}
                                } else {
                                    echo menuNoRegistrado();
                                }
                            ?>
                        <p>&nbsp;</p>
                        <p class="date"><a href="logout.php">Logout</a></p>
                        <!--Con javascript se puede ocultar con la variable none.-->
                    </div>
                	<div class="dark-panel-bottom"></div>
              	</div>
            </div>
            
            <div class="right-column">
				<div class="right-column-content">
                	<div class="right-column-content-heading">
                  		<h1>&nbsp;</h1>
                        <h1>Insertar Pregunta</h1>
                        <h2>&nbsp; </h2>
                        <h2>Utilice el siguiente formulario para publicar una pregunta en nuestro sistema.</h2>
                	</div>
                	<div class="right-column-content-content">
                  		<form id='insertarPregunta' name='registro' action="insertarPregunta.php" method="post" enctype="multipart/form-data" > 
						Pregunta (*)<br/>
						<input type="text" name="pregunta" onBlur = "checkPregunta()">
						<br/><br/>
                        
                        Respuesta (*)<br/>
				    		<input type="text" name="respuesta" onBlur = "checkRespuesta()">
						<br/><br/>
						
                        Tema (*)<br/>
				    		<input type="text" name="tema" onBlur = "checkTema()">
						<br/><br/>
						
						Complejidad (*)<br/>
                        <input type="range" name="complejidad" min="1" max="5" value="1" oninput="document.getElementById('valor').textContent=value">
                        <output id="valor">1</output>
                        <br/><br/>
                        
                        <input type="submit" value="Enviar pregunta" name="enviarPregunta" >

					</form>
                	</div>
              	</div>
			</div>
          </div>
        </div>
        <div class="footer-wrapper">
            <p align="center" class="date"><a href="http://es.wikipedia.org/wiki/Quiz">¿Qué es un Quiz?</a></p>
            <p align="center" class="date"><a href="https://github.com">Link Github</a></p>
        </div>
    </body>

</html>