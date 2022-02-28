<?php 

$texto= 'Hello, World!'; 
$frase='Este el curso de PHP';

echo "$texto\n"; 
echo strtoupper($texto)."\n";  //Convertimos a mayusculas
echo strlen($texto)."\n"; //medimos longitud de string
echo strrev($texto)."\n";//invierte el string
echo $texto.$frase."\n";//concatenación de dos Strings

?>