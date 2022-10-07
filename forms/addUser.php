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
    <form method ="POST" enctype="multipart/form-data" action="addUser.action.php">
        <h3>Cadastrar Novo Usuário</h3>
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
            <label for="photo">
                <span class="material-symbols-outlined">
                    file_upload
                </span>
                <input type="file" name="photo" id="photo" value="userdefaul.png"/><br/><br/>
            </label>
            <label for="cadastrar">
                <span class="material-symbols-outlined">
                    start
                </span>
                <input class="btn" name="cadastrar" id="cadastrar" type="submit" value="Cadastrar"/><br/><br/>
            </label>
            <label for="voltar">
                <span class="material-symbols-outlined">
                    undo
                </span>
                <a href="../master.php" name="voltar" id="voltar" name="id">Voltar</a>
            </label>
    </form>
</div>
</body>
</html>
<?php
    require '../parts/footer.php';
?>