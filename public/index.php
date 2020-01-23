<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\InterfaceControllerRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    echo "Erro 404";
    exit();
}

$classeControladora = $rotas[$caminho];
/** @var InterfaceControllerRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();