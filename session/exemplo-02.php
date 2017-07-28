<?php 
 
//session_start();

require_once("config.php");

//session_unset($_SESSION["nome"]); // com o nome da variavel limpa só ela, sem ela, apaga todas as variaveis

echo $_SESSION['nome']; //chamando a session

//session_destroy(); // limpa as variaveis e remove o usuario do site ( forçando um novo acesso )

 ?>