<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		background-color: blue;
		font-style: white;
		text-align: center;

	}


	</style>
</head>
<body>
<?php

$NombreDeEmpleado="joaquin";
$SueldoMensual=5000;
$Antiguedad=rand(1,10);

echo "garcias por tabajar con nosotros:";
echo $NombreDeEmpleado;
echo "<p>";

if ($Antiguedad<5) {
	$SueldoMensual=($SueldoMensual*.02)+$SueldoMensual;
	echo " tu sueldo ahora es de: $SueldoMensual ";
	echo "<p>";
	echo "tu aumento fue de 2% sigue trabajando con nosotros";
}
	elseif ($Antiguedad>5) {
		$SueldoMensual=($SueldoMensual*.20)+$SueldoMensual;
		echo " tu sueldo ahora es de: $SueldoMensual ";
		echo "<p>";
		echo "tu aumento fue de 20% gracias por trabajar con nosotros";
	}
	









?>
</body>
</html>