<?php
// não se esqueça, para iniciar o programa use php e o nome desse arquivo (index.php)
$name = readline('Digite seu nome: ');
$hight = (float)readline('Digite sua altura em metros: ');
$weight = (float)readline('Digite seu peso em kg: ');
$IMC = ($weight / ($hight ** 2)); // imc = peso dividido pela altura ao quadrado;
echo ("Nome: {$name}, Altura: {$hight}m, Peso: {$weight}kg, IMC: {$IMC}.");


?>

