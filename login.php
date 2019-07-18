<?php
    session_start();
    include("conexao.php");
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query = "select usuario from cadastro where usuario = '$usuario' AND senha = '$senha'";
    $result = mysqli_query($conn,$query);
    $num = mysqli_num_rows($result);
    if($num > 0){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: painel.php');
    }else{
        echo "<script>alert('Usuario ou senha Incorretos!');window.location.href='logar.php';</script>";
    }