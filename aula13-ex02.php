<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 13</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>


<body>
<div>
<h3>Curso de PHP – 13 – Estruturas de Repetição (Parte 3)</h3>

<?php 
	$n = isset($_GET["n"])?$_GET["n"]:1;
	echo"<h2> A tabuada de $n:</h2>";
	for($x=1;$x<=10;$x++){
		echo "$n x $x = ". ($n*$x). "<br>";
	}
?>
<a href="aula13-ex02.html" class="boton">Voltar</a>
</div>
</body>
</html>
