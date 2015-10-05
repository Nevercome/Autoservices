<?php

define ('DB_HOST', 'localhost');
define ('DB_USERNAME', 'root');
define ('DB_PASSWORD','');
define ('DB_NAME', 'admin');
define ('DB_TABLE','admin');


	$conect = @mysql_connect(DB_HOST,DB_USERNAME,DB_PASSWORD) or die("No se encontró el servidor: " . mysql_error());
	mysql_select_db(DB_NAME,$conect)or die("No se encontró la base de datos: " . mysql_error());

	

 ?>