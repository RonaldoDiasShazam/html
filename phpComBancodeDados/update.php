<?php
# ABRE A CONEXÂO COM O BANCO
include("conexao.php");

# RECUPERA OS VALORES DOS CAMPOS PASSADOS PELA PÁGINA UPDATE_FORM.php
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

# SENTENÇA SQL PARA EXECUÇÃO DA ALTERAÇÃO DOS DADOS PELA INSTRUÇÃO UPDATE
$sql="UPDATE tbalunos SET nome='$nome', email='$email' WHERE id = '" . $id . "'";

// CASO ESTEJA TUDO OK ATUALIZA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con, $sql))
{
    die('ERROR: ' . mysqli_error($con));
}

// MOSTRA A MENSAGEM DE SUCESSO
echo "Um(1) registro ALTERADO.";

# APÓS A ALTERAÇÃO, VOLTA PARA A LISTA DOS REGISTROS DEPOIS DE 2 SEGUNDOS
print "<meta http-equiv='refresh' content='2; url=listar.php'>";

// FECHAR A CONEXÃO COM O mysqli
mysqli_close($con);
?>