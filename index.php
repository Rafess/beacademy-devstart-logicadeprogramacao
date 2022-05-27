<?php
    $balance = 200.00;
    $deposit = (float)readline("Quanto deseja depositar? ");
    echo("Saldo anterior: {$balance} \n");
    $balance += $deposit;
    echo("Seu saldo atual: {$balance}");
?>

