<form>

<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit" value="OK">

<!-- Quando nao define o metod o padrao eh GET-->

</form>

<?php

if (isset($_GET)) {

// sem  definir o metod o padrao eh GET

	foreach ($_GET as $key => $value) {
		
		echo "Nome do campo: " . $key . "<br>"; //nome dos campos

		echo "Valor do campo: " . $value . "<br>"; // o que digitar nos campos

		echo "<hr>";
	}
}

?>