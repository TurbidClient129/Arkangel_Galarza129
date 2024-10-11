<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practica 4 </title>
	<style type="text/css">
		body{
		background-color: darkgreen;
		font-family: sans-serif;
		color: blueviolet;
		width: 100%;}

		table{
			background-color:yellow;
			text-align: left;
			border-collapse: collapse;
			width:50%;
			color:ligth;
			margin-top:10%;
			margin-left:30%;}

			thead{
				background-color: hotpink;
				border-bottom: solid 5px #1F362D;
				color: red;}

			th,td{
				padding:50px;
			}

			tr:nth-child(even){
				background-color: #ddd;}

				tr:hover td{
					background-color: #69;
				}

	</style>
</head>
<body>
		<?php
	echo '<table border="5">
<thead>
<tr>
<th>Grupo Musical</th>
<th>Genero</th>
<th>Pais</th>
<th>Integrantes</th>

</tr>
</thead>

<tr>
<td>Surf Curse</td>
<td>Alternativo</td>
<td>Los Angeles</td>
<td>Nick Rattigan,Jacob Rubeck,Noah Kohll,Henry Dillon</td>

</tr>

<tr>
<td>Artic Monkeys</td>
<td>Indie Rock</td>
<td>Inglaterra</td>
<td>Alex Turner,Matt Helders,Jamie Cook,Andy Nicholson,Nick O Malley
</td>

</tr>

<tr>
<td>El Cuarteto De Nos</td>
<td>Rock Pop</td>
<td>Uruguay</td>
<td>Roberto Musso,Santiago Tavella,Riki Musso,Gustavo Antuña,Álvaro Pintos,Santiago Marrero,Leonardo Baroncini,Andrés Bedó</td>

</tr>

<tr>
<td>La Union</td>
<td>Pop</td>
<td>España</td>
<td>
Rafa Sánchez,Mario Martínez
</td>

</tr>

<tr>
<td>Enjambre</td>
<td>Rock</td>
<td>Estados Unidos</td>
<td>
Luis Humberto Navejas,Javier Mejia,Rafael Navejas,Navejas Julian,Angel Sanchez,Osamu Nishitani,Romeo Navejas,Saavedra Nico
</td>

</tr>

<tr>
<td>AC/DC</td>
<td>Heavy Metal</td>
<td>Australia</td>
<td>
Angus Young,Brian Johnson,Bon Scott,Malcolm Young,Phil Rudd,Stevie Young,Cliff Williams,
Dave Evans,George Young
</td>

</tr>

<tr>
<td>Ramona</td>
<td>Independendiente</td>
<td>Mexico</td>
<td>Jesús Guerrero, Mauricio Villicaña, Edgar Moreno, Omar Córdoba</td>
</tr>

<tr>
<td>INOHA</td>
<td>Pop</td>
<td>Texas</td>
<td>no hay informacion de los Integrantes</td>

</tr>

<tr>
<td>Twenty One Pilots</td>
<td>Idie pop</td>
<td>Estados Unidos</td>
<td>Josh Dun, Tyler Joseph</td>

</tr>

<tr>
<td>Queen</td>
<td>Glam Rock</td>
<td>Reino Unido</td>
<td>Freddy Mercury, Brian May, Roger Taylor, Jhon Deacon
</td>

</tr>




</table>'

?>

</body>
</html>