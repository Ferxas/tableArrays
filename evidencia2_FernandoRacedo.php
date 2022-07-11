<?php print $_SERVER['SERVER_SOFTWARE'] . "<br>";

/* Desarrollado por: Fernando Racedo Meneses 
   Programa: DESARROLLO WEB CON PHP
   Evidencia: Taller "Uso de arreglos"

*/ ?> 


<!DOCTYPE html>
<html>
<head>
        <style>
                th {
                        background-color: #b6dde8 /* color de la cabecera */
                }
        </style>
  <title>Arreglos Listado Agenda Telefonica</title>
  <meta http-equiv="Content-Type"
  content="text/html; charset=ISO-8859-1" />
</head>
<body>
  <caption><h3>Listado de personas</h3></caption> 
  <?php
  //Arreglo con índice numérico (por defecto)
  // Array que contiene la cabecera de la tabla
  $cabeceras=array("Nombre","Direccion","Telefono", "Fecha de Cumpleanos", "Color Favorito", "Significado");
  // Array de la información
  $nombres=array("Fernando Racedo","La granja","(57-4) 3115422", "17/08/2001", "Amarillo");
  $direccion=array("Juan Pablo","Buenos Aires","(57-76) 6420946", "08/02/2002", "Rojo");
  $telefono=array("Hugo López","Los Ángeles","(57-4) 5121522", "15/10/2000", "Verde");
  $fechadecumple=array("Samuel Ovalle","La castellana","76470392", "31/06/1985", "Rosado");
  $color=array("Jordan Hernández","Caracolí","53551946", "05/01/1973", "Azul");
  $informacion=array($nombres,$direccion,$telefono,$fechadecumple,$color);
  // asignando el significado
  $key=array("Amarillo" => "Riqueza y alegría", "Verde" => "Naturaleza y felicidad");
  ?>
  <table border="1" width="60%" cellspacing="0">
    <?php
    // Iteración sobre las cabeceras
    echo "<tr>";
    foreach ($cabeceras as $cabecera) {
      echo "<th><h3> $cabecera </h3></th>";
    }
    echo "</tr>";
    // Iteración sobre la información
    foreach ($informacion as $fila) {
      echo "<tr>";
      foreach ($fila as $llave => $celda) {
        echo "<td> $celda </td>";
        // Se verifica el índice que contiene el color y se revisa la información (como el significado que contiene) de lo contrario se mostraría un not found
        if ($llave === 4) {
          echo "<td>";
          echo isset($key[$celda]) ? $key[$celda] : "No se encuentra el significado";
          echo "</td>";
        }
      }
      echo "</tr>";
    }
  ?>
  </table>
</body>
</html>