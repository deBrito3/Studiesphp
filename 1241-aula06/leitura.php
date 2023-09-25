<?php

$num = readline('Digite sua string: ');

if ($num > 0) {
    echo "O número $num é positivo.";
} elseif ($num < 0) {
    echo "O número $num é negativo";
} else {
    echo "O número é igual a zero";
}
