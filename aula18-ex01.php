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
	$n = array(2,3,4,5,5);
	print_r($n);
	echo"<br><br>";
	/* range faz uma contagem com o passo no valor final com 1 e 2 
	numero sendo o inicio e fim*/
	$f = range(5,20,5);
	print_r($f);
	echo"<br><br>";
	//outra forma de mostrar valor
	$f1 = range(5,20,5);
	foreach($f1 as $v){
		echo"$v ";
	}
	echo"<br><br>";
	//cria um vetor com posições pré-definidas
	$v2 = array(1=>"A",3=>"B",6=>"C",8=>"D");
	print_r($v2);
	$v2[] = "F"; /* sempre que for usado o [] sem nenhum atributo sera
	criada uma nova posição no vetor considerando o valor do ultimo elemento*/
	echo"<br><br>";
	print_r($v2);
	unset($v2[1]);// unset remove valor do vetor
	echo"<br><br>";
	print_r($v2);
	//vetores em php não são homogenios
	$v3 = array ("Nome" => "Bruno Alcamin",
					"Idade" => 25,
						"Peso" => 81);
	print_r($v3);
	$v3["Fuma"] = false;
	echo"<br><br>";
	foreach($v3 as $k => $c){
		echo"O campo $k possui o conteudo $c<br>";
	}
	
?>
</pre>
</div>
</body>
</html>
