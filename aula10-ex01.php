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
	$n1 = isset($_GET["num"])?$_GET["num"]:0;
	$op = isset($_GET["calc"])?$_GET["calc"]:0;
	switch($op){
		case 1:
			echo "O dobro do número $n1 é:". ($n1*2);
			break;
		case 2:
			echo "O cubo do número $n1 é:". pow($n1,3);
			break;
		case 3:
			echo "O cubo do número $n1 é:". sqrt($n1);
			break;
		default:
			echo "ERRO!!!";	
	}
?>
<a href="aula10-ex01.html" class="boton">Voltar</a>
</div>
</body>
</html>
