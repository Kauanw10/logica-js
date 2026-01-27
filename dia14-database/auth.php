<?php 
    
    require_once "conexao.php";

    function verificarLogin($verificacao, $papel){
        if ($verificacao) {
            verificarAdmin($papel);
        }else {
            throw new Exception("Senha Incorreta");
            exit;
        }
    }

    function verificarAdmin($papel){
        # code...
        if (isset($papel) && $_SESSION['papel'] === 'admin') {
            header("Location: admin.php");
            exit;
        } else {
            header("Location: perfil.php");
            exit;
        }
    }

?>