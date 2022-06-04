<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "aula";
    $mysqli = new mysqli($host, $user, $senha, $banco);
    $resultado = mysqli_query($mysqli,"SHOW DATABASES");
    while($row = mysqli_fetch_array($resultado)){
        echo $row[0];
    }
?>