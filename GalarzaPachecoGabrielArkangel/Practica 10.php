<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

$cal1=rand(1,10);
$cal2=rand(1,10);
$cal3=rand(1,10);
$calFinal=($cal1+$cal2+$cal3)/3;

echo "el alumno saco:";
echo $calFinal;
echo "<p>";

if ($calFinal<=6)
	echo "el alumno reprobo";
elseif ($calFinal>=6)
	echo "el alumno aprobo";





?>
</body>
</html>