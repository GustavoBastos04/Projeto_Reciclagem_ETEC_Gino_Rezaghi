<?php require_once('./header.php');?>
<div>
    <?php 
        require_once('./database-connection.php');
        
        $occupation = $_POST['occupation'];
         
        if($occupation === "student"){
            $sql = "INSERT INTO Alunos3Ano (login, senha, serie) VALUES ('".$_POST['createName']."', '".$_POST['createPassword']."','".$_POST['grade']."')";

            if ($connection->query($sql) === TRUE) {
                echo '
                <a href="./index.php">
                    <h1>
                    Cadastro realizado com sucesso!
                    </h1>
                    </a> 
                ';
                
            } else {
                echo '
                <a href="./index.php">
                    <h1>
                    Erro em estudante
                    </h1>
                </a> 
                ';
            }
            $connection->close();
        }

        elseif ($occupation === "teacher"){

            $sql = "INSERT INTO  VALUES ('".$_POST['createName']."', '".$_POST['createPassword']."')";

            if ($connection->query($sql) === TRUE) {
                echo '
                <a href="./index.php">
                    <h1>
                    Cadastro realizado com sucesso!
                    </h1>
                    </a> 
                ';
                
            } else {
                echo '
                <a href="./index.php">
                    <h1>
                    Erro em prof
                    </h1>
                </a> 
                ';
            }
            $connection->close();            
        }
        else {
            echo '
                <a href="./index.php">
                    <h1>
                    Erro pois nenhum funcionou
                    </h1>
                    </a> 
                ';
            $connection->close();   
        }
    ?>
</div>
<?php require_once('./footer.php'); ?>