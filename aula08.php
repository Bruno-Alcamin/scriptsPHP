<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 08</title>
<link href="_css/estilo.css" rel="stylesheet">
</head>
<style>

a{
	margin-top:20px;
}
.boton{
  color: #333333;
  text-align: center;
  background-image: linear-gradient(#ffffff, #e6e6e6);
  background-repeat: repeat-x;
  padding: 2% 4%;
  font-size: 1.346em;
  border-radius: 4px;
  display:block;
}

.boton:hover{
  background-color: #e6e6e6;
  color: #33a333;
  text-decoration: none;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
}

</style>
<body>
<div>
<h1>Testando PHP</h1>

<?php 

	$valor = $_GET["v"];
	
	echo "O valor enviado foi $valor e sua raiz quadrada é: ". sqrt($valor);

?>
<a href="form.html" class="boton">Novo Calculo</a>
</div>
</body>
</html>
