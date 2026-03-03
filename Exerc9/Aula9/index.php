<?php
require_once "dados.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
    
<?php if($hora < 12 ): ?>
    <h1><?= "Agora são: " . $hora ?></h1>
<h1 class="BD">Bom dia!</h1>
<?php elseif($hora > 12 & $hora < 18): ?>
    <h1><?= "Agora são: " . $hora ?></h1>
<h1 class="BT">Boa tarde!</h1>
<?php elseif($hora > 18): ?>
    <h1><?= "Agora são: " . $hora ?></h1>
<h1 class="BN">Boa noite!</h1>
<?php endif;
 ?>
</body>
</html>