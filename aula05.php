<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 05</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h1>Testando PHP</h1>

<?php 
	$n1 = 2;
	$n2 = 3;
	$soma = $n1+$n2;
	echo "A adição de $n1 + $n2 é: $soma<br><br>";
	
	$n1 = 3;
	$n2 = 2;
	echo "A adição de $n1 + $n2 é:". ($n1+$n2)."<br><br>";
	echo "A subtração de $n1 - $n2 é:". ($n1-$n2)."<br><br>";
	echo "A multiplicação de $n1 * $n2 é:". ($n1*$n2)."<br><br>";
	echo "A divisão de $n1 / $n2 é:". ($n1/$n2)."<br><br>";
	echo "O modulo de $n1 % $n2 é:". ($n1%$n2)."<br><br>";
	
	$n1 = 7;
	$n2 = 8;
	$media = ($n1+$n2)/2;
	echo "A média das notas $n1 e $n2 é: $media";
	
	
	/*pegando valores pela url
	
	http://127.0.0.1:8080/scripts/aula05.php?a=3&b=4
	
	foi adicionado a url ?a=3&b=4
	*/
	
	$n1 = $_GET["a"];
	$n2 = $_GET["b"];
	
	echo "<h2>Os valores recebidos são: $n1 e $n2.</h2>";
	
	echo "A adição de $n1 + $n2 é:". ($n1+$n2)."<br><br>";
	echo "A subtração de $n1 - $n2 é:". ($n1-$n2)."<br><br>";
	echo "A multiplicação de $n1 * $n2 é:". ($n1*$n2)."<br><br>";
	echo "A divisão de $n1 / $n2 é:". ($n1/$n2)."<br><br>";
	echo "O modulo de $n1 % $n2 é:". ($n1%$n2)."<br><br>";
	echo "O média de $n1 e $n2 é:". (($n1+$n2)/2)."<br><br>";
	
	$valor = -3;
	echo "O valor absoluto de $valor é:". abs($valor)."<br><br>";
	
	$valor1= 4;
	$valor2= 2;
	echo "A potenciação de $valor1 <sup> $valor2 </sup> é: ". pow($valor1, $valor2)."<br><br>";
	
	$valor3= 81;
	echo "A raiz quadrada de $valor3 é: ". sqrt($valor3)."<br><br>";
	
	$valor4= 3.4;
	echo "A arredondado de $valor4 é: ". round($valor4)."<br><br>";
	
	$valor4= 3.6;
	echo "A arredondado de $valor4 é: ". round($valor4)."<br><br>";
	
	/* ceil = sempre arredonda para cima /usar assim = ceil(variavel)
	   floor = sempre arredonda para baixo /usar assim = floor(variavel)
	*/
	
	$valor4= 3.6897;
	echo "A parte inteira de $valor4 é: ". intval($valor4)."<br><br>";
	
	$valor4= 3.6897;
	echo "O valor de $valor4 em moeda é R$:". number_format($valor4,2,",",".")."<br><br>";
	/*number_format($valor4,2,",",".") os valores atribuidos após a variavel servem respectivamente 
	para numero de casas a serem impressas, qual a pontuação a ser usada para separação de valores 
	e por ultimo para casa do milhar / padrão usado no brasil , para unidade e . para milhar*/
?>
</div>
</body>
</html>