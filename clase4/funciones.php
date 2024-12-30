<?php



function saludar($nombre){
    return "Hola ".$nombre."!!";
}
echo saludar("Lucio");

function saludarSinParametros(){
    return "Hola mundo";
}
saludarSinParametros();



function suma($n1=1,$n2=2){
    return $n1+$n2;
}


echo suma();
echo suma(3,12);