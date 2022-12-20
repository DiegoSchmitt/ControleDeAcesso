<?php
    session_start();
    $_SESSION = array();
    $_SESSION['error'] = false;
    header('Location: admin.php');
    exit;
?>