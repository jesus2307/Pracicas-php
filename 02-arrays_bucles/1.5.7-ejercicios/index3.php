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

//  calcular el maximo
$maximo = -1;

for ($i = 0; $i <= 9; $i++){
    if ($elementos[$i] > $maximo) {
        $maximo = $elementos[$i];
        $posicion = $i;
    }

}

echo "El valor maximo es : $maximo";

?>