<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 04</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h1>Testando PHP</h1>

<?php 

	$nome="Bruno";
	$idade=25; /*(string) para declarar tipo de variavel, normalmente não necessario*/
	
	echo $nome." tem ".$idade." anos!<br>";
	echo "$nome tem $idade anos!";
?>
</div>
</body>
</html>