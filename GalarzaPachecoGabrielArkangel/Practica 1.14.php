<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background: purple;
			text-align: center;
			font-family: Arial;
			font-size: 20px;
		}
	</style>
</head>
<body>
<?php
$numerito1=rand(1,100);
$numerito2=rand(1,100);
$numerito3=rand(1,100);


echo " los numeros son: $numerito1, $numerito2, $numerito3 <p>";

if ($numerito1>=$numerito2 & $numerito1>=$numerito3){
echo " el numero mayor es el:".$numerito1;


}elseif ($numerito2>=$numerito1 & $numerito2>=$numerito3) {
echo " el numero mayor es es:".$numerito2;

}elseif ($numerito3>=$numerito1 & $numerito3>=$numerito2) {
	echo " el numero mayor es es:".$numerito3;

}


?>
</body>
</html>