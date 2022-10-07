<?php
require 'parts/header.php';
date_default_timezone_set('America/Sao_Paulo');
require 'class/Users.php';
require 'class/Records.php';
$users = new Users;
$records = new Records;
$infoUsers = $users->getAll();
$date = date('Y/m/d');
$hour = date("H:i:s");
$access = false;

//Recebe os dados do input
if(isset($_GET['access']) && !empty($_GET['access'])){
    $id_access = addslashes($_GET['access']);
}

//verifica se tem essa credencial no banco de dados
foreach($infoUsers as $item){
    if($id_access == $item["id_access"]){
        $access = true;
        $id_user = $item["id"];
        $photo = $item['photo']; 
    }
}
if($access != true){
    echo "<div class='vredential-not-found'>Credencial não cadastrada!</div>";
    header("Refresh: 5;url=http://192.168.1.130/");
}

//retorna os dados do ultimo acesso
$lastAcess = $records->lastAcess($id_user);

//verifica se o usuário fez algum acesso, se retornar false registra uma entrada
if(!$lastAcess){
    $records->addEntry($id_user, $date, $hour);
    ?>
    <div class='entry-success'>
        <img src="assets/img/user<?=$photo;?>">
        <h2>Entrada autorizada</h2>
    </div>
    <?php
    header("Refresh: 5;url=http://192.168.1.130/");
}

//registra a saída.
if($lastAcess > 0 && $lastAcess['exit_date'] == null){
    $records->addExit($lastAcess['id'], $date, $hour);
    ?>
    <div class='entry-success'>
        <img src="assets/img/user<?=$photo;?>">
        <h2>Saída autorizada</h2>
    </div>
    <?php
    header("Refresh: 5;url=http://192.168.1.130/");
}else{
    $records->addEntry($id_user, $date, $hour);
    ?>
    <div class='entry-success'>
        <img src="assets/img/user<?=$photo;?>">
        <h2>Entrada autorizada</h2>
    </div>
    <?php
    header("Refresh: 5;url=http://192.168.1.130/");
}

