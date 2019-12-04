<?php
// abre a conexao com banco
include("conexao.php");

// Recupera a ID do registro para alteração (UPDATE)
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM tbalunos WHERE id = ' " . $id . " ' ") or die("Erro.");
$dados = mysqli_fetch_assoc($sql);
    $id = $dados["id"];
    $nome = $dados["nome"];
    $email = $dados["email"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Alterar Dados</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>ATUALIZAR REGISTRO NO BANCO DE DADOS</h1>
<form action ="update.php" method ="post">

    <p>ID:<input type = "text" name = "id" value="<?php print $id;?>"></p>

    <p>Nome: <input type = "text" name = "nome" value="<?php print $nome;?>"></p>

    <p>E-mail: <input type = "text" name = "email" value="<?php print $email;?>"></p>

    <p>
    <input type="submit" name = "submit" id = "submit" value = "Enviar">
    </p>

</form>
</body>
</html>