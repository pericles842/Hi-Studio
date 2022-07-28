<?php
require('../conexion.php');

if (!empty($_POST['carrera'])) {
      /*Asigno variables*/
      $carrera = $_POST['carrera'];

      $str = "INSERT INTO carrera(carrera) VALUES ('" .ucfirst($carrera) . "')";
      $conexion = $mysqli->query($str);

      echo '<script language="javascript">alert("Bienvenido a Hi Studio");window.location.href="../views/gestionNotas.php"; </script>';
}

?>