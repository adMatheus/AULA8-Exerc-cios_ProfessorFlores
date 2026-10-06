<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Boas-Vindas</title>
</head>
<body>
    <h2>Bem-vindo,Curitibano <?php echo $_SESSION['usuario']; ?>!</h2>
</body>
</html>