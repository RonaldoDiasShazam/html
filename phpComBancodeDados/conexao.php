<?php 

#conexão no MYSQL e na base de dados

$con = mysqli_connect("localhost:3307","root", "etec", "dbescola");


//verifica a ligação de erros

if (mysqli_connect_error())

{

    //caso tenha erros mostra o erro de ligação á base de dados

    echo "Failure to connect MYSQL: " . mysqli_connect_error();

} else {echo "Conctado com SUSSESIFULY no BANCO de DADOS. ";}

?>