<html>
<head>
<title>Inicio de sesion</title>
</head>
<body>
<h1>Inicio de sesion</h1>
<?if ($_GET["errorusuario"]=="si"){?>
<font color="blue"><b>Datos incorrectos</b></font>
<?
}
else
{
?>
Nombre de usuario o contrase�a son erroneos, vuelva a intentar porfavor. 
<?}?>
<form action="comparacion.php" method="POST">
<table border="0">
<tr><td>Nombre de usuario:</td><td>
<input name="usuario" size="25" value=""/></td></tr>
<tr><td>Contrase�a:</td><td>
<input name="contrasena" size="25" type="password"/></td></tr>
<tr><td/><td>
<input type="submit" value="Inicio de sesi�n"/></td></tr>
</table>
</form>
Para ingresar, deb�s ingresar <b>omar</b> en el 1er campo y <b>chocorrol</b> en el 2do.
</body>
</html>