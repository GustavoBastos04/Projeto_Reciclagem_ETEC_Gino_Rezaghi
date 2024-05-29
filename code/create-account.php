<?php require_once("./header.php"); ?>

    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #0b2c02;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #085c02;
        }
    </style>

    <form action="./create-account-action.php" method='post' >
        <label>Estudante ou professor?</label>
        <select name="occupation">
            <option value="" disabled selected>Escolha seu cargo</option>
            <option value='student'>Estudante</option>
            <option value='teacher'>Professor</option>
        </select>

        <label>Usuário</label>
        <input type="text" name="createName" placeholder="Digite o nome">

        <label>Senha</label>
        <input type="password" name="createPassword" placeholder="Digite a senha">

        <button type="submit">Criar conta</button>
    </form>

<?php require_once("./footer.php"); ?>