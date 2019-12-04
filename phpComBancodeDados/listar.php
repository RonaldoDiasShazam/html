<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>LISTAR OS REGISTROS NO BANCO</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>LISTAR OS REGISTROS DO BANCO DE DADOS</h1>
    <br>
    <?php
    //  ABRE A CONEXÃO COM O MYSQL E BANCO DE DADOS
    include("conexao.php");

    $sql = mysqli_query($con, "SELECT * FROM tbalunos") or
    die ("Erro. ");
    while ($dados = mysqli_fetch_assoc($sql))
    {
        $id = $dados["id"];
        $nome = $dados["nome"];
        $email = $dados["email"];
        ?>

        <p> ID = <?php print $id ?>         <br>
        <p> NOME = <?php print $nome ?>     <br>
        <p> E-MAIL = <?php print $email ?>  <br> 
        
        <a href="update_form.php?id=<?php print $id; ?>" style="color: #ff7b89">ALTERAR</a>     <!-- Se conecta com o aquivo ||update_form.php|| -->
        <a href="delete.php?id=<?php print $id; ?>" style="color: #25ddae">APAGAR</a>           <!-- Se conecta com o aquivo ||delete.php|| -->
        
    </p>

    <?php
    } // fechar o laço do While

    // FECHAR A CONEXÃO COM O MYSQL 
    mysqli_close($con);

    ?>
</body>
</html>