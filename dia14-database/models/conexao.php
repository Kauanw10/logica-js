<?php 
    require_once "funcoes.php";

    $dsn = 'mysql:dbname=sistema;host=localhost';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e) {
        registrarErro($e);
        echo "<script>
                alert('Ocorreu um problema. Tente novamente.');
                window.history.back();
            </script>";
            exit;
    }
?>