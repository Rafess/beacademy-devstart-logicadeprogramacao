<?php
// não se esqueça, para iniciar o programa use php e o nome desse arquivo (index.php)
$hight = (float)readline('Digite sua altura em metros: ');
$weight = (float)readline('Digite seu peso em kg: ');
$IMC = ($weight / ($hight ** 2)); // imc = peso dividido pela altura ao quadrado;

if($IMC < 19) {
    echo("Você está abaixo do peso! Seu IMC é de {$IMC}");
} else if($IMC >= 19 && $IMC <25) {
    echo("Você está com o peso normal! Seu IMC é de {$IMC}");
} else if($IMC >= 25 && $IMC <30) {
    echo("Você está com sobrepeso! Seu IMC é de {$IMC}");
} else if($IMC >= 30 && $IMC < 40) {
    echo("Você está com obesidade tipo I! Seu IMC é de {$IMC}");
} else {
    echo("Você está com obesidade mórbida! Seu IMC é de {$IMC}");
}


?>

