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
	<form method="get" action="aula11-ex03.php">
<?php 
	$c =1;
	while($c<=5){
		echo "<label> Valor $c 
		<input type='number' name='v$c' min='0' max='100'>
		</label> <br>";
		$c++;
	}
?>
	<input type="submit" value="Enviar">
	</form>
</div>
</body>
</html>
