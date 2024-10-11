<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$NombreArt1="Lampara";
$PrecioArt1=rand(160,480);
$NombreArt2="Mercedez";
$PrecioArt2=rand(1000,2600)
$NombreArt3="Milanesa";
$PrecioArt3=rand(200,500);
$compraTotal=$PrecioArt1+$PrecioArt2+$PrecioArt3;

if ($compraTotal<5000) {
	$compraTotal=($compraTotal*.5)-$compraTotal;
	echo " tu compra ahora es de: $compraTotal ";
	echo "<p>";
	echo "tu descuento fue de 5% gracias por su compra";
}
	elseif ($compraTotal>5000) {
	$compraTotal=($compraTotal*.10)-$compraTotal;
	echo " tu compra ahora es de: $compraTotal ";
	echo "<p>";
	echo "tu descuento fue de 10% gracias por su compra";
	}




?>
</body>
</html>