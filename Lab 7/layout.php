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
                                if (!empty($email)) {
                                    echo '<p><a onClick="logout()">Log Out</a>.</p>';
                                } else {
                                    echo '<p>Hola, usuario anónimo</p>';
                                    echo notLogged();
                                }
                                echo '<p>¿Aún no tienes cuenta? <a href="registro.html">Regístrate</a>.</p>';
                            ?>
                		</div>
                    	
                		<div class="dark-panel-bottom"></div>
              		</div>
                    <div class="dark-panel">
                    <div class="dark-panel-center">
                        <ul>
                            <li>
                                <h1>Menú</h1>
                            </li>
                            <li class="date"><a href="layout.php">Inicio</a></li>
                            <li class="date"><a href="quiz.php">Preguntas</a></li>
                            <li class="date"><a href="creditos.html">Créditos</a></li>
                        </ul>
                    </div>
                	<div class="dark-panel-bottom"></div>
              	</div>
            </div>
            
            <div class="right-column">
				<div class="right-column-content">
                	<div class="right-column-content-heading">
                  		<h1>&nbsp;</h1>
                        <h1>Quiz</h1>
                        <h2>&nbsp; </h2>
                        <h2>Aquí se visualizan las preguntas y los créditos... </h2>
                        <p>&nbsp;</p>
                        <p>NOTA: ESTAMOS PROBANDO PARA OCULTAR EL FORM SI HAY UNA SESSION ACTIVA, Y QUE APAREZCA LOGOUT EN SU DEFECTO.</p>
                	</div>
                	<div class="right-column-content-content">
                  		<p>Posible cuadro de texto auxiliar.</p>
                  		<div class="button"><a href="#" >Null</a></div>
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
