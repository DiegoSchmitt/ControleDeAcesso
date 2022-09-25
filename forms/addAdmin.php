<?php 
    require "../parts/header.php"; 
    require '../config/verifySession.php';
?>
<form method ="POST" class="form" enctype="multipart/form-data" action="addAdmin.action.php">
    <h3>Cadastrar Novo Administrador</h3>
        <label for="name"><i class="fas fa-user"></i>
            <input type="text" name="name" id="name" placeholder="Nome..."/><br/>
        </label>
        <label for="email"><i class="fas fa-envelope"></i>
            <input type="text" name="email" id="email" placeholder="E-mail..."/><br/>
        </label>
        <label for="id_access"><i class="fas fa-lock"></i>
            <input type="text" name="id_access" id="id_access" placeholder="Credencial..."/><br/>
        </label>
        <label for="password"><i class="fas fa-lock"></i>
            <input type="text" name="password" id="password" placeholder="Senha..."/><br/>
        </label>
        <label for="level"><i class="fas fa-lock"></i>
            <Select name="level" id="level">
                <option value=""></option>
                <option value="1">Master</option>
                <option value="2">Simples</option>
            </Select>
        </label>
            <input type="file" name="photo" value="default.png"/><br/><br/>
            <input type="submit" value="Cadastrar"/><br/><br/>
        <a href="../master.php">Voltar</a>
</form>
<?php
    require '../parts/footer.php';
?>