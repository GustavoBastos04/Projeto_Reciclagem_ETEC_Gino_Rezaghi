<?php require_once('header.php'); ?>

    <?php 
        $session_start();

        $occupation = $_POST['inputOccupation'];
        $name = $_POST['inputName'];
        $password = $_POST['inputPassword'];
        
        require_once('database-connection.php');
        
        if($occupation == 'inputStudent'){
            

            $database = "SELECT * FROM    WHERE  = '".$name."';";
            $result = $connection->query($database);

            $search = mysqli_fetch_array($result);
            if($search != null){
                if($search['st_password'] == $password){
                    echo '<a href="menu.php">Saudações</a>';
                }
                else{
                    echo '<a href="./index.php">Login não encontrado</a>';
                }
            }
            else{
                echo 'Login não encontrado';
            }
            $connection->close();
        }
        if($occupation == 'inputTeacher'){
            $database = "SELECT * FROM    WHERE  = '".$name."';";
            $result = $connection->query($database);

            $search = mysqli_fetch_array($result);
            if($search != null){
                if($search['st_password'] == $password){
                    echo '<a href="menu.php">Saudações</a>';
                }
                else{
                    echo '<a href="./index.php">Login não encontrado</a>';
                }
            }
            else{
                echo 'Login não encontrado';
            }
            $connection->close();
        }
    ?>

<?php require_once('footer.php'); ?>