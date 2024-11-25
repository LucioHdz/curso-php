<?php
$n1 = 1;


if ($n1 == 9) {
    echo "Igual a 9";
} elseif ($n1 == 8) {
    echo "Igual a 8";
} elseif ($n1 == 7) {
    echo "Igual a 7";
} elseif ($n1 == 6) {
    echo "Igual a 6";
} elseif ($n1 == 5) {
    echo "Igual a 5";
} elseif ($n1 == 4) {
    echo "Igual a 4";
} elseif ($n1 == 3) {
    echo "Igual a 3";
} else {
    echo "El valor es: ", $n1;
}



switch ($n1) {
    case 11:
        echo "Es 11";
        break;
    case 10:
        echo "Es 10";
        break;
    case 9:
        echo "Es 9";
        break;
    case 8:
        echo "Es 8";
        break;
    case 7:
        echo "Es 7";
        break;
    case 6:
        echo "Es 6";
        break;
    case 5:
        echo "Es 5";
        break;
    case 4:
        echo "Es 4";
        break;
        default:
            echo "Realmente Es:", $n1;
        break;
}
