<?php
// não se esqueça, para iniciar o programa use php e o nome desse arquivo (index.php)
$name = readline('Digite seu nome: ');
$age = (int)readline('Digite sua idade: ');

echo ("Nome: {$name}, Idade: {$age}; \n");


if($age > 18) {
    echo "Verdadeiro \n";
};

if($age !== 25) {
    echo "Falso \n";
};

if($name === "Marcos" && $age !== 25) {
    echo "Falso \n";
};

if($age !== 25 || $name === "Marcos") {
    echo "Verdadeiro \n";
};

if($age % 2 === 0) {
    echo "Verdadeiro \n";
};
?>

