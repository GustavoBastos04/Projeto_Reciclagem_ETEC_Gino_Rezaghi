<?php require_once ('./header.php'); ?>
    
    <div>
        <img src="" alt="logo">
        <form method="post" action="./check-login.php">
            <label>Usuário</label> <br>
            <input type="text" name="inputName" placeholder="Digite o nome"> <br>
            
            <label>Senha</label> <br>
            <input type="text" name="inputPassword" placeholer="Digite a senha"> <br>
            
            <label>Cargo</label>
            <select name="inputOccupation">
                <option value="">Selecione o cargo</option>
                <option value="inputStudent">Estudante</option>
                <option value="inputTeacher">Professor</option>
            </select> 
            
            <button type="submit">Entrar</button>
        </form>
        <div>
            <a href="./create-account.php">Entre aqui para criar um cadastro.</a>
        </div>
    </div>    

<?php require_once ('./footer.php'); ?>