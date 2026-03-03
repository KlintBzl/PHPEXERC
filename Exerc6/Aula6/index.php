<?php
require_once "dados.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>
    <?php
    echo "Preço do produto: R$ " . number_format($preco, 2);
    ?>
</h1>

</body>
</html>