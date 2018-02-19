<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "fastfood";

	$dbconn = mysql_connect($hostname,$username,$password);
	if (!($dbconn)) {
		echo "erro na conexão";
	}
	$selecao = mysql_select_db($database, $dbconn);
	if (!($selecao)) {
	 	echo"Banco de dados não localizado";
	 } 

?>
