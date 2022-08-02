<?php

use LDAP\Result;

require('../conexion.php');
//consulta carrera
$consulta = "SELECT * FROM carrera";
$resultado = $mysqli->query($consulta);
//consulta login
$consulta_login = "SELECT * FROM login";
$resultado_login = $mysqli->query($consulta_login);

?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hi studio</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- Estilo del header-->
   <link rel="stylesheet" href="../assets/styles/index.css">
   <link rel="stylesheet" href="../assets/styles/gestioNotas.css">
   <link rel="shortcut icon" href="../assets/styles/images/isotipo.png" type="image/x-icon">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
   <div class="spinner-border" role="status">
      <span class="sr-only">Hi studio</span>
      <header>
         <div class="container">
            <div class="user-box">
               <?php
               if ($resultado_login) {
                  while ($roww = $resultado_login->fetch_array()) {
                     $user = $roww['usuarios'];
               ?>
                     <p> <?php echo  $user; ?> </p>
               <?php
                  }
               } ?>
               <img src="../assets/styles/images/Usuario.png" alt="user">
            </div>
            <div class="box-header-materias">
               <div class="title-notes">
                  <h3>Gestión de Notas</h3>
               </div>
               <div class="title-materias">
                  <p>0</p>
                  <p>materias-</p>
                  <?php
                  if ($resultado) {
                     while ($row = $resultado->fetch_array()) {
                        $carrera = $row['carrera'];
                  ?>
                        <p> <?php echo  $carrera; ?> </p>
                  <?php
                     }
                  } ?>
               </div>
            </div>
         </div>
      </header>
      <section>
         <div class="row">
            <div class="col-sm-6">
               <div class="card">
                  <div class="card-body text-center">
                     <h2 class="card-title">Dibujo I </h2>
                     <h3 class="card-text">10%</h3>
                     <a href="#" class="btn bg-warning text-white">Ver trabajos</a>
                     <a href="#" class="btn bg-danger text-white">Eliminar</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div>
         <?php
         require '../php/footer.php';
         ?>
      </div>
   </div>
   
   <script type="text/javascript" src="../assets/js/main.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>