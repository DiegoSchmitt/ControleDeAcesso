<?php
    require "../parts/header.php";
    require "../class/users.class.php";
    require 'config/verifySession.php';
    $user = new Users;
    $user->delUser($_GET['id']);
?>