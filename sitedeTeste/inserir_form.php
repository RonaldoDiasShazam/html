<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
<h1>INSERIR REGISTRO NO BANCO DE DADOS</h1>
<form action ="inserir.php" method ="post">

    <p>ID:<input type = "text" name = "id"></p>

<p>Nome: <input type = "text" name = "nome">
</p>

<p>E-mail: <input type = "text" name = "email"></p>

<p>
<input type="submit" name = "submit" id = "submit" value = "Enviar">
<input type="reset" name = "reset" id = "reset" value = "Redefinir">
</p>

</form>

</body>
</html>