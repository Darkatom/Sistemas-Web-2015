<?php
	include 'credenciales.php';

	function insertarPregunta($dir_ip, $email, $pregunta, $respuesta, $tema, $complejidad){				
		////////// VALIDAR FORMULARIO //////////
		if ((strlen($pregunta) >= 16) and 
			(strlen($respuesta) >= 2) and
			(strlen($tema) >= 3) and
			($complejidad >= 1 and $complejidad <= 5)) {
						
			////////// AÑADIR A LA BASE DE DATOS //////////			
		
			$conexion = new mysqli($servidor, $usuario_servidor, $password_servidor, $nombre_bd);	// Crear la conexion
			if ($conexion->connect_error) {		// Comprobar la conexion
				return false;
			}
				
			$sql = "INSERT INTO ".$nombre_bd.".pregunta (id, pregunta, respuesta, tema, complejidad, email)
			VALUES (DEFAULT, '{$pregunta}','{$respuesta}','{$tema}','{$complejidad}','{$email}')";

			//Las preguntas solo las pueden añadir los usuarios registrados, siempre hay un email.
				
			$inserted = ($conexion->query($sql));
			
			$conexion->close();
				
			return $inserted;
		}
	}

	function insertarPreguntaXML($pregunta, $respuesta, $tema, $complejidad){	
		$xml = simplexml_load_file("preguntas.xml");
		
		$preguntaXML = $xml->addChild('assessmentItem');
			$preguntaXML->addAttribute('complexity', $complejidad); 
			$preguntaXML->addAttribute('subject', $tema); 
		
		$itemBody = $preguntaXML->addChild('itemBody');
			$itemBody->addChild('p', $pregunta);
			
		$correctResponse = $preguntaXML->addChild('correctResponse'); 
			$correctResponse->addChild('value', $respuesta);
	
		$xml->asXML('preguntas.xml');	// Guardar el fichero XML
		
		return true;  
	}

?>