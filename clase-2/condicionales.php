<?php

/*
    compara el primer valor con el segundo valor
    Operadores de comparación:

    == igual a
    === igual exacto a
    > mayor que
    < menor que
    >= mayor igual que
    <= menor igual que
    != distinto a

    
    Operadores aritmeticos:
    + suma
    - resta
    / division
    * multiplicacion

    % resto de una division


    Operadores logicos:

    and     Las dos condiciones deben de ser verdadero
    &&     Las dos condiciones deben de ser verdadero
    or      Una condicion debe de ser verdadero
    ||      Una condicion debe de ser verdadero

*/
$numero1 = 1;
$numero2 = 1;
$numero3 = 2;
$numero4 = 3;

if($numero1<= $numero3){
    echo "<p>El numero ", $numero1, " es menor al numero ", $numero3,"</p>";
}

if ($numero1 == $numero2){
    echo "<p>El numero ", $numero1, " es igual al numero ", $numero2,"</p>";
}else{
    echo "<p>El numero ", $numero1, " es distinto al numero ", $numero2,"</p>";
}



?>