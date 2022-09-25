<?php
require '../parts/header.php';
include '../class/users.class.php';


$user = new Users;

if($_POST['email'] == '' || $_POST['password'] == '' || $_POST['password'] == null){
    header("Location:../admin.php");
    exit;
}

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
    $data = $user->getEmail($email);
    $hash = $data['password'];

    if(password_verify($password, $hash)){
            $_SESSION['id'] = $data['id'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['level'] = $data['level'];
            $_SESSION['user_photo'] = $data['photo'];
            header("Location:verifyLevel.php");
            exit;
    }
    else{
        echo"Email e/ou senha inválido!";
    }
}
?>