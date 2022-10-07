<?php 
    require "../parts/header.php"; 
    require '../config/verifySession.php';
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
<div class="add">
<form method ="POST" class="form" enctype="multipart/form-data" action="addAdmin.action.php">
    <h3>Cadastrar Novo Administrador</h3>
        <label for="name">
            <span class="material-symbols-outlined">
                person
            </span>
            <input type="text" name="name" id="name" placeholder="Nome..."/><br/>
        </label>
        <label for="email">
            <span class="material-symbols-outlined">
                mail
            </span>
            <input type="text" name="email" id="email" placeholder="E-mail..."/><br/>
        </label>
        <label for="id_access">
            <span class="material-symbols-outlined">
                badge
            </span>
            <input type="text" name="id_access" id="id_access" placeholder="Credencial..."/><br/>
        </label>
        <label for="password">
            <span class="material-symbols-outlined">
                lock
            </span>
            <input type="text" name="password" id="password" placeholder="Senha..."/><br/>
        </label>
        <label for="level">
            <p>Tipo de Administrador:</p>
            <span class="material-symbols-outlined">
                check
            </span>
            <Select name="level" id="level">
                <option value=""></option>
                <option value="1">Master</option>
                <option value="2">Simples</option>
            </Select><br/>
        </label>
        <label for="photo">
            <span class="material-symbols-outlined">
                file_upload
            </span>
            <input type="file" name="photo" id="photo" value="default.png"/><br/>
        </label>
        <label for="cadastrar">
            <span class="material-symbols-outlined">
                start
            </span>
            <input type="submit" class="btn" value="Cadastrar" name="cadastrar" id="cadastrar"/><br/>
        </label>
        <label for="voltar">
            <span class="material-symbols-outlined">
                undo
            </span>
            <a href="../master.php" id="voltar" name="voltar">Voltar</a>
        </label>
</form>
</div>
</body>
<?php
    require '../parts/footer.php';
?>