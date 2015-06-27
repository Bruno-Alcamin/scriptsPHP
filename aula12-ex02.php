<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 12</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h3>Curso de PHP – 12 – Estruturas de Repetição (Parte 2)</h3>

<?php 
	$n=isset($_GET["n"])?$_GET["n"]:1;
	$fat = $n;
	$f=$n-1;
	echo "Fatorial ";
	do{
		$fat = $fat*$f;
		$f--;
	}while($f>=1);
	echo $fat;
?>

</div>
</body>
</html>
