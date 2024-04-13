<?php require_once("./header.php");?>
    <form method="post" action="./create-account-action.php">
        
        <label>Estudante ou professor?</label>

        <select name="occupation">
            <option>Escolha seu cargo</option>
            <option value="student">Estudante</option>
            <option value="teacher">Professor</option>
            
        </select>

        <label>Usuário</label> <br>
        <input type="text" name="createName" placeholder="Digite o nome"> <br>
        
        <label>Senha</label> <br>
        <input type="text" name="createPassword" placeholer="Digite a senha"> <br>

        <button type="submit">Criar conta</button>

    </form>
<?php require_once("./footer.php");?>