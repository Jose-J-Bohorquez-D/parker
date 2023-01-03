<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap-Local -->
    <link rel="stylesheet" href="Vistas/Css/bootstrap.min.css">
    <script src="Vistas/Js/jquery-3.6.0.min.js"></script>
    <script src="Vistas/Js/popper.min.js"></script>
    <script src="Vistas/Js/bootstrap.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="Vistas/Librerias/SweetAlert2/sweetalert2@11.js"></script>

    <title>Parker</title>
  </head>
  <body>
<?php 
require_once("Vistas/Modulos/navSup.php");
$vista=new  MvcControlador; $vista->interaccionVistasCtlr();

?>
  </body>
</html>