<style>
    
@import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto');
*{
 margin:0;
 padding: 0;
 outline: 0;
}

table{
 margin:auto;
 z-index: 2;
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;

}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #616668;
 color: #f2e8c4;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #f2e8c4;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #f2e8c4;
}
</style>

<?php
require '../parts/header.php';
include '../class/Users.php';
include '../class/Records.php';
require '../config/verifySession.php';

$users = new Users;
$records = new Records;

$name = $_POST['filter_name'];
$id_access = $_POST['filter_idAccess'];
$date = $_POST['filter_date'];


//filtrar usuário por id
if(empty($name) and !empty($id_access)){
    $data_user = $users->filterByIdAccess($id_access);  
}

//filtrar usuario por nome
else if(empty($id_access) and !empty($name)){
    $data_user = $users->filterByName($name);
}

//filtrar usuario por nome e id
else if(!empty($name) and !empty($id_access)){
    $data_user = $users->filterByNameAndIdAccess($name, $id_access);
}

else{
    $data_user = false;
}

//filtrar acessos somente com a data
if(!empty($date) && !$data_user){
    $data_records = $records->filterRecordsByDate($date);
    if($data_records){
        ?>
            <div class="filter-access">
                <table border="1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data de entrada</th>
                            <th>Hora de entrada</th>
                            <th>Data de saída</th>
                            <th>Hora de saída</th>
                        </tr>
                    </thead>
        <?php
        foreach($data_records as $item_records){
            $data_user = $users->filterByIdUser($item_records['id_user']);
            ?>
                    <tbody>
                        <tr>
                            <td><?= $data_user['id_access'];?></td>
                            <td><?= $data_user['name'];?></td>
                            <td><?= $item_records['entry_date'];?></td>
                            <td><?= $item_records['entry_hour'];?></td>
                            <td><?= $item_records['exit_date'];?></td>
                            <td><?= $item_records['exit_hour'];?></td>
                        </tr>
                    </tbody>
            <?php
        }
        ?>
                </table>
            </div>
        <?php
    }else{
        echo 'nenhum ressultado!';
    }
}

//filtrar acessos pelo id do usuário
else if(empty($date) and ($data_user) and (count($data_user)==14)){
        $data_records = $records->filterRecordsById($data_user['id']);
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de entrada</th>
                    <th>Hora de entrada</th>
                    <th>Data de saída</th>
                    <th>Hora de saída</th>
                </tr>
            </thead>
        <?php
        foreach($data_records as $item_records){
            ?>
            <tbody>
                <tr>
                    <td><?= $data_user['id_access'];?></td>
                    <td><?= $data_user['name'];?></td>
                    <td><?= $item_records['entry_date'];?></td>
                    <td><?= $item_records['entry_hour'];?></td>
                    <td><?= $item_records['exit_date'];?></td>
                    <td><?= $item_records['exit_hour'];?></td>
                </tr>
            </tbody>
        <?php
        }

        ?>
            </table>
        <?php
    }



//filtrar acessos pelo nome do usuário
else if(empty($date) and (count($data_user)>0)){
    ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de entrada</th>
                    <th>Hora de entrada</th>
                    <th>Data de saída</th>
                    <th>Hora de saída</th>
                </tr>
            </thead>
    <?php
    foreach($data_user as $item){
        $data_records = $records->filterRecordsById($item['id']);

        foreach($data_records as $item_records){
            ?>
            <tbody>
                <tr>
                    <td><?= $item['id_access'];?></td>
                    <td><?= $item['name'];?></td>
                    <td><?= $item_records['entry_date'];?></td>
                    <td><?= $item_records['entry_hour'];?></td>
                    <td><?= $item_records['exit_date'];?></td>
                    <td><?= $item_records['exit_hour'];?></td>
                </tr>
            </tbody>
            <?php
        }
    }
    ?>
        </table>
    <?php
}

//filtrar acessos pelo id do usuário e pela data
else if(!empty($date) and (count($data_user)==14)){
    $data_records = $records->filterRecordsByIdAndDate($data_user['id'], $date);
    if($data_records){
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de entrada</th>
                    <th>Hora de entrada</th>
                    <th>Data de saída</th>
                    <th>Hora de saída</th>
                </tr>
            </thead>
        <?php
        foreach($data_records as $item_records){
            ?>
            <tbody>
                <tr>
                    <td><?= $data_user['id_access'];?></td>
                    <td><?= $data_user['name'];?></td>
                    <td><?= $item_records['entry_date'];?></td>
                    <td><?= $item_records['entry_hour'];?></td>
                    <td><?= $item_records['exit_date'];?></td>
                    <td><?= $item_records['exit_hour'];?></td>
                </tr>
            </tbody>
            <?php
        }
    }else{
        echo 'nenhum ressultado!';
    }
    ?>
        </table>
    <?php
}

//filtrar acessos pelo nome do usuário e pela data
else if(!empty($date) and $data_user){
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de entrada</th>
                <th>Hora de entrada</th>
                <th>Data de saída</th>
                <th>Hora de saída</th>
            </tr>
        </thead>
    <?php
    foreach($data_user as $item){
        $data_records = $records->filterRecordsByIdAndDate($item['id'], $date);
        if($data_records){
            foreach($data_records as $item_records){
                ?>
                <tbody>
                    <tr>
                        <td><?= $item['id_access'];?></td>
                        <td><?= $item['name'];?></td>
                        <td><?= $item_records['entry_date'];?></td>
                        <td><?= $item_records['entry_hour'];?></td>
                        <td><?= $item_records['exit_date'];?></td>
                        <td><?= $item_records['exit_hour'];?></td>
                    </tr>
                </tbody>
                <?php
            }
        }else{
            echo "Nenhum registro encontrado!";
        }
    }
    ?>
        </table>
    <?php
}


else{
    echo 'nenhum ressultado!';
}

