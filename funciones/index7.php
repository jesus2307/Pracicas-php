<?php
// ejercicio 5 

// Definicion de funcion

function inicializar_array($numero_de_elementos, $min, $max)
    {

    $numeros = array();


    for ($i = 0; $i <$numero_de_elementos; $i++)
    {
         $numeros[$i]= rand($min, $max);
   

    }
    return $numeros;
}

function calcular_maximo($lista);
{
    return     ;
}


$lista = inicializar_array(10, 1, 30);

echo "<pre>";
print_r($lista);
echo "</pre>";



?>