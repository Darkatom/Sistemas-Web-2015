<?php
	include 'credenciales.php';
	include 'usuarios.php';
	
	session_start(); //Creamos una session
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
    
		<script>
			function abrirFormEditarPregunta( id ) {
							
				var table = document.getElementById(id + "_table");
				
				var pregunta = table.rows[1].cells[0].innerHTML;
				var respuesta = table.rows[1].cells[1].innerHTML;
				var tema = table.rows[1].cells[2].innerHTML;
				var complejidad = table.rows[1].cells[3].innerHTML;
							
				var div = document.getElementById(id + "_div");
				var form = document.createElement('FORM');
				form.id = id + "_form";
				form.name = 'editar';
				form.method = 'POST';
				form.action = 'editarPregunta()';

				var text = document.createTextNode("Pregunta (*)");
				form.appendChild(text);
				
				var br = document.createElement("br");
				form.appendChild(br);
				
				var input = document.createElement('INPUT');
				input.type = 'text';
				input.name = 'pregunta';
				input.onBlur = 'checkPregunta()';
				input.value = pregunta;
				form.appendChild(input);
				
				form.appendChild(br);
				form.appendChild(br);
			
				text = document.createTextNode("Respuesta (*)");
				form.appendChild(text);
				form.appendChild(br);
				
				input = document.createElement('INPUT');
				input.type = 'text';
				input.name = 'respuesta';
				input.onBlur = 'checkRespuesta()';
				input.value = respuesta;
				form.appendChild(input);
				
				form.appendChild(br);
				form.appendChild(br);
			
				text = document.createTextNode("Tema (*)");
				form.appendChild(text);
				form.appendChild(br);
				
				input = document.createElement('INPUT');
				input.type = 'text';
				input.name = 'tema';
				input.onBlur = 'checkTema()';
				input.value = tema;
				form.appendChild(input);
				
				form.appendChild(br);
				form.appendChild(br);
			
				text = document.createTextNode("Complejidad (*)");
				form.appendChild(text);
				form.appendChild(br);
				
				input = document.createElement('INPUT');
				input.type = 'range';
				input.name = 'complejidad';
				input.oninput = "document.getElementById('valor').textContent=value";
				input.value = complejidad;
				form.appendChild(input);
								
				var output = document.createElement('OUTPUT');
				output.id = 'editar' + id;
				form.appendChild(output);
				
				form.appendChild(br);
				form.appendChild(br);
				
				input = document.createElement('INPUT');
				input.type = 'button';
				input.value = "Editar pregunta";
				input.name = 'editarPreguntaButton';
				input.onClick = "editarPregunta(" + id + ")";
				form.appendChild(input);	

				div.appendChild(form);
			}

			function editarPregunta( id ) {							
				var form = document.getElementById(id + "_form");
				
				var pregunta = form.pregunta;
				var respuesta = form.respuesta;
				var tema = form.tema;
				var complejidad = form.complejidad;
				
				// AJAX - Editar pregunta
				
				var table = document.getElementById(id + "_table");
				
				table.rows[1].cells[0].innerHTML = pregunta;
				table.rows[1].cells[1].innerHTML = respuesta;
				table.rows[1].cells[2].innerHTML = tema;
				table.rows[1].cells[3].innerHTML = complejidad;
				
			}
			
			function insertarPregunta( form ) {							
				//Permite al usuario introducir una pregunta sin salir de la página actual.
				var pregunta = form.pregunta;
				var respuesta = form.respuesta;
				var tema = form.tema;
				var complejidad = form.complejidad;
				alert("hola");
				// AJAX - Añadir pregunta
				
				var table = document.getElementById(id + "_table");
				
				// AJAX - Insertar tabla con nueva pregunta
				/*
					table.rows[1].cells[0].innerHTML = pregunta;
					table.rows[1].cells[1].innerHTML = respuesta;
					table.rows[1].cells[2].innerHTML = tema;
					table.rows[1].cells[3].innerHTML = complejidad;
				*/
			}
		
		</script>
	
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
                        <ul>
                            <li>
                                <h1>Menú</h1>
                            </li>
                            <li class="date"><a href="layout.html">Inicio</a></li>
                            <li class="date"><a href="quizes">Preguntas</a></li>
                            <li class="date"><a href="creditos.html">Créditos</a></li>
                        </ul>
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
                        <h1>Gestión de tus Preguntas</h1>
                        <h2>&nbsp; </h2>
                	</div>
					
					<input type="button" value="Nueva pregunta" onClick="display(insertarPregunta)" align="center"/>
					
                	<div class="right-column-content-content" style="display:none">
                  		<form id='insertarPregunta' name='registro' method="post" enctype="multipart/form-data" > 
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
                        
                        <input type="button" value="Enviar pregunta" name="insertarPregunta" onClick="insertarPregunta(this)"  >

						</form>
                	</div>
					
					<?php
					
						//Miramos si esta logeado, en caso de no estarlo, FUERA!
						if(!isset($_SESSION['email'])){ 
							$mensaje="Lo sentimos, no puedes estar aquí si no estás registrado.";
							echo "<script type='text/javascript'>alert('$mensaje');</script>";
							sleep(5);
							header("Location: layout.php");
						}
						// Cargar BD
						// Sacar preguntas del usuario
						// Imprimir preguntas + Botón editar
						
							
						// CONEXIÓN BASE DE DATOS
						$conexion = new mysqli($servidor, $usuario_servidor, $password_servidor, $nombre_bd);

						if ($conexion->connect_error) {
							die("La conexion ha fallado: " . $conexion->connect_error);
						}
							
						// HACER CONSULTA
                        $sql = "SELECT * FROM pregunta WHERE pregunta.email='{$_SESSION['email']}'";     

						//SELECT * FROM pregunta WHERE pregunta.email = 'jagumiel001@ikasle.ehu.es'
						$result = mysqli_query($conexion, $sql);
                        $num_col = $result->num_rows;
                        
                        //Añado esto:
                        if ($num_col > 0) {
                            //Aquí dibujamos la primera fila (row) de la tabla.
                            $div_id = 1;
                            
                            // Con este while pretendemos escribir el contenido de la base de datos, rellenar las proximas filas.
                            while($row = $result->fetch_assoc()) {
                                echo "	<table id='".$div_id."_table' border=1 width='100%'>
											<tr>
												<th width='38%'>Pregunta</th>
												<th width='38%'>Respuesta</th>
												<th width='14%'>Tema</th>
												<th width='5%'>Complejidad</th>
												<th width='5%'></th>
											</tr>
											<tr>
												<td>".$row["pregunta"]."</td>
												<td>".$row["respuesta"]."</td>
												<td>".$row["tema"]."</td>
												<td>".$row["complejidad"]."</td>
												<td><input type='button' id='".$div_id."_button' value='&#9998;' onClick='abrirFormEditarPregunta(".$div_id."); this.onClick = null;'/></td>
											</tr>
										</table>
										<div id='".$div_id."_div'></div>
										<br/><br/>";
								$div_id = $div_id + 1;
                            }
                        } else {
							echo "Todavía no has insertado ninguna pregunta. ¡No pasa nada! Puedes hacerlo aquí mismo $#8593;";
                        }
											
											
						$sql = "SELECT count( id ) AS num_rows FROM pregunta";
						$row = mysqli_query($conexion, $sql);
						$total_preguntas = $row->num_rows;
											
                        $conexion->close();
						
						echo "<p>Has introducido ".($div_id-1)."/".$total_preguntas." de nuestra base de datos. Congrats y eso.";	// Poner arriba modificando una etiqueta o algo
											
						//		Editar -> Carga formulario con datos de pregunta
						//			   -> El usuario modifica la pregunta y pulsa submit
						//			   -> La pregunta se sustituye y se actualiza la página, sin recargarla
					?>
					
					
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