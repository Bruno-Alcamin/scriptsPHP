<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 17</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>


<body>
<div>
<h3>Curso de PHP – 17 – Funções String (Parte 2)</h3>

<?php 
	//coloca todas as strings em minuscula
	$nome = "Bruno Alcamin"	;
	echo "o meu nome é ". strtolower($nome);
	echo"<br><br>";
	//coloca todas as strings em maiuscula
	$nome2 ="bruno alcamin";
	echo "o meu nome é ". strtoupper($nome2);
	echo"<br><br>";
	//coloca somente a primeira letra em maiuscula
	$nome = "Bruno Alcamin"	;
	echo "o meu nome é ". ucfirst(strtolower($nome));
	echo"<br><br>";
	//coloca as primeiras letras em maiuscula
	$nome = "Bruno Alcamin"	;
	echo "o meu nome é ". ucwords(strtolower($nome));
	echo"<br><br>";
	//faz uma pesquisa dentro de um string mas somente se estiver extamente igual, maiuscula 
	$frase = "Estou aprendendo PHP"	;
	$pos = strpos($frase,"PHP");
	echo "String localizada: ". $pos;
	echo"<br><br>";
	//faz uma pesquisa dentro de um string 
	$frase = "Estou aprendendo PHP"	;
	$pos = stripos($frase,"php");
	echo "String localizada: ". $pos;
	echo"<br><br>";
	//faz uma pesquisa dentro de um string 
	$nome4 = "guanabara";
	$novo = str_pad($nome4,20," ",'str_pad_left'); // str_pad_center e str_pad_left
	print("O $novo é um ótimo professor!");
?>

</div>
</body>
</html>
