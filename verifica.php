<?php
    session_start();
    if($_SESSION['usuario']==true && $_SESSION['senha']==true){
    
    }else{
        
        header('Location:logar.php');
    }

?>