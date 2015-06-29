<?php

$v1 = isset($_GET["var1"])?$_GET["var1"]:0;
$v2 = isset($_GET["var2"])?$_GET["var2"]:0;
$op = isset($_GET["op"])?$_GET["op"]:"+";

switch($op){
	case "+":
		$rsul = ($v1+$v2);
		echo "O resultado da soma é $rsul";
		break;
	case "-":
		$rsul = ($v1-$v2);
		echo "O resultado da subtração é $rsul";
		break;
	case "*":
		$rsul = ($v1*$v2);
		echo "O resultado da Multiplicação é $rsul";
		break;
	case "/":
		$rsul = ($v1/$v2);
		echo "O resultado da divisão é $rsul";
		break;
	case "%":
		$rsul = ($v1/$v2);
		echo "O resultado da divisão é $rsul";
		break;
}

?>
