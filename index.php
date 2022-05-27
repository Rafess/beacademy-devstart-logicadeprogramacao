<?php
$number = (int)readline("Digite um número para ver a tabuada: ");
$i = 1;
while($i <= 10) {
    $result = $number * $i;
    echo("{$number} X {$i} = {$result} \n");
    $i += 1;
}
?>

