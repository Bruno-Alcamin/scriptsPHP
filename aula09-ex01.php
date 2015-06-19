<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 09</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
<div>
<h1>Curso de PHP – 09 – Estruturas Condicionais (Parte 1)</h1>

<?php 
	$idade = isset($_GET["v"])?$_GET["v"]:"[Idade não Informada]";
	if($idade<16){
		echo "Você ainda não pode dirigir e votar!";
	}else{
		if(($idade>=16)&&($idade<18)){
			echo "O seu voto é facultativo e você não pode dirigir!";
		}else{
			if(($idade>=18)&&($idade<65)){
				echo "O seu voto é obrigatório e você já pode dirigir!";
			}else{
				echo "O seu voto é facultativo e você pode dirigir!";
			}
		}
	}
	echo "<br><br>";
	// também pode ser feito com elseif
	if($idade<16){
		echo "Você ainda não pode dirigir e votar!";
	}elseif(($idade>=16)&&($idade<18)){
			echo "O seu voto é facultativo e você não pode dirigir!";
		}elseif(($idade>=18)&&($idade<65)){
				echo "O seu voto é obrigatório e você já pode dirigir!";
			}else{
				echo "O seu voto é facultativo e você pode dirigir!";
		}
		
	
?>
<a href="aula09-ex01.html" class="boton">Voltar</a>
</div>
</body>
</html>
