	<!DOCTYPE html>

	<html>

	<head>

	<meta charset="UTF-8">
	<title>Aula 11</title>
	<link href="_css/estilo.css" rel="stylesheet">
	</head>

	<body>
	<div>
	<h3>Curso de PHP – 11 – Estruturas de Repetição (Parte 1)</h3>
		<?php
		
			$inicio = $_GET["inic"]; 
			$fim = $_GET["fim"];
			$in = $_GET["in"];
		
			if($fim > $inicio){
				while($inicio <= $fim){
					echo $inicio."<br>"; 
					$inicio += $in;
				}
			}else{
				while($inicio >= $fim){
					echo $inicio."<br>"; 
					$inicio -= $in;
				}		
			}
		?>
	</div>
	</body>
	</html>
