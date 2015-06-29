<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculadora</title>
</head>
<body>
<div>
<?php
require_once "method.php";
?>
<form method="get" action="calc.php">
<input type="number" name="var1">
<input type="number" name="var2">
<select name="op">
<option  value="+">+</option>
<option  value="-">-</option>
<option  value="*">*</option>
<option  value="/">/</option>
<input type="submit" value="=">
</select>
</form>
</div>
</body>
</html>
