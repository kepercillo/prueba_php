<?php
$fecha_1="2027/11/12";
$fecha_2="1987-05-03";
$numero="uno dos tres cuatro cinco seis siete";

$array_fecha= explode ("/",$fecha_1);
echo $array_fecha[1]."<br>";

$array_numero= explode (" ",$numero);
echo $array_numero[1]."<br>";

$array_numero= explode (" ",$numero,5);
echo $array_numero[0]."<br>";
