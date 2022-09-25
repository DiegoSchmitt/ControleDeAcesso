<?php
require '../parts/header.php';
include '../class/users.class.php';
require '../config/verifySession.php';

$users = new Users;

$name = $_POST['filter_name_admin'];
$data = $users->filterByNameAdmin($name); 
if($data){
    foreach($data as $item){
        ?>
            <label>
            <?= $item['id'];?> - <?= $item['name'];?> - <?= $item['email'];?> <a href="../forms/editAdmin.php?id=<?= $item['id'];?>">Editar</a> -  <a href="../forms/delUser.php?id=<?= $item['id'];?>">Deletar</a><br>
            </label>
        <?php
    }
}else{
    echo "Nenhum usuário com esse nome!";
} 