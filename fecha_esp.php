<?php
date_default_timezone_set("America/Mexico_City");

function fecha_esp_lar(){
   $fecha_dia=date("d");
   $fecha_mes=date("m");
   $fecha_anio=date("y");


   $dia_semana=[
    "Monday"=>"Lunes",
    "Tueday"=>"Martes",
    "Wednesday"=>"Miercoles",
    "Thursday"=>"Jueves",
    "Friday"=>"Viernes",
    "Saturday"=>"Sabado",
    "Sunday"=>"Domingo"
   ];

    $meses=[
    "01"=>"Enero",
    "02"=>"Febrero",
    "03"=>"Marzo",
    "04"=>"Abril",
    "05"=>"Mayo",
    "06"=>"Junio",
    "07"=>"Julio",
    "08"=>"Agosto",
    "09"=>"Septiembre",
    "10"=>"Octubre",
    "11"=>"Noviembre",
    "12"=>"Diciembre"
    ];

    $fecha_final=$dia_semana[date("l")]." ".$fecha_dia." de " .$meses[$fecha_mes]." de ".$fecha_anio;

    return $fecha_final;


}

echo fecha_esp_lar();


echo "<br>";

function fecha_esp_corta($fecha=""){

    if ($fecha=="") {
        $fecha=date("d-m-Y");
    }else {
            $fecha=date("d-m-Y",strtotime($fecha));
        }        

    $fecha=explode("-",$fecha);

    $fecha_dia=$fecha[0];
    $fecha_mes=$fecha[1];
    $fecha_anio=$fecha[2];
 
     $meses=[
     "01"=>"Enero",
     "02"=>"Febrero",
     "03"=>"Marzo",
     "04"=>"Abril",
     "05"=>"Mayo",
     "06"=>"Junio",
     "07"=>"Julio",
     "08"=>"Agosto",
     "09"=>"Septiembre",
     "10"=>"Octubre",
     "11"=>"Noviembre",
     "12"=>"Diciembre"
     ];
 
     $fecha_final=$fecha_dia." de " .$meses[$fecha_mes]." de ".$fecha_anio;
 
     return $fecha_final;
 
 
 }

 echo fecha_esp_corta("2010/08/11");
 echo "<br>";
 echo fecha_esp_corta("y-m-d");
 echo "<br>";
 echo fecha_esp_corta("02-05-2024");
 echo "<br>";