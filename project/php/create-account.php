<?php require_once("./header.php");?>
    <form method="post" action="create-account-action.php">
        
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

        <label>Série (para alunos)</label>
        <select name="grade">
            <option>Escolha a série</option>
            <option value="first">Primeiro ano</option>
            <option value="second">Segundo ano</option>
            <option value="third">Terceiro ano</option>
        </select>

        <button type="submit">Criar conta</button>

    </form>
<?php require_once("./footer.php");?>