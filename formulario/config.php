<?php

    $dbhost = 'Localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'formulario_teste';

    $conecxao = new mysqli($dbhost, $dbusername, $dbpassword,  $dbname );

    // if($conecxao->connect_errno) 
    // {
    //     echo"falha ao conectar ";
    // }
    
    // else
    // {
    //     echo "conectado com susesso";
    // }

?>