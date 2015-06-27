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
	function soma(){
		$p = func_get_args();//pega os valores e coloca no vetor p
		$total = func_num_args();//pega o tamanho do vetor
		$soma =0;
		for($i=0;$i<=$total;$i++){
			$soma += $p[$i]; 
		}
		return $soma;
	}
	
	$resu = soma(3,2,5);
	echo "A soma dos valores é $resu";
	
?>

</div>
</body>
</html>
