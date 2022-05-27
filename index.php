<?php
$number1 = readline("Digite o primeiro número: ");
$number2 = readline("Digite o segundo número: ");
$operation = readline("Digite a operação que deseja fazer( +, -, *, /): ");

switch ($operation) {
    case "+" :
        $result = $number1 + $number2;
        echo("{$number1} {$operation} {$number2} = {$result}");
    case "-" : 
        $result = $number1 - $number2;
        echo("{$number1} {$operation} {$number2} = {$result}");
    case "/" : 
        $result = $number1 / $number2;
        echo("{$number1} {$operation} {$number2} = {$result}");
    case "*" : 
        $result = $number1 * $number2;
        echo("{$number1} X {$number2} = {$result}");

}
?>

