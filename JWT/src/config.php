<?php
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    try {
        $servidor = "localhost"; //localhost, ip ou host
        $banco = "api"; //nome do banco de dados
        $usuario = "root"; //usuario
        $senha = ""; //senha de conexao
        $pdo = new PDO ("mysql:host=$servidor;dbname=$banco;charset=utf8",
            "$usuario","$senha");
    } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit;
    }
