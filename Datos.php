<h2>Datos de la Persona:</h2>

<?php
include 'Personas.php';

echo "<h3>Id: {$Personas[$_GET["Dato"]]['Id']} </h3>
      <h3>Nombre: {$Personas[$_GET["Dato"]]['Nombre']} </h3>
      <h3>Apellido: {$Personas[$_GET["Dato"]]['Apellido']} </h3>
      <h3>Edad: {$Personas[$_GET["Dato"]]['Edad']} </h3>
      <h3>Correo: {$Personas[$_GET["Dato"]]['Correo']} </h3><br>";
      
