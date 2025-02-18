<?php


$arreglo1=[5,10,43,50,59,6,88];
$valores=count($arreglo1);

foreach ($arreglo1 as $key => $value) {
    
if(esPrimo($value)){
    echo $value.' Es primo'.'<br>';
}else{
    echo $value.' No es primo'.'<br>';
}
}

function esPrimo($value)
{
    if(!is_numeric($value))
        //Comprobamos si es un número valido, ya que sino nos dara un error 500. 
        return false;
    
    for ($i = 2; $i<$value; $i++) {
        
        if (($value % $i) == 0) {
            
            // No es primo :(
            return false;

        }

    }

    // Es primo :)
    return true;
}
