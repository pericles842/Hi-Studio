<?php
require 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hi Studio</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/styles/login.css">
   <link rel="shortcut icon" href="./assets/styles/images/isotipo.png" type="image/x-icon">
</head>

<body>
   <div class="box-backgraund">
      <div class="box-login">
         <div class="box-header">
            <img src="assets/styles/images/LogoNombre-amarillo.png" alt="Logo">
         </div>
         <div class="box-inputs">
            <form action="php/i.loguin.php" method="post">
               <h1>Ingreso</h1>
               <p>Usuario</p>
               <input type="text" class="form-control" name="usuario" placeholder="Ej. Louis Sarmiento" required>
               <br>
               <p>Contraseña</p>
               <input type="password" class="form-control" name="contraseña" placeholder="Ej. admin123" required>
               <br>
               <input type="submit" class="btn btn-primary btn-lg btn-block " value="Enviar">
               <div class="box-link">
                  <p>¿No tienes cuenta?</p>
                  <a href="views/createAccount.php" class="alert-link">Registrate aqui</a>
               </div>
            </form>
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>