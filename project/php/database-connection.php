
<?php
    $host = "";
    $user = "";
    $password = "";
    $database= "";
    $connection = new mysqli($host, $user, $password, $database);
    if ($connection->connect_error){
        die("Connection failed: ". $connection->connect-error);
    }

?>

<?php require_once('./php/footer.php'); ?>