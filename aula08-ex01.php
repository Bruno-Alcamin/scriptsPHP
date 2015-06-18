<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Aula 08</title>
<link href="_css/estilo.css" rel="stylesheet">
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
</head>
<body>
<div>
<h1>mini-cadastro</h1>

<?php 
 $nome = isset($_GET["no"])?$_GET["no"]:"[Não Informado]";
 $data = isset($_GET["dt"])?$_GET["dt"]:"[Não Informado]";
 $sexo = isset($_GET["sex"])?$_GET["sex"]:"[Não Informado]";
 $idade = date("Y")- $data;
 echo "O $nome tem $idade anos e nasceu na data: $data e é do sexo: $sexo"; 
?>
<a href="form-ex2.html" class="boton">Voltar</a>
</div>
</body>
</html>
