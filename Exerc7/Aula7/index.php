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
    
<h1>
    <?php if($nota >= 7): ?>
    <?= "Nota: " . $nota ?>
    <h1 class="aprovado">Aprovado!!!</h1>
    <?php else: ?>
    <?= "Nota: " . $nota ?>
    <h1 class="reprovado">REPROVADO!!!</h1>
    <?php endif; ?>


</body>
</html>