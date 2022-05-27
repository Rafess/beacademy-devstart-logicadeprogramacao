<?php
$figure = readline("Escolha a figura geométrica desejada: Q-Quadrado T-Triangulo: ");

switch ($figure) {
    case "T" :
        $base = readline("Digite a medida da base: ");
        $sideA = readline("Digite a medida do lado do triangulo: ");
        $sideB = readline("Digite a medida do outro lado do triangulo: ");
        $height = readline("Digite a altura: ");
        $area = ($base * $height);
        $perimeter = ($base + $sideA + $sideB);
        echo("A área do triangulo é: {$area} \n E o perímetro é: {$perimeter}");
        break;
    case "Q" : 
        $side = readline("Digite a medida do lado do quadrado: ");
        $area = ($side ** 2);
        $perimeter = ($side * 4);
        echo("A área do quadrado é: {$area} \n E o perímetro é: {$perimeter}");
        break;
   }
?>

