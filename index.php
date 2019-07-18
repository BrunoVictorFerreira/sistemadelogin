<?php
    
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro PHP</title>
    <style>
    body{
        background-color: #cecece;
    }

    </style>
</head>
<body>

<fieldset>
    <form action="cadastrar.php" method="POST">  
        <h1 class="cadastroText">CADASTRO</h1>
        <input type="text" name="nome" placeholder="NOME" class="caixa"/><br>
        <input type="text" name="sobrenome" placeholder="SOBRENOME" class="caixa"/><br>
        <input type="text" name="usuario" placeholder="USUARIO" class="caixa"/><br>
        <input type="password" name="senha" placeholder="SENHA" class="caixa"/><br>
        <input type="submit" value="Enviar" class="botao"/>
        
        <h1>Houve uma mudança de branch</h1>
    </form>
</fieldset>
</body>
</html>