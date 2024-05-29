<?php require_once('./header.php') ?>
<div>
    <?php
        require_once('./database-connection.php');

        $removePoints = (int)$_POST['quantity'];

        $sql ="UPDATE Sala set pontuacaoTotal = pontuacaoTotal - '".$removePoints."' where serie = '".$_POST['grade']."';";
        
        if($connection->query($sql) === TRUE) {
            echo '
            <a href="./menu.php">
            <h1 class="w3-button w3-teal">Pontuação removida com sucesso! </h1>
            </a>
            ';
        } else {
            echo '
            <a href="./menu.php">
            <h1 class="w3-button w3-teal">ERRO! </h1>
            </a>
            ';
        }
    ?>
</div>
<?php require_once('./footer.php') ?>