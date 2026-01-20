<?php 
    $user = trim($_POST['usuario'] ?? '');
    $pass = trim($_POST['senha'] ?? '');
    
    try {
        validarUser($user);
        validarPass($pass);

        session_start();
        $_SESSION['logado'] = (validarAdmin($user, $pass) ? true : false);
        include_once "dashboard.php";

    } catch (\Throwable $e) {
        echo $e->getMessage();
        include_once "login.html";
    }

    function validarUser($user) {
        if (empty($user)) {
            throw new Exception("Campo Usuário Vázio");
            exit;
        }

        return [
            'sucesso' => true
        ];
    }

    function validarPass($pass){
        if (empty($pass)) {
            throw new Exception("Campo Senha vázio");
            exit;
        } elseif (strlen($pass) < 3) {
           throw new Exception("Minimo 3 caracteres para a Senha.");
           exit;
        }

        return [
            'sucesso' => true
        ];
    }
    
    function validarAdmin($user, $pass) {
        if (($user != "admin") || ($pass != "12345")) {
            return false;
        }

       return true;

    }
?>