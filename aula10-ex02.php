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
	$op = isset($_GET["dia"])?$_GET["dia"]:1;
	switch($op){
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			echo "Hoje você tera aula!";
			break;
		case 6:
		case 7:
			echo "Hoje é dia de folga!";
			break;
		default:
			echo "ERRO!!!";	
	}
?>
<a href="aula10-ex02.html" class="boton">Voltar</a>
</div>
</body>
</html>
