<?php require_once ('./header.php'); ?>
    
    <div class="left-container">
        <div class="header">
        <img src="https://i.ibb.co/Ch8Sw4Z/arvorenamao.png" alt="icon"/>
            <div class="header-text">
                <h1>Recicla Gino</h1>
                <div class="subtitle">Plataforma de Gestão</div>
            </div>
        </div>
        <div class="login-container">
            <form method="post" action="./check-login.php">
                <div>
                    <label for="inputType" style="margin-bottom: -25px; font-size: 20px;">Entrar como:</label>
                    <select id="inputType" name="inputOccupation" style="width: 250px; color: #0b2c02; font-weight: bold;">
                        <option style="color: #0b2c02;" value="student">Estudante</option>
                        <option style="color: #0b2c02;" value="teacher">Professor</option>
                    </select>
                </div>
                <div>
                    <label for="inputUser">Usuário</label>
                    <input type="text" id="inputUser" name="inputName" placeholder="Digite o nome">
                </div>
                <div>
                    <label for="inputPassword">Senha</label>
                    <input type="password" id="inputPassword" name="inputPassword" placeholder="Digite a senha" style="::placeholder {color:darkgreen;}">
                </div>
                <button>Entrar</button>
            </form>
            <div class="create-account">
                <a href="./create-account.php">Crie uma conta aqui.</a>
            </div>
            <div class="create-account">
                <a href="./index.php">Voltar</a>
            </div>
        </div>
    </div>
    
    <div class="right-container">
        <table>
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


<?php require_once ('./footer.php'); ?>