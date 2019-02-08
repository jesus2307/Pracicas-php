<?php
// declaracion de un array

$elementos = array();

// inica un array
for ($i = 0; $i < 9; $i++) {
$elementos[$i] = rand(1, 30);
}
echo "<br>";

for ($i = 0; $i < 9; $i++) {
        echo $elementos[$i];
        echo "<br>";
           
}

//  calcular valor medio
$suma = 0;
for ($i = 0; $i <= 9; $i++){
$suma = $suma + $elementos[$i];
}

$media = $suma / count($elementos);
echo "El valor medio es: $media";

?>