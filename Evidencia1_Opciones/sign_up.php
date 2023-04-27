<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulario de datos personales</h1>
	<form method="post" >
		<label for="nombre">Nombre completo:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
		<label for="email">Correo electrónico:</label>
		<input type="text" id="email" name="email" required><br><br>
		<label for="telefono">Teléfono:</label>
		<input type="text" id="telefono" name="telefono" required><br><br>
	<br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>
<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];


echo "<br><hr><table>
<tr>
<td>Nombre</td>
<td>Email</td>
<td>Telefono</td>
</tr>

<tr>
<td>".$nombre."</td>
<td>".$email."</td>
<td>".$telefono."</td>

</tr>
</table>";
