<?php
require_once "dados.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Document</title>

    <h1>Atividade 1</h1>

    <?php
    echo("Meu nome é: " . $nome);
    ?>
    
    <p>Moro em: <?= $cidade ?></p>

    <h4><?php echo("Estou cursando" . $curso) ?></h4>
</head>
<body>
    
</body>
</html>