<?php 


/*Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.
Afegeix un valor més a l'array que conté 3 integers.
Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.
Ara imprimeix per pantalla l'array resultant valor a valor.
Consell: pot ser que les funcions var_dump () i / o print_r () et resultin útils per
a visualitzar el contingut de les teves arrays.*/

$array5int = array(111, 333, 555,444,888);
$array3int = array(222,4444,777);

array_push($array3int ,999);

$array_merge_result = array_merge($array5int,$array3int);

print_r($array_merge_result);

var_dump ($array_merge_result);


?>