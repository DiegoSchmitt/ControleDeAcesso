<?php
    require "../parts/header.php";
    require '../autoload.php';
    require 'config/verifySession.php';
    $user = new Users;
    $user->delUser($_GET['id']);
?>