<?php 

session_id('uuh38vv3v5g1t22o5qqojm6mh7'); //mostra os dados da session com este id

require_once("config.php");

session_regenerate_id(); // gera um id novo toda vez que entra

echo session_id();

var_dump($_SESSION);

 ?>