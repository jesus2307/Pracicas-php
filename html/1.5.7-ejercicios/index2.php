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

//  calcular el minimo
$minimo = 99;
for ($i = 0; $i <= 9; $i++){
    if ($elementos[$i] < $minimo) {

        $minimo = $elementos[$i];
    }

}

echo "El valor minimo es : $minimo";

?>