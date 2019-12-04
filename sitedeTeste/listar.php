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

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <h1>LISTAR OS REGISTROS DO BANCO DE DADOS</h1>
    <br>


<!-- COMEÇAR TABELA -->
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">N. Inscrição</th>
                <th scrope="col">Nome</th>
                <th scope="col"> E-Mail</th>
            </th>
        </thead>
        <tbody>
    

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


<!-- While para repetir as linhas da tabelas -->
        <tr class= "lead text-muted">
        <th scope="row"><?php print $id ?></th>
        <td><?php print $nome ?></td>
        <td><?php print $email ?></td> 
        
        <td><a href="update_form.php?id=<?php print $id; ?>" style="color: #ff7b89">ALTERAR</a></td>     <!-- Se conecta com o aquivo ||update_form.php|| -->
        <td><a href="delete.php?id=<?php print $id; ?>" style="color: #25ddae">APAGAR</a></td>           <!-- Se conecta com o aquivo ||delete.php|| -->
    </th>

    <?php
    } // fechar o laço do While

    // FECHAR A CONEXÃO COM O MYSQL 
    mysqli_close($con);

    ?>

</tbody>
</table>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>