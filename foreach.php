<?php

$laptop=["Acer nitro 5", "windows 10", "AMD ryzen 7", "8 gb de ram"];

$frutas=["Pera"=>10,"Melon"=>20,"Sandia"=>30,"Uva"=>40];

foreach ($laptop as $key => $value) {
    echo $key." -",$value.'<br>';
}


foreach ($frutas as $key => $value) {
    echo "Tenemos ".$value." piezas de ".$key.'<br>';
}