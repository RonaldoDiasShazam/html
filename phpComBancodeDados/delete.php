<?php
# ABRE A CONEXÃO COM O BANCO
include("conexao.php");

// Recupera o ID do registro para apagar (DELETAR)
$id = $_GET['id'];

# SENTENÇA SQL PARA EXECUÇÃO DA EXCLUSÃO DOS DADOS PELA INSTRUÇÃO DELETE
$sql="DELETE FROM tbalunos WHERE id = '" . $id . "'";

// CASO ESTEJa tudo OK APAGA O REGISTRO, SENÃO MOSRA O ERRO
if (!mysqli_query($con, $sql))
{
    die('ERROR: ' . mysqli_error($con));
}

// MOSTRA A MENSAGEM DE SUCESSO
echo "Um(1) registro APAGADO com SUSSECIFULY.";

# APÓS A ALTERAÇÃO, VOLTA PARA A LISTA DOS REGISTROS DEPOIS DE 2 SEGUNDOS
print "<meta http-equiv='refresh' content='2; url=listar.php'>";

// FECHAR A CONEXÃO COM O mysqli
mysqli_close($con);
?>