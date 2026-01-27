<?php 
    require_once "conexao.php";
    require_once "auth.php";

    // Funções de Cadastro
    function validarCampoVazioCadastro($nome, $email, $senha){
        if ((empty($nome)) || (empty($email)) || (empty($senha))) {
            throw new Exception("Campo(s) Vázio(s)!");   
        }
        return true;
        exit;
    }

    function validarTamanho($nome, $email,$senha){
        if ((strlen($nome)) < 3 || (strlen($senha)) < 3) {
            throw new Exception("Tamanho minimo de 3 caracteres para Nome e/ou Senha!");
        }
        return true;
        exit;
    }

    function mensagemRetorno($cadastrado) {
        if ($cadastrado === true) {
            echo "<script>
                alert('Usuário Cadastrado com Sucesso!');
                window.location.href = 'login.html';
                </script>";
            exit;
        }
    }

    // Funções de Login
    function validarCampoVazioLogin($email, $senha){
        if ((empty($email)) || (empty($senha))) {
            throw new Exception("Campo(s) Email e/ou Senha Vazio(s)!");   
        }
        return true;
        exit;
    }

    function validarSenhas($senhaDigitada, $senhaBanco, $emailUsuario, $papel){
        $verificacao = password_verify($senhaDigitada,$senhaBanco);

        try {
            $_SESSION['logado'] = true;
            $_SESSION['user_email'] = $emailUsuario;
            $_SESSION['papel'] = $papel;
            verificarLogin($verificacao, $papel);
                
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
?>