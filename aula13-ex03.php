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
	$primo =0;
	$n = isset($_GET["n"])?$_GET["n"]:1;
	for($x=1;$x<=$n;$x++){
		if($n%$x==0){
			$primo++;
		}
	}
	if($primo<=2){
		echo"<h2>O número $n é primo!</h2>";
	}else{
		echo"<h2>O número $n não é primo!</h2>";
	}
?>
<a href="aula13-ex03.html" class="boton">Voltar</a>
</div>
</body>
</html>
