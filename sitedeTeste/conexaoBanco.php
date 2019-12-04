<?php
# CONEXÃO NO MYSQL E NA BASE DE DADOS
$con=mysqli_connect("localhost","root","", "dbescola");


// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_error()){
    // COSO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Falhou a conexão no MySQL: "
    mysqli_connect_error();
}else{echo "conectado com sucesso.";}

?>