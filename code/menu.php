<?php require_once('./header.php'); ?>

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
        margin-bottom: 10px;
    }

    .addition-form button:hover {
        background-color: #085c02;
    }
</style>

<div class="left-container">
    <div class="addition-form">
        <form method="post" action="./add-action.php">
            <label for="inputRM">RM do Aluno</label>
            <input type="number" id="inputRM" name="RM" placeholder="00000">

            <label for="inputGrade">Sala</label>
            <select id="inputGrade" name="grade">
                <option value="" disabled selected>Escolha a sala</option>
                <option value="1E">1ºE</option>
                <option value="1L">1ºL</option>
                <option value="1M">1ºM</option>
                <option value="2E">2ºE</option>
                <option value="2L">2ºL</option>
                <option value="2M">2ºM</option>
                <option value="3E">3ºE</option>
                <option value="3L">3ºL</option>
                <option value="3M">3ºM</option>
            </select>

            <label for="inputMaterial">Tipo de Material</label>
            <select id="inputMaterial" name="material">
                <option value="" disabled selected>Escolha o material</option>
                <option value="papelao_P">Papelão pequeno (10 pts.)</option>
                <option value="papelao_M">Papelão médio (20 pts.)</option>
                <option value="papelao_G">Papelão grande (30 pts.)</option>
                <option value="pet_P">Garrafa PET pequena (15 pts.)</option>
                <option value="pet_G">Garrafa PET grande (30 pts.)</option>
                <option value="lata">Lata (50 pts.)</option>
                <option value="oleo">Óleo usado 1L (70 pts.)</option>
                <option value="papel_80_folhas">Papel 80 folhas (10 pts.)</option>
            </select>

            <label for="inputQuantity">Quantidade</label>
            <input type="number" id="inputQuantity" name="quantity" placeholder="Digite a quantidade">

            <button type="submit">Adicionar</button>
            <a href="./change.php"><button type="button" id="editButton"> Clique aqui para editar</button></a>
            <a href="./delete.php"><button type="button" id="deleteButton">Clique aqui para remover</button></a>
        </form>
            <a href="./index.php"><button>Menu principal</button></a>
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

<?php require_once('./footer.php'); ?>
