<?php
$fila1 = array('pc01' =>"Adrian" ,'pc02' => "Angel", 'pc03'=> "Rafael", 'pc04' => "Enrique" );

$fila2 = array('pc05' =>"Diego" ,'pc06' => "Isa", 'pc07'=> "Ivan", 'pc08' => "Francisco" );
$fila3 = array('pc09' =>"Salah" ,'pc10' => "Andrey", 'pc11'=> "Daniel");
echo "<br/> Fila 1:<br/>";
print_r($fila1);
echo "<br/> Fila 2: <br/>";
print_r($fila2);
echo "<br/> Fila 3: <br/>";
print_r($fila3);
$todos= $fila1 + $fila2 + $fila3;
print_r($todos);
?>