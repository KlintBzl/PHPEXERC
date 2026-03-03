<?php
require_once "dados.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
    <div class="card">
        <!-- Uso de  -->
    <h1><?= saudar($nome, $curso); ?></h1>

    <!-- Uso de echo -->
    <p>
        <?php echo "Ano atual: " . $ano; ?>
    </p>

    <!-- Condicional -->
    <?php if ($ano >= 2025): ?>
        <p class="destaque">Sistema atualizado.</p>
    <?php else: ?>
        <p class="destaque">Sistema desatualizado.</p>
    <?php endif; ?>

</div>
</body>
</html>