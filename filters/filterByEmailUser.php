<?php
require '../parts/header.php';
include '../class/Users.php';
include '../class/Records.php';
require '../config/verifySession.php';

$users = new Users;

$email = $_POST['filter_email_user'];
$data = $users->filterByEmailUser($email); 
if($data){
    foreach($data as $item){
        ?>
            <label>
                <?= $item['id'];?> - <?= $item['name'];?> - <?= $item['email'];?> <a href="../forms/editUser.php?id=<?= $item['id'];?>">Editar</a> -  <a href="../forms/delUser.php?id=<?= $item['id'];?>">Deletar</a><br>
            </label>
        <?php
    }
}else{
    echo "Nenhum usuário com esse email!";
} 