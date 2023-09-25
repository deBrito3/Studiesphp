<?php

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')) {
    echo 'Esta url é segura.'  . PHP_EOL;;
} else {
    echo 'Esta url não é segura.' . PHP_EOL;
}

if (str_ends_with($url, '.com.br')) {
    echo 'Este domínio é brasileiro.' . PHP_EOL;;
} else {
    echo 'Este domínio não é brasileiro' . PHP_EOL;;
}