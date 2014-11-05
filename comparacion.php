<?php

if ($_POST["usuario"]=="omar" && $_POST["contrasena"]=="12345"){
session_start();

$_SESSION["autenticado"]= "SI";
header ("Location: index.html");
}else {

header("Location: inicio.php?errorusuario=si");
}
?>