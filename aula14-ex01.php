<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 14</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>


<body>
<div>
<h3>Curso de PHP – 14 – Funções e Procedimentos (Parte 1)</h3>

<?php 
	//procedimento
	function soma($a, $b){
		$soma=$a+$b;
		echo"<p>A soma vale: $soma</p>";
	}
	
	soma(3,4);
	
	// função
	
	function soma2($a,$b){
		return $a+$b;
	}
	
	$x =5;
	$y =5;
	$valor = soma2($y,$x);
	echo"<p>valor da soma é: $valor</p>";
?>

</div>
</body>
</html>
