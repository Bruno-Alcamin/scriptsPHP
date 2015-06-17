<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 07</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h1>Verificar Voto Obrigatório</h1>

<?php 
	$ano = $_GET["a"];
	
	$idade = (2015-$ano);
	
	$voto= ($idade>=18)&&($idade<65)? "Obrigatório" : "Facultativo";
	
	echo "A sua idade atua é $idade anos, portanto o voto é: $voto";
?>
</div>
</body>
</html>
