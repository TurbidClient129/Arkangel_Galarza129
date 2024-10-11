<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background: lightgray;
			font-family: monospace;
			font-size: 30;
		}
	</style>
</head>
<body>
<?php

$valor= rand(1,100);
$inicio= 1;

echo "valor: ". $valor."<p>";
echo "contador: ". $inicio. "<p>";

while ($inicio <= $valor) {
	echo "$inicio <p>";
	$inicio ++;
}






?>
</body>
</html>