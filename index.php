<?php
$value = (int)readline("Digite o número que deseja calcular a tabuada: ");

for($i = 1; $i <= 10; $i += 1) {
    $result = $i * $value;
    echo("{$value} x {$i} = {$result} \n");
}

?>

