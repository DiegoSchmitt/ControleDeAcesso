<?php
require '../parts/header.php';
require '../class/Users.php';
require '../class/Records.php';
require '../config/verifySession.php';

$users = new Users;

$name = $_POST['filter_name_user'];
$data = $users->filterByNameUser($name); 
if($data){
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
    <?php
    foreach($data as $item){
        ?>
            <tbody>
                <tr>
                    <td>
                        <?= $item['id'];?>
                    </td>
                    <td> 
                        <?= $item['name'];?>
                    </td>
                    <td> 
                        <?= $item['email'];?> 
                    </td>
                    <td>
                        <a href="../forms/editUser.php?id=<?= $item['id'];?>">Editar</a>
                    </td>  
                    <td>
                        <a href="../forms/delUser.php?id=<?= $item['id'];?>">Deletar</a></br>
                    </td>
                </tr>
            </tbody>
        <?php
    }
    ?>
        </table>
    <?php
}else{
    echo "Nenhum usuário com esse nome!";
} 


