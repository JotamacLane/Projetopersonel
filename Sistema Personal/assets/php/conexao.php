<?php
    $usuario = 'root';
    $senha = '';
    $database = 'personel';
    $host= 'localhost';


    $mysqli = new mysqli($host,$usuario,$senha, $database);

    if($mysqli -> connect_errno){
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }
    else{
        echo "Conectado ao banco de dados.";
    }




?>