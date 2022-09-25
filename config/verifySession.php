<?php
if (!($_SESSION['id']))
{
   header('Location: admin.php');
}
?>