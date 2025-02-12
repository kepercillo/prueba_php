<?php 

$texto="mexico";
$variable_1=$texto;
$variable_2=&$texto;

echo $variable_2;

$texto="chiapas, mexico";
echo $variable_2;


?>