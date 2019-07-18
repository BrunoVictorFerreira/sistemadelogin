<?php
    $db = "cadastro";
    $host = "localhost";
    $user = "root";
    $pass = "";

    $conn = mysqli_connect($host,$user,$pass,$db);

    if(!$conn){
        echo "".mysqli_connect_error();
    }

?>