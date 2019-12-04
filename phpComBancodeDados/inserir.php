<?php
// ABRE A CONEXÃO COM O MYSQL E NA BASE DE DADOS
    include("conexao.php");

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql=" INSERT INTO tbalunos (id, nome, email) VALUES ('$_POST[id]', '$_POST[nome]','$_POST[email]')";


// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}

// MOSTRA A MENSAGEM DE SUCESSO
echo "Um(1) registro inserido com SUSSESIFULY.";

// FECHA A CONEXÃO COM O MYUSQL
mysqli_close($con);

?>