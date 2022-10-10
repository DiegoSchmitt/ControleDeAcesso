<?php
session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    if($_SESSION['level'] == 1){
        header('Location:../master.php');
        exit;
    }
    if($_SESSION['level'] == 2){
        header('Location:../simple.php');
        exit;
    }
    if($_SESSION['level'] == 0){
        header('Location:../admin.php');
        exit;
    }
}
else{
    header('Location:../admin.php');
    exit;
}