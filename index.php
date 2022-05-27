<?php
$balance = 200.00;
$operation = (int)readline("qual operação deseja fazer: 1- Desposito; 2- Saque;\n");
$value = (int)readline("Qual o valor da operação? ");

if($operation === 1) {
    echo("Seu saldo inicial: {$balance} \n");
    echo("Operação realizada: Deposito \n");
    $balance += $value;
    echo("Saldo atual: {$balance}");
} else{
    echo("Seu saldo inicial: {$balance} \n");
    echo("Operação realizada: Saque \n");
    $balance -= $value;
    echo("Saldo atual: {$balance}");
};

?>

