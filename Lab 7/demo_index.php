<html>
<head>
<?php
	include 'credenciales.php';
	include 'usuarios.php';
	
	session_start(); //Creamos una session
	
	$dir_ip = get_client_ip();
?>
<script>
function llamarAlPhp() {
	alert("Entro a la funcion");
	var dir_ip="255.255.255.255";
	var email="jagumiel001@ikasle.ehu.es";
	var pregunta = document.getElementById("insertarPregunta").pregunta.value; 
	var respuesta = document.getElementById("insertarPregunta").respuesta.value; 
	var tema = document.getElementById("insertarPregunta").tema.value; 
	var complejidad = document.getElementById("insertarPregunta").complejidad.value;
	alert("Preparo las variables");
	
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	alert("Hago la request");
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("answer").innerHTML = xmlhttp.responseText;
		}
	}
	alert("Abro");
	xmlhttp.open("POST","demo.php?d="+dir_ip+"&e="+email+"&p="+pregunta+"&r="+respuesta+"&t="+tema+"&c="+complejidad,true);
	xmlhttp.send();
	alert("Envio.");
}

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
		input.id = 'ed_preg';
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
		input.id = 'ed_resp';
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
		input.id = 'ed_tema';
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
		input.id = 'ed_comp';
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
		input.id = 'editarPreguntaButton';
		//input.onClick = "editarPregunta(" + id + ")";
		//input.onclick = 'editarPregunta(" + id + ");';
		input.onclick = editarPregunta("+id");

		form.appendChild(input);	

		div.appendChild(form);
	}
	
	function seleccionarPregunta( id ) {
		document.getElementById(id + "_pregunta").disabled = false;
		document.getElementById(id + "_respuesta").disabled = false;
		document.getElementById(id + "_tema").disabled = false;
		document.getElementById(id + "_complejidad").disabled = false;
		
		document.getElementById(id + "_button").value = "Enviar";
		document.getElementById(id + "_button").setAttribute("onClick", "editarPregunta("+id+");");
	}
	
	function editarPregunta( id ){//Tengo que pasarle la id.
		
		var dir_ip="255.255.255.255";
		var email="jagumiel001@ikasle.ehu.es";
		var pregunta = document.getElementById(id + "_pregunta").value; 
		var respuesta = document.getElementById(id + "_respuesta").value; 
		var tema = document.getElementById(id + "_tema").value; 
		var complejidad = document.getElementById(id + "_complejidad").value;
		
		
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				//document.getElementById("answer").innerHTML = xmlhttp.responseText;
			}
		}
		
		xmlhttp.open("POST","demo_editar.php?d="+dir_ip+"&e="+email+"&p="+pregunta+"&r="+respuesta+"&t="+tema+"&c="+complejidad+"&i="+id,true);
		xmlhttp.send();
	}
	
</script>
</head>
<body>


<form id="insertarPregunta"> 
Pregunta (*)<br/>
<input type="text" name="pregunta"">
<br/><br/>

Respuesta (*)<br/>
    <input type="text" name="respuesta"">
<br/><br/>

Tema (*)<br/>
    <input type="text" name="tema"">
<br/><br/>

Complejidad (*)<br/>
<input type="range" name="complejidad" min="1" max="5" value="1" oninput="document.getElementById('valor').textContent=value">
<output id="valor">1</output>
<br/><br/>

<input type="button" value="Enviar pregunta" name="insertarPregunta" onClick="llamarAlPhp();"/>
</form>

<!--?php
echo "<input type='button' value='Enviar pregunta' name='insertarPregunta' onClick='llamarAlPhp()/>";
?-->
</form>

<div id="answer"><b>La respuesta saldrá aquí...</b></div>

<div>
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
			$count = 1;
			
			// Con este while pretendemos escribir el contenido de la base de datos, rellenar las proximas filas.
			while($row = $result->fetch_assoc()) {
				echo "	<table id='".$row["id"]."_table' border=1 width='100%'>
							<tr>
								<th width='38%'>Pregunta</th>
								<th width='38%'>Respuesta</th>
								<th width='14%'>Tema</th>
								<th width='5%'>Complejidad</th>
								<th width='5%'></th>
							</tr>
							<tr>
								<td><input id='".$row["id"]."_pregunta' type='text' disabled value='".$row["pregunta"]."'/></td>
								<td><input id='".$row["id"]."_respuesta' type='text' disabled value='".$row["respuesta"]."'/></td>
								<td><input id='".$row["id"]."_tema' type='text' disabled value='".$row["tema"]."'/></td>
								<td><input id='".$row["id"]."_complejidad' type='text' disabled value='".$row["complejidad"]."'/></td>
								<td><input id='".$row["id"]."_button' type='button' id='".$row["id"]."_button' value='&#9998;' onClick='seleccionarPregunta(".$row["id"].");'/></td>
							</tr>
						</table>
						<div id='".$row["id"]."_div'></div>
						<br/><br/>";
				$count = $count + 1;
			}
		} else {
			echo "Todavía no has insertado ninguna pregunta. ¡No pasa nada! Puedes hacerlo aquí mismo $#8593;";
		}
							
							
		$sql = "SELECT count( id ) AS num_rows FROM pregunta";
		$row = mysqli_query($conexion, $sql);
		$total_preguntas = $row->num_rows;
							
		$conexion->close();
		
		echo "<p>Has introducido ".($count-1)."/".$total_preguntas." de nuestra base de datos. Congrats y eso.";	// Poner arriba modificando una etiqueta o algo
							
		//		Editar -> Carga formulario con datos de pregunta
		//			   -> El usuario modifica la pregunta y pulsa submit
		//			   -> La pregunta se sustituye y se actualiza la página, sin recargarla
	?>
</div>

<br>
</body>
</html>