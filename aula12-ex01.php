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
	$ante=1;
	$ult=0;
	echo "fibonacci";
	do{
		$soma= $ult+$ante;
		echo $soma." ";
		$ante = $ult;	
		$ult = $soma;
			 		
	}while($ult<=10);

?>

</div>
</body>
</html>
