<?php
require 'parts/header.php';
require "config/verifySession.php";
include 'class/users.class.php';

$user = new Users();
$usersList = $user->getAll();

require "parts/menuMaster.php";
require "forms/access.php";
