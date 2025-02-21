<?php

$clave="HolaMundo123";

echo md5($clave);
echo "<br>";
echo sha1($clave);
echo "<br>";
echo hash("md5",$clave);

//foreach(hash_algos()as $algoritmos)
//echo $algoritmos." - ".hash("$algoritmos",$clave)."<br>";

echo password_hash($clave,PASSWORD_DEFAULT);
echo "<br>";
echo password_hash($clave,PASSWORD_BCRYPT);
echo "<br>";
$clave_2="1234567";
$clave_procesada=password_hash($clave,PASSWORD_BCRYPT,["cost"=>12]);
echo password_verify($clave,$clave_procesada)."<br>";
echo "las claves coniciden";


if(password_verify($clave_2,$clave_procesada)) {
    echo password_verify($clave_2,$clave_procesada);
echo "las claves coniciden";
}else {
    echo "las claves no coinciden";
}