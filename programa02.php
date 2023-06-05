<?php 
/*
Faça um programa PHP que defina uma constante PI com valor 3.141592. 
Crie uma variável, atribua um valor que represente o raio de uma esfera. 
Calcule e apresente sua área e seu volume, dados pelas fórmulas
*/

echo "<br><br> ATIVIDADE 02 <br><br>";

define ("PI", 3.141592);

$raio = 5; 

$area = 4 * PI * ($raio * $raio);

$volume = (4/3) * PI * ($raio * $raio * $raio);

echo "Área da esfera: " . number_format($area, 2) . "<br>";
echo "Volume da esfera: " . number_format($volume, 2) . "<br>";
?>