<?php   

$Dia=2;

switch ($Dia) {
    case '1':
        echo "El día es Lunes";
        break;
    case '2':
         echo "El día es Martes";
        break;
    case '3':
            echo "El día es Miercoles";
        break;
    case '4':
            echo "El día es Jueves";
        break;
    case '5':
            echo "El día es Viernes";
        break;
    case '6':
            echo "El día es Sabado";
        break;
    case '7':
            echo "El día es Domingo";
        break;
        default:
        echo "No es valido el valor ingresado";
}