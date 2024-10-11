<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
// Paso 1: Crear el array con los productos
$productos = array("Camisa", "Pantalón", "Cinturón");

// Paso 2: Agregar los nuevos productos (Gorra y Calcetines)
array_push($productos, "Gorra", "Calcetines");

// Paso 3: Mostrar el array original con los nuevos productos
echo "Productos originales: <br>";
print_r($productos);
echo "<br><br>";

// Paso 4: Ordenar el array de forma descendente
rsort($productos);

// Paso 5: Mostrar el array ordenado en forma descendente
echo "Productos ordenados descendentemente: <br>";
print_r($productos);
?>


</body>
</html>