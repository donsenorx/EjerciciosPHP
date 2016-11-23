<?php
function primitiva ($numero) {
    $aleatorio = rand(1, 49);
    if (!in_array($aleatorio, $numero)) $numero[] = $aleatorio;
    return count($numero) < 6 ? primitiva($numero) : $numero;
}
echo "Numero de la primitiva es: ";
foreach (primitiva(array()) as $valor) echo $valor." ";
?>