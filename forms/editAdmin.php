<?php
require "../parts/header.php";
require '../class/Users.php';
require '../config/verifySession.php';


$user = new Users;
$data =  $user->getId($_GET['id']);

?>
<form method ="POST" class="form" enctype="multipart/form-data" action="editAdmin.action.php">
<h3>Alterar Dados do Administrador</h3>
    <label for="name"><i class="fas fa-user"></i>
        <input type="text" name="name" id="name" placeholder="Nome..." value="<?=$data['name'];?>"/><br/>
    </label>
    <label for="email"><i class="fas fa-envelope"></i>
        <input type="text" name="email" id="email" placeholder="E-mail..." value="<?=$data['email'];?>"/><br/>
    </label>
    <label for="id_access"><i class="fas fa-lock"></i>
        <input type="text" name="id_access" id="id_access" placeholder="Credencial..." value="<?=$data['id_access'];?>"/><br/>        
    </label>
        <label for="level"><i class="fas fa-lock"></i>
            <Select name="level" id="level">
                <option><?=$data['level'];?></option>
                <option value="1">Master</option>
                <option value="2">Simples</option>
            </Select>
        </label>
        <input type="file" name="photo" value="<?=$data['photo'];?>"/>
        <input type="hidden" name="id" value="<?=$_GET['id']?>" >
        <br/><br/>
        <input type="submit" value="Cadastrar"/><br/><br/>
        <a href="../master.php">Voltar</a>
</form>
<?php
require '../parts/footer.php';
?>