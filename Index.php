<h1>Listas de Personas</h1>

<?php
include 'Personas.php';
$a=0;

while ($a < 10) {
    echo "<a href='Datos.php?Dato=$a'> {$Personas[$a]['Nombre']} {$Personas[$a]['Apellido']} </a><br>";
    $a++;  
}

