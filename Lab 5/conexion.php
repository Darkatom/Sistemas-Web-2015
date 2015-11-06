<?php
	//Datos MySQL de Jose Angel
	define('servidor','mysql.hostinger.es');
	define('usuario','u837753965_root');
	define('password','soyelroot');
	define('nombre_bd','u837753965_quiz');

	$conexion = mysql_connect(servidor,usuario,password);
	mysql_select_db(nombre_bd,$conexion);
	
	/*////////// UserID //////////
	Olatz	=	u432294351_;	//
	José	=	u837753965_;	//
	////////////////////////////*/
	
?> 