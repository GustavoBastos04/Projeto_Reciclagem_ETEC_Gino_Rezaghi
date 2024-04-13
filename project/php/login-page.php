<?php require_once ('./header.php'); ?>
    
    
<div class="main-container w3-display-middle w3-round-large">
        <div class="content-container w3-display-middle w3-round-large">

            <form  class="document w3-round-large" method="post" action="">
                
                <div>
                    <label style="font-weight: bold;">Usuário</label> <br>
                    <input class="input-items"type="text" name="inputName" placeholder="Digite o nome"> <br>
                </div>

                <div >
                    <label style="font-weight: bold;">Senha</label> <br>
                    <input class="input-items"type="text" name="inputPassword" placeholer="Digite a senha"> <br>
                </div>

                <div>
                    <label style="font-weight: bold;">Cargo</label>
                    <select name="inputOccupation">
                        <option value="">Selecione o cargo</option>
                        <option value="inputStudent">Estudante</option>
                        <option value="inputTeacher">Professor</option>
                    </select> 
                </div>

                <button class="input-items" type="submit">Entrar</button>
            </form>
            <div class="create-account w3-round-large" style="padding: 0 1%; padding-top: 0.5%;">
                <a  style="font-weight: bold;" href="./create-account.html" >Entre aqui para criar um cadastro.</a>
            </div>
        </div>
    </div>     


<?php require_once ('./footer.php'); ?>