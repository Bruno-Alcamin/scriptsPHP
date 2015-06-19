<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 10</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h3>Curso de PHP – 10 – Estruturas Condicionais (Parte 2)</h3>

<?php 
	$op = isset($_GET["est"])?$_GET["est"]:0;
	switch($op){
		case 1:
			echo "Você mora na Região Norte";
			break;
		case 2:
			echo "Você mora na Região Nordeste";
			break;
		case 3:
			echo "Você mora na Região Centro-Oeste";
			break;
		case 4:
			echo "Você mora na Região Sudeste";
			break;
		case 5:
			echo "Você mora na Região Sul";
			break;	
	}
?>
<a href="aula10-ex03.html" class="boton">Voltar</a>
</div>
</body>
</html>
