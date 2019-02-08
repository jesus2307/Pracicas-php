<?php




// Definicion de funcion
function suma($numero1, $numero2)
{
    return $numero1 + $numero2;

}

$resultado = suma(3, 100);
echo "suma: $resultado";

echo "<br>";                            //- son dos formas distintas de llamar a la funcion

echo "suma: ".suma(3, 100);





?>