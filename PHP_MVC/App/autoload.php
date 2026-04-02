<?php

// Autoload simples por namespace, baseado na raiz do projeto (PHP_MVC)
$__projectRoot = realpath(__DIR__ . '/..');

spl_autoload_register(function (string $class) use ($__projectRoot): void {
    // Converte namespace em caminho de arquivo
    $relativePath = str_replace('\\', DIRECTORY_SEPARATOR, ltrim($class, '\\')) . '.php';
    $file = $__projectRoot . DIRECTORY_SEPARATOR . $relativePath;

    if (is_file($file)) {
        require_once $file;
    }
});