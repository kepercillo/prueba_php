<?php


function saludo($nombre){
    echo "Hola mundo mundial mi nombre es: $nombre".'<br>';
}

echo saludo("nicole");

$usuario="Ashley";
echo saludo($usuario);

echo saludo($nombre="carlos");

//metodos en los cuales se les puede asignar datos a una variable dentro de una funcion


function promedio_alumno ($nota_1,$nota2,$nota_3){
    $promedio=($nota_1+$nota2+$nota_3)/3;
    return $promedio;
}


$promedio=promedio_alumno(7,9,6);
echo "el promedio es : .$promedio".'<br>';

echo "el promedio es : ".promedio_alumno (7,9,10).'<br>';
echo "el promedio es : ".promedio_alumno (5,8,10).'<br>';
echo "el promedio es : ".promedio_alumno (9,10,4).'<br>';
echo "el promedio es : ".promedio_alumno (7,8,8).'<br>';