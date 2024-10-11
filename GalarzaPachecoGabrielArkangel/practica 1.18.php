<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

for ($i=1; $i=5 ; $i++) { 


$peso=rand(40, 100);
$estatura=rand(130, 200)/100;
$edad=rand(14, 100);
$imc= $peso/($estatura*$estatura);

echo "Tu estatura en metros es: $estatura";echo "<p>";
echo "Tu peso en kilogramos es de: $peso";echo "<p>";
echo "Tu edad es de: $edad";echo "<p>";
echo "Tu indice corporal en kg/m2 de: $imc";echo "<p>";

if ($imc<18.5) {
	echo "Tu estas en un Peso Bajo";
}elseif ($imc>=18.5 & $imc<25) {
	echo "Tu estas en un Peso Normal";
}elseif ($imc>=25 & $imc<30) {
	echo "Tu tienes Sobrepeso";
}elseif ($imc>=30) {
	echo "Tu tienes Obesidad";
}

}
?>

</body>
</html>