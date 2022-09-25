<?php 
    require "../parts/header.php";
    require '../config/verifySession.php'; 
?>
<form method ="POST" class="form" enctype="multipart/form-data" action="addUser.action.php">
    <h3>Cadastrar Novo Usuário</h3>
        <label for="name"><i class="fas fa-user"></i>
        <input type="text" name="name" id="name" placeholder="Nome..."/><br/>
        </label>
        <label for="email"><i class="fas fa-envelope"></i>
        <input type="text" name="email" id="email" placeholder="E-mail..."/><br/>
        </label>
        <label for="id_access"><i class="fas fa-lock"></i>
        <input type="text" name="id_access" id="id_access" placeholder="Credencial..."/><br/>
        </label>
        <input type="file" name="photo" value="userdefaul.png"/><br/><br/>
        <input type="submit" value="Cadastrar"/><br/><br/>
        <a href="../master.php">Voltar</a>
</form>
<?php
    require '../parts/footer.php';
?>