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
</head>
<body>

<div class="card">
    <h2><strong><?= "Nome: " . $nome ?></strong> <br></h2>
    <?= "Idade: " . $idade ?><br>
    <?= "Profissão: " . $profissao ?>
</div>
    
</body>
</html>