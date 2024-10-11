<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background: lightgoldenrodyellow;
			font-size: 30;
			text-align: center;
			font-family: serif;

		}



	</style>
</head>
<body>
<?php

for ($i=1; $i <=100 ; $i++) { 
	echo $i; 
	if ($i>=20 OR $i>=40 OR $i>=60 OR $i>=100) {
	echo "<br>";
	}
}




?>
</body>
</html>