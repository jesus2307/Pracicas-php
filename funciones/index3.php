<?php




// Definicion de funcion
function suma($numero1, $numero2)
{
    return $numero1 + $numero2;

}
function producto($numero1, $numero2)
{
    return $numero1 * $numero2;

}

$resultado = suma(3, 100);   //  esta llamada de la funcion es mmas larga
echo "suma: $resultado";

echo "<br>";                              // si queremos hacer una suma y un producto tiene que ser dos funciones diferentes.

echo "suma: ".suma(3, 100);

echo "<br>";                            

echo "Producto: ".producto(3, 100);





?>