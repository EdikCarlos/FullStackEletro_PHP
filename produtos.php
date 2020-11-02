<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "fseletro";

 $conn = mysqli_connect($servername, $username, $password, $database);
 mysqli_set_charset($conn,"utf8");

 if(!$conn) {
     die('Conexao com erro ou inexistente'. mysqli_connect_error());
 }

 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | Full Stack Eletro</title>
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
    <h2>Produtos</h2>
    <hr>
    </header>
    
    <section class="categorias">
        <h3>Categorias</h3>
        <ul>
            <li onclick="exibir_todos()">Todos (12)</li>
            <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
            <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('lavaroupas')">Lavadora de roupas (2)</li>
            <li onclick="exibir_categoria('lavaloucas')">Lava-louças (2)</li>
        </ul>
    </section>
    <section class="produtos">



        <?php
        $sql = "select * from produtos";
        $result = $conn->query($sql);
       
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){

        ?>
            <div class="box_produto" id="<?php echo $rows["categoria"] ?>">
            <img class="itens" src="<?php echo $rows["imagem"] ?>" onclick="zoom(this)">
            <br>
            <p class="descricao"><?php echo $rows["descricao"] ?></p>
            <p class="descricao" style="text-decoration: line-through;"><?php echo $rows["precoinicial"] ?></p>
            <p class="preco"><?php echo $rows["precofinal"] ?></p>
            <hr>
            </div>

        <?php
                
            }
        } else {
            echo "Nenhum produto encontrado.";
        }
        ?>
    </section>
    </main>

    <footer id="rodape">
        <h4>Formas de pagamento</h4>
        <img src="./imagens/formas_pagto.png" alt="Formas de pagamento" width="300px">
        <p>&copy; Recode Pro</p>
    </footer>
</body>
</html>