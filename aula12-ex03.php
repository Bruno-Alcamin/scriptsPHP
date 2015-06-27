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
	$f =1;
	echo "<h2>A tabuaa do $n:</h2>";
	do{
		$tab = $n*$f;
		echo "$n x $f = $tab"."<br>";
		$f++;
	}while($f<=10);
?>

</div>
</body>
</html>
