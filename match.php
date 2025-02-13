<?php
$edad=18;
$resultado = match(true){
     $edad=> 60=> "Eres de la tercera edad",
     $edad=> 30=> "Eres de adulto",
     $edad=> 18=> "Eres un adulto joven" ,
     default=>"eres un niño"
};
echo $resultado;