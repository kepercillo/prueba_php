<?php
$edad=55;
$genero="h";

if($genero=="M"){
        if ($edad>=60) {
            echo "puede jubilarse";
    }else {
        echo"aun no puede jubilarce";
    }
}elseif($genero=="F"){
    if ($edad>54) {
        echo "puede jubilarse";
    }else{
    echo"aun no puede jubilarce";
    }
}else{
    echo"coloque una opcion valida";
}