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
	for($n=1;$n<=10;$n++){
		echo "$n ";
	}
	echo "<br><br>";
	
	for($x=10;$x>=1;$x--){
		echo "$x ";
	}
	echo "<br><br>";
	
	for($x=0;$x<=50;$x+=5){
		echo "$x ";
	}
	echo "<br><br>";
	
	for($x=20;$x>=0;$x-=2){
		echo "$x ";
	}
?>

</div>
</body>
</html>
