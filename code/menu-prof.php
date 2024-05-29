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
    <h2>Verificar menção do aluno:</h2>
        <form method="post" action="./menu-prof.php">
            <label for="inputRM">RM do Aluno</label>
            <input type="number" id="inputRM" name="RM" placeholder="00000">

 
                <button type="input" style="margin-top: 10px;">Converter menções</button>
                
        </form>

        <a href="./index.php"><button style="margin-top: 10px;">Voltar ao início</button></a>
        
    </div>
</div>

<div class="right-container">
<h2>Nota do aluno:</h2>
    
    <table style="width: 100px%; height: 150px;">
        <thead>
            <tr>
                <th>RM</th>
                <th>PONTOS</th>
                <th>NOTA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('./database-connection.php');

            // Verifica se o RM foi fornecido no formulário
            if (isset($_POST['RM']) && !empty($_POST['RM'])) {
                $rm = $_POST['RM'];

                // Consulta SQL com prepared statement
                $sql = "SELECT RM, SUM(pontos) AS soma_pontos FROM Alunos WHERE RM = ? GROUP BY RM";

                
                // Preparar a declaração
                $stmt = $connection->prepare($sql);

                // Vincular parâmetros
                $stmt->bind_param("i", $rm); // "i" indica que $rm é um número inteiro

                // Executar a consulta
                $stmt->execute();

                // Obter resultado
                $result = $stmt->get_result();
                
                // Verifica se há resultados
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $nota = '';
                        if ($row['soma_pontos'] >= 50000) {
                            $nota = 'MB';
                        } elseif ($row['soma_pontos'] >= 3500) {
                            $nota = 'B';
                        } elseif ($row['soma_pontos'] >= 1500) {
                            $nota = 'R';
                        } else {
                            $nota = 'I';
                        }

                        echo '<tr>';
                        echo '<td>' . $row['RM'] . '</td>';
                        echo '<td>' . $row['soma_pontos'] . '</td>';
                        echo '<td>' . $nota . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="3">Nenhum resultado encontrado</td></tr>';
                }
            }
            $connection->close();
            ?>
        </tbody>
    </table>
</div>


<?php require_once('./footer.php'); ?>
