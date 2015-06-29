<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 19</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>


<body>
<div>
<h3>Curso de PHP – 19 – Vetores e Matrizes (Parte 2)</h3>
<pre>
<?php 
	
	$v = array(1,2,3,4,5);
	echo "o vetor tem ".count($v). " elementos<br>";
	print_r($v);
	
	echo"<h5>ED em PHP etrutura pilha</h5>";
	
	$v[] = 6 ; // para add novo elemento no final também pode ser usada array_push($v,7);
	
	print_r($v);
	
	array_pop($v); // elimina a ultima posição do vetor funciona como unset[];
	
	print_r($v);
	
	echo"<h5>ED em PHP etrutura fila</h5>";
	
	$v2 = array(1,2,3,4,5);
	
	print_r($v2);
	
	array_unshift($v2,0); // add um elemento no inicio da fila

	print_r($v2);
	
	array_shift($v2); // elemina primeira posição do vetor
	
	print_r($v2);
	
	echo"<h5>colocando vetor em ordem</h5>";
	
	$v3 = array(6,7,2,1,9);
	echo"<p>Vetor principal</p>";
	print_r($v3);
	
	asort($v3);// colocando em ordem alterando a posições do vetor, pode ser usado o "arsort" para ordem reversa
	echo"<p>Colocando vetor em ordem alterando keys</p>";
	print_r($v3);
	echo"<p>Ordenando keys</p>";
	ksort($v3);//para ordenar keys para ordem reversa rksort
	
	print_r($v3);
	echo"<p>Colocando vetor em ordem sem alterar keys</p>";
	sort($v3);// colocando em ordem sem alterar a posições do vetor
	
	print_r($v3);
	echo"<p>Colocando vetor em sem alterar keys na ordem reversa</p>";
	rsort($v3);
	
	print_r($v3); // colocando em ordem reversa
	
	
	
?>
</pre>
</div>
</body>
</html>
