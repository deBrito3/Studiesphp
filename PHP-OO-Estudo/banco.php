<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('vitoria', 'mangueira', 'rua de casa', '1000');
$vinicius = new Titular(new CPF('100.200.304-40'), 'De Brito', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(780);
$primeiraConta->saca(322);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('200.100.304-40'), 'Jenifer', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.456.789-10'), 'fulano', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
