<?php

use LDAP\Result;

require('../conexion.php');
//consulta carrera
$consulta = "SELECT * FROM carrera LIMIT 1 ";
$resultado = $mysqli->query($consulta);
//consulta login
$consulta_login = "SELECT * FROM login";
$resultado_login = $mysqli->query($consulta_login);
//consulta de conteo carreras
//TODO REVISAR NUMERO DE MATERIAS EN LOS HEADER
$sqlicount = "SELECT COUNT(*) total FROM materias";
$rescount = $mysqli->query($sqlicount);

$countMaterias = "";
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
                  //!CANTIDAD DE MATERIAS ARREGLAR 
               <?php
                  if ($rescount) {
                     while ($rowco = $rescount->fetch_array()) {
                  ?>
                        <p> <?php echo  $rowco; ?> </p>
                  <?php
                     }
                  } ?>
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
         <div class="container">
            <div class="row">
               <?php
               $sqlmateria = "SELECT * FROM materias";
               $resmateria = $mysqli->query($sqlmateria);

               while ($rowm = $resmateria->fetch_array()) {
                  $materia = $rowm['materia'];
               ?>
                  <div class="col-sm-3">
                     <div class="card mt-4 mb-4 " style="box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.192);">
                        <div class="card-body">
                           <h4 class="card-title "><?php echo $materia ?></h4>
                           <h6 class="card-subtitle mb-2 text-muted mb-4">No hay Actividades</h6>
                           <h1 class="card-text text-center">07</h1>
                           <div class="text-center">
                              <a href="#" class="card-link">Ver mas</a>
                              <a href="#" class="card-link  text-danger">Borrar</a>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php
                  $countMaterias = $countMaterias + 1;
               } ?>
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