<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 11</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h3>Curso de PHP – 11 – Estruturas de Repetição (Parte 1)</h3>
	
<?php 
	$x =1;
	while($x<=5){
		$a=$_GET["v$x"];
		echo "Valor $x :$a <br>";
		$$a ="num";
		$x++;
	}
	
?>

</div>
</body>
</html>
