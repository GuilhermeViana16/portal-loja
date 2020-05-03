<?php

	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("BDNAME", "portalguilherme");

	@mysql_connect(HOST, USER, PASS) or die("Erro no BD, contate o administrador.");
	mysql_select_db(BDNAME) or die("BD desconhecido, contate o administrador.");

	

?>