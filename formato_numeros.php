<?php
$cantidad_1=12732.77;
$cantidad_2=1931.81;


echo  number_format($cantidad_1)."<br>";
echo  number_format($cantidad_2,2,".",",")."<br>";//con dos decimales
echo  number_format($cantidad_2,0,".",",")."<br>";//sin decimales
