<!DOCTYPE html>

<html>

<head>
<?php 
 $texto = isset($_GET["no"])?$_GET["no"]:"[Não Informado]";
 $tamanho = isset($_GET["tam"])?$_GET["tam"]:"12px";
 $cor = isset($_GET["cor"])?$_GET["cor"]:"#000"; 
?>
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

span{
	font-size:<?php echo $tam; ?>;
	color:<?php echo $cor; ?>;
}

</style>
</head>
<body>
<div>
<h1>Formatando</h1>

<?php 
 
 echo "<span>$texto</span>"; 
?>
<a href="form-ex3.html" class="boton">Voltar</a>
</div>
</body>
</html>
