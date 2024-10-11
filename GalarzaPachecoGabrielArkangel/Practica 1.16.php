<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background: beige;
			text-align: center;
			font-family: inherit;
		}

	</style>
	


</head>
<body>
<?php
$compraTotal=rand(1000,10000);


echo "Tu compra total es de: $compraTotal";echo "<p>";

if ($compraTotal<1000) {
	$compraTotal= $compraTotal+($compraTotal*.15);
	$compraTotal= $compraTotal-($compraTotal*.05);
	echo "tu compra total con iva es de: $compraTotal";echo "<p>";
	echo "Tu iva fue de 5%";
}elseif ($compraTotal>=1000 & $compraTotal< 5000) {
	$compraTotal= $compraTotal+($compraTotal*.15);
	$compraTotal= $compraTotal-($compraTotal*.10);
	echo "tu compra total con iva es de: $compraTotal";echo "<p>";
	echo "Tu iva es de 10%";
}elseif ($compraTotal>=5000 & $compraTotal<10000) {
	$compraTotal= $compraTotal+($compraTotal*.15);
	$compraTotal= $compraTotal-($compraTotal*.12);
	echo "tu compra total con iva es de: $compraTotal";echo "<p>";
	echo "Tu iva es de 12%";
}elseif ($compraTotal>=10000) {
$compraTotal= $compraTotal+($compraTotal*.15);
	$compraTotal= $compraTotal-($compraTotal*.16);
	echo "tu compra total con iva es de: $compraTotal";echo "<p>";
	echo "Tu iva esa de 16%";
}





?>
</body>
</html>