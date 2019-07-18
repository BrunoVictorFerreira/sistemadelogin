<?php
error_reporting(0);
session_start();
include('verifica.php');



?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel</title>
    <style>
    body{
        background-color: #cecece;
    }

    </style>
</head>
<body>
    <h1>PAINEL DE CONTROLE</h1>
    <h3>Bem Vindo : <?php echo $_SESSION['usuario']; ?></h3>
    <a href="sair.php">Sair</a>
</body>
</html>