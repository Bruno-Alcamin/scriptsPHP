<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 09</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h1>Curso de PHP – 09 – Estruturas Condicionais (Parte 1)</h1>

<?php 
	$p1 = isset($_GET["p1"])?$_GET["p1"]:0;
	$p2 = isset($_GET["p2"])?$_GET["p2"]:0;
	$media = ($p1+$p2)/2;
	if($media<6){
		echo "A média entre". number_format($p1,1). " e ". number_format($p2,1). " é ". number_format($media,1). " e você esta de Reprovado!";
	}else{
		echo "A média entre". number_format($p1,1). " e ". number_format($p2,1). " é ". number_format($media,1). " e você esta de Aprovado!";
	}

	
?>
<a href="aula09-ex02.html" class="boton">Voltar</a>
</div>
</body>
</html>
