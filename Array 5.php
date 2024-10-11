<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$alumnos = array(
    "Paton" => 8,
    "Anon" => 9,
    "Semen" => 14,
    "Mahoraga" => 22,
    "Said" => 10
);


echo "Calificaciones originales:\n";
foreach ($alumnos as $nombre => $calificacion) {
    echo "La calificación de $nombre es $calificacion\n";echo "<p>";
}

asort($alumnos);

echo "\nCalificaciones ordenadas:\n";
foreach ($alumnos as $nombre => $calificacion) {
    echo "La calificación de $nombre es $calificacion\n";echo "<p>";
}
?>
</body>
</html>