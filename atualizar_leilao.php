<?php

use Alura\leilao\Dao\Leilao AS LeilaoDao;
use Alura\Leilao\Model\Leilao;

require_once __DIR__ . '/vendor/autoload.php';

$pdo = new \PDO('sqlite::memory:');
$pdo->exec('create_table leiloes (id ...);');

$leilao = new Leilao('Brasília Amarela');
$leilaoDao = new LeilaoDao($pdo);
$leilao = $leilaoDao->salva($leilao);