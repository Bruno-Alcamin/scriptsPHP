<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 15</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>


<body>
<div>
<h3>Curso de PHP – 15 – Funções e Procedimentos (Parte 2)</h3>

<?php 
	// passagem por valor
	function add($a){
		$a+=2;
		echo $a;
		echo"<br>";
	}
	echo"<br>";
	$z=3;
	add($z);
	echo $z;
	echo"<br>";
	// passagem por referencia
	function add2(&$x){
		$x+=2;
		echo $x;
		echo"<br>";
	}
	echo"<br>";
	$x = 3;
	add2($x);
	echo $x;
	
	/* include faz a chamada de uma arquivo php com seus methods
	require faz a chamada de aquivos php porem se arquivo não for carregado 
	programa é finalizado.
	ainda existe o include_once e o require_once, quais tem a função de fazer que a 
	arquivo php seja instaciado somente uma vez no código.
	*/
	
	?>

</div>
</body>
</html>
