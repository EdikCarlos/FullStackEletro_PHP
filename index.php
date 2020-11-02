<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Eletro</title>
    <?php

    echo '<link rel="stylesheet" type="text/css" href="estilos/estilos.css" >';
    ?>
    <script src="./scripts/functions.js"></script>
</head>
<body>
    <!--Menu-->
    <?php
        include_once('menu.html');
    ?>
    
    <main>
    <header>
    <h2>Seja bem vindx!</h2>
    </header>
    <p>Aqui em nossa loja <strong>programadores desconto</strong> nos produtos para sua casa!</p>
    </main>

    <footer id="rodape">
        <h4>Formas de pagamento</h4>
        <img src="./imagens/formas_pagto.png" alt="Formas de pagamento" width="300px">
        <p>&copy; Recode Pro</p>
    </footer>
</body>
</html>