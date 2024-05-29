<?php require_once ('./header.php'); ?>

<style>
    .left-container {
        float: left;
        width: calc(50% - 20px);
        padding: 20px;
        box-sizing: border-box;
    }

    .addition-form {
        max-width: 320px; 
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .addition-form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .addition-form input[type="text"],
    .addition-form select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
    }

    .addition-form button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #0b2c02;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .addition-form button:hover {
        background-color: #085c02;
    }
</style>

<div class="left-container">
    <div class="addition-form">
        <a href="./index.php">Voltar</a>
    </div>
</div> 
    
    <div class="right-container">
        <table style="width: 80%; height: 80%;">
            <thead>
                <tr>
                    <th>SÉRIE</th>
                    <th>PONTOS</th>
                    <th>RANKING</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once('./database-connection.php');

                    $sql = "SELECT * FROM Sala ORDER BY pontuacaoTotal DESC";

                    $result = $connection->query($sql);

                    $rank = 1;
                    
                    if($result != null){

                        foreach($result  as $row){
                            echo '<tr>';
                            echo '<td>'.$row['serie'].'</td>';
                            echo '<td>'.$row['pontuacaoTotal'].'</td>';
                            echo '<td>'.$rank.'° </td>';
                            echo '</tr>';
                            $rank++;
                        }
                    }
                    else {
                        echo '
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                        ';
                    }

                    $connection->close();
                ?>
                
            </tbody>
        </table>
    </div>
</div>



<?php require_once ('./footer.php'); ?>