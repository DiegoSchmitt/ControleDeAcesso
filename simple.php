<?php
require 'parts/header.php';
require "config/verifySession.php";
require 'autoload.php';

$user = new Users();
$usersList = $user->getAll();

require "parts/menuAdmin.php";
require "forms/access.php";