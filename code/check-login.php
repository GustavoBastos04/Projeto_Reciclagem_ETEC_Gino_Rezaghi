<?php require_once('header.php'); ?>
<?php require_once('./database-connection.php'); ?>

    <?php 

        $occupation = $_POST['inputOccupation'];
        $name = $_POST['inputName'];
        $password = $_POST['inputPassword'];
        
        
        
        if($occupation == "student"){
            

            $database = "SELECT senha FROM Alunos3Ano WHERE  nome = '".$name."';";
            $result = $connection->query($database);

            $search = mysqli_fetch_array($result);
            if($search != null){
                if($search['senha'] == $password){
                    echo '<a href="./menu.php"><h1>Saudações</h1></a>';
                }
                else{
                    echo '<a href="./"><h1>Login não encontrado</h1></a>';
                }
            }
            else{
                echo 'Login não encontrado';
            }
            $connection->close();
        }
        if($occupation == "teacher"){
            $database = "SELECT senha FROM Professora WHERE nome = '".$name."';";
            $result = $connection->query($database);

            $search = mysqli_fetch_array($result);
            if($search != null){
                if($search['senha'] == $password){
                    echo '<a href="./menu-prof.php">Saudações</a>';
                }
                else{
                    echo '<a href="./">Login não encontrado</a>';
                }
            }
            else{
                echo 'Login não encontrado';
            }
            $connection->close();
        }
    ?>

<?php require_once('footer.php'); ?>