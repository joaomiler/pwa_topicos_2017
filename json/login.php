<?php
    session_start();
    
    include "config.php";
    
    $msg = "erro";
    
    if ($_POST["email"]) {
        $email = $senha = "";
        if (isset($_POST["email"])) $email = 
                trim($_POST["email"]);
        if (isset($_POST["senha"])) $senha =
                trim($_POST["senha"]);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg = "erro;E-mail {$email} é inválido.";
        } else if (empty ($senha)) {
            $msg = "erro;A senha está vazia.";
        } else{
            $sql = "select * from cliente "
                    . "where email = ? limit 1";
            $res = $pdo->prepare($sql);
            $res->bindParam(1, $email);
            $res->execute();
            $dados = $res->fetch(PDO::FETCH_OBJ);
            $senha = md5($senha);
            
            if (!isset($dados->id)) {
                $msg = "erro;Usuário não localizado.";
            } else if ($senha != $dados->senha) {
                $msg = "erro;A senha é inválida.";
            } else {
                $_SESSION["usuario"]= $dados->nome;
                $msg = "ok;$dados->id;$dados->nome";
            }
        }
    } else {
        $msg = "erro;Requisição inválida!";
    }
    echo $msg;