<?php 

require_once("config.php");

echo session_save_path(); //mostra onde eh salvo o arquivo temporario da sessao

echo "<br>";

var_dump(session_status()); // mostra status (0, 1 ou 2) da sessao"habilitada", "ativa"

switch (session_status()) {

	case PHP_SESSION_DISABLED:
		echo("AS SESSOES ESTAO DESABILITADAS");
		break;
	case PHP_SESSION_NONE:
		echo("AS SESSOES ESTAO HABILITADA, MAS NAO EXISTE SESSAO");
		break;
	case PHP_SESSION_ACTIVE:
		echo("AS SESSOES ESTAO HABILITADA, E EXISTE SESSAO");
		break;
	default:
		echo("ERRO");
		break;
}
 ?>