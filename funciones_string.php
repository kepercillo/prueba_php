<?php
$cadena_texto="hola del mundo para el mundo";

$cadena_texto=ucfirst($cadena_texto);
echo $cadena_texto.'<br>';
echo ucfirst($cadena_texto)."<br>";

$cadena_texto=strtolower($cadena_texto);
echo strtolower($cadena_texto)."<br>";
echo $cadena_texto.'<br>';

$cadena_texto=ucwords($cadena_texto);
echo ucwords($cadena_texto)."<br>";
echo $cadena_texto.'<br>';

$cadena_texto=strtoupper($cadena_texto);
echo strtoupper($cadena_texto)."<br>";
echo $cadena_texto.'<br>';

$cadena_texto= strtolower($cadena_texto);
$cadenas=$cadena_texto;
$longitud=strlen($cadenas);
echo $cadenas." tiene ".$longitud." caracteres .<br>";

$palabras = str_word_count($cadenas);
echo  $cadenas." tiene ".$palabras." palabras.<br>";