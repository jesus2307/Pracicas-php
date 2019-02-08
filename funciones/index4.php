<?php
// ejercicio 1 y 2 

// Definicion de funcion

function imprimir_tabla($numero)
{
    echo "<h2>Tabla del $numero</h2>";
    echo "<table border=\"1\" cellpadding=\"5\">";

    for($i=1; $i<=10; $i++) 
    {

        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>".($numero * $i)."</td>";
        echo "</tr>";     

    }
    
    echo "</table>";
}
//imprimir_tabla(7); este es basico 

// a partir de aqui es mas generico que poner solo en el for $1 hasta $i <=10
function imprimir_tablas($inicio, $fin)
{
    

for ($i = $inicio; $i <= $fin; $i++)
{
    imprimir_tabla($i);

}
}   
imprimir_tablas(1,10); // esto muestra el resultado de lo anterior




?>