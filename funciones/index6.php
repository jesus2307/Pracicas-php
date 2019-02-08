<?php
// ejercicio 1 y 2 

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
function calcular_media($lista)

{
    $numero_de_elementos = count($lista);
    $suma= 0;
    for ($i = 0; $i < $numero_de_elementos; $i++)
    {
        $suma = $suma + $lista[$i];
    }
    $media =$suma / $numero_de_elementos;
    return $media;
}

$lista = inicializar_array(1, 1, 30);
$media = calcular_media($lista); // hay que poner al princio $algo para que te lo guarde ahí, si no te pone la pantalla en blanco.

echo "La media es: $media";



?>