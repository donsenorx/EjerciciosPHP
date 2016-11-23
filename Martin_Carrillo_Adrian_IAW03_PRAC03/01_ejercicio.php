<?php
$numeros = array(rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100));
echo "Estos son todos los valores generados del array:<br/>";
sort($numeros, SORT_NUMERIC);
print_r($numeros);
echo "<br/>El mayor de ellos es: {$numeros[7]}<br/>";
echo "<br/>El segundo mayor es: {$numeros[6]}<br/>";
?>
