<?php
function calcula_distancia() {
    $rad = 1.16E-6;
    $a = 1.50E11;
    $DISTANCIA = $a / $rad; // Distancia en kilómetros
    $distanciaEnMetros = $DISTANCIA * 1000; // Convertir a metros
    $distanciaEnNotacionE = sprintf("%.2E", $distanciaEnMetros); // Convertir a notación científica
    
    echo "En kilómetros: " . $DISTANCIA . " km<br>";
    echo "En metros: " . $distanciaEnMetros . " m<br>";
    echo "En notación exponencial: " . $distanciaEnNotacionE . " m";
}

// Llamar a la función para calcular y mostrar la distancia
calcula_distancia();
?>
