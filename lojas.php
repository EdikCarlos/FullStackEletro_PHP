<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Lojas | Full Stack Eletro</title>
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
    <h2>Nossas Lojas</h2>
    </header>
    <hr>
    <div class="container_lojas">
        <div class="lojas">   
            <h3>Rio de Janeiro</h3>
            <p>Avenida Presidente Vargas, 5000</p>
            <p>10 &ordm; andar</p>
            <p>Centro</p>
            <p>(21) 3333-3333</p>
        </div>      

        <div class="lojas">
            <h3>São Paulo</h3>
            <p>Avenida Paulista, 985</p>
            <p>3 &ordm; andar</p>
            <p>Jardins</p>
            <p>(11) 4444-4444</p>
        </div>  

        <div class="lojas">   
            <h3>Santa Catarina</h3>
            <p>Rua Major Ávila, 370</p>
            <p>Vila Mariana</p>
            <p>(47) 5555-5555</p>
            <p>&nbsp;</p>
        </div>     
    </div> 
    </main>
    
    <footer id="rodape">
        <h4>Formas de pagamento</h4>
        <img src="./imagens/formas_pagto.png" alt="Formas de pagamento" width="300px">
        <p>&copy; Recode Pro</p>
    </footer>
</body>
</html>