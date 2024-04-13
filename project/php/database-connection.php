
<?php
    $host = "localhost:3306";
    $user = "root";
    $password = "familia4G@";
    $database= "tcc_etec";
    $connection = new mysqli($host, $user, $password, $database);
    if ($connection->connect_error){
        die("Connection failed: ". $connection->connect_error);
    }

?>
