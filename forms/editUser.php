<?php
require "../parts/header.php";
require '../class/Users.php';
require '../config/verifySession.php';

$user = new Users;
$data =  $user->getId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<body>
<div class="edit">
    <form method ="POST" class="form" enctype="multipart/form-data" action="editUser.action.php">
    <h3>Alterar Dados do Usuário</h3>
        <label for="name">
            <span class="material-symbols-outlined">
                person
            </span>
            <input type="text" name="name" id="name" placeholder="Nome..." value="<?=$data['name'];?>"/><br/>
        </label>
        <label for="email">
            <span class="material-symbols-outlined">
                mail
            </span>
            <input type="text" name="email" id="email" placeholder="E-mail..." value="<?=$data['email'];?>"/><br/>
        </label>
        <label for="id_access">
            <span class="material-symbols-outlined">
                badge
            </span>
            <input type="text" name="id_access" id="id_access" placeholder="Credencial..." value="<?=$data['id_access'];?>"/><br/>        
        </label>
        <label for="photo">
                <span class="material-symbols-outlined">
                    file_upload
                </span>
            <input type="file" name="photo" value="<?=$data['photo'];?>"/>
        </label>
            <input type="hidden" name="id" value="<?=$_GET['id']?>" >
            <br/><br/>
        <label for="cadastrar">
            <span class="material-symbols-outlined">
                start
            </span>
            <input type="submit" name="cadastrar" value="Cadastrar" class="btn"/><br/><br/>
        </label>
        <label for="">
            <span class="material-symbols-outlined">
               undo
            </span>
            <a href="../master.php" name="voltar">Voltar</a>
        </label>
    </form>
</div>
<?php
require '../parts/footer.php';
?>