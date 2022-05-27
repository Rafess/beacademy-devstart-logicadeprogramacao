<?php
$balance = 200.00;
$times = (int)readline("Quantas vezes deseja repetir? ");

for($i = 0; $i < $times; $i+=1) {
    $operation = (int)readline("Qual operação deseja fazer: 1- Desposito; 2- Saque, 3- Transferência; \n");
    $value = (int)readline("Qual o valor da operação? ");
    switch ($operation) {
        case 1:
            echo("Seu saldo inicial: {$balance} \n");
            echo("Operação realizada: Deposito \n");
            $balance += $value;
            echo("Saldo atual: {$balance}");
            break;
        case 2: 
            echo("Seu saldo inicial: {$balance} \n");
            echo("Operação realizada: Saque \n");
            $balance -= $value;
            echo("Saldo atual: {$balance}");
            break;
        case 3:
            $bank = readline("Qual o nome do banco? ");
            $agency = readline("Qual o número da agência? ");
            $account = readline("Qual o número da conta? ");
            echo("Seu saldo inicial: {$balance} \n");
            echo("Operação realizada: Transferência para: \n
            Banco: {$bank} \n
            Agência: {$agency} \n
            Conta: {$account} \n
            Valor: {$value} \n");
            $balance -= $value;
            echo("Saldo atual: {$balance}");
            break;
    }
}
?>

