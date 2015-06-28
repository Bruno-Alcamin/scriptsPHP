<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 16</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h3>Curso de PHP – 16 – Funções String (Parte 1)</h3>

<?php 
	$prod ="leite";
	$preco ="4,15";
	echo"O $prod custa R$ ". number_format($preco,2). "<br>";
	printf ("O %s custa R$ %.2f ", $prod, $preco). "<br>";
	
	/*
	%d valor decimal com sinal
	%u valor decimal sem sinal
	%f valor real
	%s string
	*/
	echo"<br>";
	echo"<br>";
	echo"<br>";
	
	$x[0]=1;
	$x[1]=2;
	$x[2]=3;
	
	print_r($x);

	echo"<br>";
	echo"<br>";
	echo"<br>";	
	
	$s = array(1,2,3,4,5);
	print_r($s);
	
	echo"<br>";
	echo"<br>";
	echo"<br>";
	// gerando um vetor de string
	
	$frase = "Vou estudar PhP agora";
	$cont  = str_word_count($frase,0);
	echo $cont;
	
	echo"<br>";
	echo"<br>";
	echo"<br>";
	$frase = "Vou estudar PhP agora";
	$cont  = str_word_count($frase,1);
	print_r($cont);
	echo"<br>";
	echo"<br>";
	echo"<br>";
	$frase = "Vou estudar PhP agora";
	$cont  = str_word_count($frase,2);
	print_r($cont);
	echo"<br>";
	echo"<br>";
	echo"<br>";
	//separa por palavras ou por qualquer valor declarado dentro do paranteses
	$site="curso em video";
	$vetor = explode(" ", $site);
	print_r($vetor);
	echo"<br>";
	echo"<br>";
	echo"<br>";
	//separa por letras
	$nome="Bruno";
	$vetor = str_split($nome);
	print_r($vetor);
	echo"<br>";
	echo"<br>";
	echo"<br>";
	//para ligar resultados de um vetor
	$t[0] = "curso";
	$t[1] = "em";
	$t[2] = "video";
	$text = implode(" ",$t);  // join faz a mesma coisa
	print($text);
	echo"<br>";
	echo"<br>";
	echo"<br>";
	// pegando letra por código
	 $letra = chr(67);
	 echo " A letra do código 67 é $letra";
	 echo"<br>";
	echo"<br>";
	echo"<br>";
	 //  pegando codigo da letra
	 $letra1 = "C";
	 $cod = ord($letra);
	 echo $cod;
	
?>

</div>
</body>
</html>
