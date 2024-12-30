<?php

// cada vuelta se llama iteracion

// el ciclo for, while y foreach son los mas comunes

// Estructura del ciclo for
for ($i = 1; $i < 12; $i++) {
    echo $i;
}




$seguimios= 1;
$saltos =13;



// Estructura del ciclo while

while($seguimos==1){
    echo "ciclo while";

    if ($saltos == 0){
        $seguimios= 0;
    }else{
        $saltos--;
    }
}


$paises = array("Mexico","Vensezuela","Ecuador","Colombia","Peru");


// Estructura del ciclo foreach

foreach($paises as $pais){
    echo "$pais";
}



