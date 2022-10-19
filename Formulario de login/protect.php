<?php
    if(!isset($_SESSION)) {
        session_start();
    }


    if(!isset($_SESSION['id'] )){
        die("Porfavor conecte-se em uma conta para asessar está pagin. <a href=\"index.php\"><button>entrar</button><a/>");
    }
?>