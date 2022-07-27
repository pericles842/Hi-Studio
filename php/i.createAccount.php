<?php
require('../conexion.php');

if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
      /*Asigno variables*/
      $user = $_POST['usuario'];
      $pass = $_POST['contraseña'];
      $email = $_POST['email'];

      $str = "INSERT INTO  login(usuarios,contraseña,email) VALUES ('" . $user . "','" . $pass . "','" . $email . "')";
      $conexion = $mysqli->query($str);

      echo '<script language="javascript">alert("Registro Exitoso !!!");window.location.href="../login.php"; </script>';
}

?>