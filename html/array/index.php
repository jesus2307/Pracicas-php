<?php
/*
// declaracion de un array

$productos = array();

// declara e inica un array
$productos = array("disco ssd", "memoria ram", "monitor");

echo $productos[0];
echo "<br>";

echo $productos[1];
echo "<br>";


echo $productos[2];
echo "<br>";

// asignamos nuevos valores 
$productos[0] = "este es 0";
$productos[1] = "este es 1";
$productos[2] = "este es 2";

echo $productos[0];
echo "<br>";

echo $productos[1];
echo "<br>";


echo $productos[2];
echo "<br>";

echo "<pre>";
print_r($productos);
echo "</pre>";
echo "numero de elementos de un array: ".count($productos);

*/
// 
$numero_elementos = count($productos);

for ($i = 0; $i < $numero_elementos; $i++) {
            
    echo $productos [$i];
    echo "<br>";
}


?>