<?php
// index.php

// ativa exibição de erros enquanto testa
ini_set('display_errors',1);
error_reporting(E_ALL);

// carrega o controller único
require_once __DIR__ . '/../Controller/AppController.php';
$ctrl = new AppController();

// pega módulo, ação e id
$module = $_GET['module']  ?? 'user';          // 'user' ou 'skin'
$action = $_GET['action']  ?? ($module==='user' ? 'form' : 'index');
$id     = $_GET['id']      ?? null;

// monta nome do método, ex: userCreate, skinEdit...
$method = $module . ucfirst($action);

// chama ou dá 404
if (method_exists($ctrl, $method)) {
    // se o método espera um parâmetro, passa o $id
    if ($id !== null && (new ReflectionMethod($ctrl, $method))->getNumberOfParameters() === 1) {
        $ctrl->$method($id);
    } else {
        $ctrl->$method();
    }
} else {
    http_response_code(404);
    echo "<h1>404 — Método '{$method}' não encontrado</h1>";
}
