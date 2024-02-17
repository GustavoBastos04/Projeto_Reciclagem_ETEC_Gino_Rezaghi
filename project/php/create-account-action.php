<?php require_once('header.php');?>
<div>
    <?php 
        require_once('database-connection.php');
        $occupation = $_POST['occupation'];
        $sql = "INSERT INTO student (st_login, st_password, st_grade) VALUES ('".$_POST['createName']."', '".$_POST['createPassword']."','".$_POST['grade']."')";

         
        if($occupation === "student"){
            $sql = "INSERT INTO student (st_login, st_password, st_grade) VALUES ('".$_POST['createName']."', '".$_POST['createPassword']."','".$_POST['grade']."')";

            if ($connection->query($sql) === TRUE) {
                echo '
                <a href="../index.php">
                    Cadastro realizado com sucesso!
                </a> 
                ';
                
            } else {
                echo '
                <a href="../index.php">
                    Erro
                </a> 
                ';
            }
            $connection->close();
        }

        elseif ($occupation === "teacher"){

            $sql = "INSERT INTO teacher (teacher_login, teacher_password) VALUES ('".$_POST['createName']."', '".$_POST['createPassword']."')";

            if ($connection->query($sql) === TRUE) {
                echo '
                <a href="../index.php">
                    Cadastro realizado com sucesso!
                </a> 
                ';
                
            } else {
                echo '
                <a href="../index.php">
                    Erro
                </a> 
                ';
            }
            $connection->close();            
        }
        else {
            echo '
                <a href="../index.php">
                    Erro
                </a> 
                ';
            $connection->close();   
        }
    ?>
</div>
<?php require_once('footer.php'); ?>