<?php 
    session_start();
    if (!$_SESSION['papel'] === 'admin' || $_SESSION['logado'] !== true) {
        echo "<script>
            alert('Acesso Bloqueado!!');
            window.history.back();
          </script>";
       exit;
    }
    require_once "conexao.php";
    
    $stmt = $pdo->prepare("SELECT * FROM usuarios");
    $stmt->execute();
    $lista = $stmt->fetchAll(\PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h4>Partiu Listar</h4>

    <pre>
    <?= 
    print_r($lista);
    print_r($_SESSION);
    ?>
    </pre>

    <a href="sair.php">Sair</a>
</body>
</html>