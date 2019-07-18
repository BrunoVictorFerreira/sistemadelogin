<?php

    include('conexao.php');
    

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $queryExistente = "select usuario from cadastro where usuario = '$usuario'";
    $resultExis = mysqli_query($conn,$queryExistente);
    $row = mysqli_num_rows($resultExis);
    if($row > 0){
        echo "usuario já existente!";
        echo "<a href='index.php'>Voltar</a>";
    }else{

    $query = "INSERT INTO cadastro (nome,sobrenome,usuario,senha) values ('$nome','$sobrenome','$usuario','$senha')";
    $result = mysqli_query($conn,$query);
    $num = mysqli_affected_rows($conn);
    if($num == 1){
        echo "<script>alert('Cadastro Feito!');</script>";
        header('Location: logar.php');
    }else{
        echo "<script>alert('ERRO!');</script>";
    }
    }
    ?>