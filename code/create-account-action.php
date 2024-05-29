<?php require_once('./header.php');?>
<?php require_once('./database-connection.php'); ?>

<div>
    <?php 
        
        $occupation = $_POST['occupation'];
        
        if($occupation == "student"){

            $studentName = $_POST['createName'];
            $studentPassword = $_POST['createPassword'];

            $sql = "INSERT INTO Alunos3Ano(nome, senha) VALUES ('".$_POST['createName']."', '".$_POST['createPassword']."')";

            if ($connection->query($sql) === TRUE) {
                echo '
                <div class="w3-display-middle">
                <a href="./index.php">
                    <h1>
                    Cadastro realizado com sucesso!
                    </h1>
                    </a>
                </div> 
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

        elseif ($occupation == "teacher"){

            $sql = "INSERT INTO Professora (nome, senha) VALUES ('".$_POST['createName']."', '".$_POST['createPassword']."')";

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