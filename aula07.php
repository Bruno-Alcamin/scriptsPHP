<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 07</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h1>Testando PHP</h1>

<?php 
	echo "<h3> Operador Ternário</h3>";
	$a=4;
	$b=7;
	$maior = $a>$b ? $a :$b;
	echo $maior;
	
	/*	exercicio 1*/
	
	$n1 = $_GET["a"];
	$n2 = $_GET["b"];
	
	echo "As notas são: p1 = $n1 e p2= $n2"."<br><br>";
	$media = (($n1+$n2)/2)>=6?"aprovado":"reprovado";
	echo "O aluno esta:$media"."<br><br>";
	echo ((($n1+$n2)/2)>=6?"aprovado":"reprovado")."<br><br>";
	
	/* igual ou identico*/
	
	$a = 3;
	$b = "3";
	
	$r= ($a==$b)?"Sim" : "Não";
	echo "As variaveis A e B são iguais? $r"."<br><br>";
	
	$r= ($a===$b)?"Sim" : "Não";
	echo "As variaveis A e B são identicos? $r"."<br><br>";
	
?>
</div>
</body>
</html>
