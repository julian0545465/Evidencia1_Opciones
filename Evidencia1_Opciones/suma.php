<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Suma</h1>
	<form method="post" >
		<label for="n1">Primer número</label>
		<input type="number" id="nu1" name="nu1" required><br><br>
		<label for="n2">Segundo número</label>
		<input type="number" id="nu2" name="nu2" required><br><br>
	
	<br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>
<?php
$n1 = $_POST['nu1'];
$n2 = $_POST['nu2'];





echo "<h1>".$n1+$n2."</h1>";

