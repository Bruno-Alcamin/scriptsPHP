<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 18</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>


<body>
<div>
<h3>Curso de PHP – 18 – Vetores e Matrizes (Parte 1)</h3>
<pre>
<?php 
	echo"<h4> Matrizes </h4>";
	
	$matriz = array(array(2,3),
						array(4,5),
							array(6,7));
							
	print_r($matriz);  // var_dump mostra o vetor mais detalhadamente
	
	echo"<br><br>";
	
	$matriz[0][1] = $matriz [1][1];
	
	print_r($matriz);
	
?>
</pre>
</div>
</body>
</html>
