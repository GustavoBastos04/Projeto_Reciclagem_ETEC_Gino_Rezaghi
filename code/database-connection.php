
<?php
    $host = "";
    $user = "";
    $password = "";
    $database= "projeto_reciclagem";

    $connection = new mysqli($host, $user, $password, $database);
    if ($connection->connect_error){
        die("Connection failed: ". $connection->connect_error);
    }

?>
