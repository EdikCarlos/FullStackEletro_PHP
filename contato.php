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

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome','$msg')";
        $result = $conn->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos | Full Stack Eletro</title>
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
    <h2>Contatos</h2>
    </header>
    <hr>
    <div class="container_contatos">
        <div class="zap">
            <img src="./imagens/whatsapp_icon.png.png" alt="">
            <p>(11) 99999-9999</p>
        </div>
        <div class="email">
            <img src="./imagens/email.png.png" alt="">
            <p>contato@fullstackeletro.com</p>
        </div>
    </div>
        

    <form action="" method="post">
        <h4>Nome: </h4>
        <input class="nome" type="text" name="nome" style="width: 400px;">
        <h4>Mensagem:</h4>
        <input class="area_texto" type="textarea" name="msg" style="width: 400px; height:50px;"><br>
        <input class="enviar" type="submit">
    </form>
    </main>
    <hr>
    <div style="text-align: center; margin-top: 10px;">
    <?php
        $sql = "select * from comentarios";
        $result = $conn->query($sql);
       
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
                echo "<hr>";
            }
        } else {
            echo "Nenhum produto encontrado.";
        }
        ?>
    </div>
    <footer id="rodape">
        <h4>Formas de pagamento</h4>
        <img src="./imagens/formas_pagto.png" alt="Formas de pagamento" width="300px">
        <p>&copy; Recode Pro</p>
    </footer>
</body>
</html>