<?php
require('../conexion.php');

$usuario = $_POST['usuario'];
$pass = $_POST['contraseña'];

$sql = ("SELECT * from `login` WHERE usuarios='" . strtolower($usuario) . "' ");
$conexion1 = $mysqli->query($sql);
$datos = $conexion1->fetch_array();

if ($datos['usuarios'] == $usuario & $datos['contraseña'] == $pass) {
    echo '<script language="javascript">window.location.href="../views/index.php";</script>';
} else {
    echo '<script language="javascript">alert("USUARIO ó CLAVE INCORRECTO, VERIFIQUE SUS DATOS");window.location.href="../login.php";</script>';
}
