<?php
require '../parts/header.php';
include '../class/users.class.php';
require '../config/verifySession.php';

$users = new Users;

$id_accsses = $_POST['filter_id_access'];
$data = $users->filterByIdAccessAdmin($id_accsses); 
if($data){
        ?>
            <label>
                <?= $data['id'];?> - <?= $data['name'];?> - <?= $data['email'];?> <a href="../forms/editUser.php?id=<?= $data['id'];?>">Editar</a> <a href="../forms/delUser.php?id=<?= $data['id'];?>">Deletar</a><br>
            </label>
        <?php
}else{
    echo "Nenhum usuário com esse ID!";
} 
