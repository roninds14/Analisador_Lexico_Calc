<?php

require_once "PHP/Config/Config.php";

use Arquivos\TrataArquivo;
use Analisador\AnaLex;
use Compilador\Compila;

$dados = new TrataArquivo("soma.txt");

$linhas = $dados->texto();

$results = new Compila( $linhas );

$results->compilar();

print_r( $results->getResultados() );