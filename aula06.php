<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 06</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h1>Testando PHP</h1>

<?php 
	$preco = $_GET["p"];
	echo "O preço recebido é R$:$preco"."<br><br>";
	$preco +=($preco*10/100);
	echo "O preço recebido com 10% de aumento é R$:". number_format($preco,2,",",".")."<br><br>";
	$preco -=($preco*10/100);
	echo "O preço recebido com 10% de desconto é R$:". number_format($preco,2,",",".")."<br><br>";
	
	
	/* Pré e pos incremento*/
	
	$ano = $_GET["aa"];
	echo "O ano atual é: $ano"."<br><br>";
	echo "O ano anterior é :". (--$ano)."<br><br>";
	
	/* Variaveis referenciadas
	
		com o uso do & (ecomercial) antes da variavel ,
		a mesma torna a variavel um referencia da outra.
	
	*/
	
	echo "modo normal<br><br>";	
	
	$a = 3;
	$b = $a;
	$b += 5;
	echo $a."<br><br>";
	echo $b."<br><br>";
	
	echo "modo com variavel referenciadas<br><br>";

	$a = 3;
	$b = &$a;
	$b += 5;
	echo $a."<br><br>";
	echo $b."<br><br>";
	
	echo "Variaveis de variaveis<br><br>";
	
	$site = "cursoemvideo";
	$$site = "Curso de PHP";
	
	echo $site."<br><br>";
	echo $cursoemvideo."<br><br>";
	
?>
</div>
</body>
</html>
