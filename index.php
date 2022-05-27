<?php

$age = (int)readline('Digite sua idade: ');

if($age < 19) {
    echo("Menor de idade!");
} else if($age >= 18 && $age < 60) {
    echo("Adulto");
} else {
    echo("Idoso");
}


?>

