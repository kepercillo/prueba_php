<?php 
#array de tipo escalar
$estudiantes=["carlos","pedro","antonio","miguel","angel",7];
$estudiantes[3]="federica";
echo $estudiantes[5];

#array de tipo asociativo
$tutor=["nombre"=>"Eduardo",
        "apellido"=>"Estrada",
        "edad"=>27];

    $tutor["edad"]=20;

echo $tutor["edad"];

#array de multiples dimensiones
$tutor_2=[
        "nombre"=>"Jose",
        "apellido"=>"Lopez",
        "edad"=>27,
        "cursos"=>["php","phyton","csc"]
];

$tutor_2["cursos"][1]="javascript";
$tutor_2["pais"]="Mexico";

echo $tutor_2["cursos"][1];
echo $tutor_2["pais"];
echo count($tutor_2,COUNT_RECURSIVE);
?>