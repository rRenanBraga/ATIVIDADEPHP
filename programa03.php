<?php
/*
Faça um programa em PHP que defina uma variável com o peso e a altura 
de uma pessoa. Calcule e mostre o IMC.
*/

echo "<br><br> ATIVIDADE 03 <br><br>";

echo "<br>";
echo "ALTURA: 1.80 <br>";
echo "PESO: 72";

$altura = 1.80;
$peso = 72;

echo "<br><br>";

$imc = $peso / ($altura*$altura);
echo "O IMC É: ".number_format($imc, 2);

echo "<br>";
?>