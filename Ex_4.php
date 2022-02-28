<?php 
/*Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i
 assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

El valor de cada variable
La suma
La resta
El producte
El mòdul
Per N i M realitzaràs el mateix.

Per a totes les variables (X, Y, N, M)

El doble de cada variable
La suma de totes les variables
El producte de totes les variables*/

$X = 4;
$Y = 5;

$N =1.1;
$M =1.2;

echo "$X\n"; 
echo "$Y\n";

echo "$M\n"; 
echo "$N\n";
 
$resultsum_xy=$X+$Y;  
echo "$resultsum_xy\n";  

$resultresta_xy=$X-$Y;
echo "$resultresta_xy\n";  
 
$resultprodu_xy=$X*$Y;
echo "$resultprodu_xy\n";

$resultmodulo_xy= $X%$Y;
echo "$resultmodulo_xy\n";

 
$resultsum_mn=$M+$N;  
echo "$resultsum_mn\n"; 

$resultresta_mn=$M-$N;
echo "$resultresta_mn\n";

$resultprodu_mn=$M*$N;
echo "$resultprodu_mn\n";

$resultmodulo_mn=$M%$N;
echo "$resultmodulo_mn\n";

$resultsumtotal=$M+$N+$X+$Y;
echo "$resultsumtotal\n";

$resultprodutotal=$M*$N*$X*$Y;
echo "$resultprodutotal\n";

$doble_M= $M*2;
echo "$doble_M\n";


$doble_N= $N*2;
echo "$doble_N\n";

$doble_X= $X*2;
echo "$doble_X\n";

$doble_Y= $Y*2;
echo "$doble_Y\n";



?>