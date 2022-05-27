<?php
$initialValue = (int)readline("Digite o valor incial: ");
$finalValue = (int) readline("Digite o valor final: ");

for($i = $initialValue; $i <= $finalValue; $i += 1) {
    if($i % 3 === 0) {
        echo("{$i} \n");
    }
}

?>

