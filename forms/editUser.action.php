<?php
require '../parts/header.php';
include '../class/users.class.php';
require '../config/verifySession.php';
$user = new Users();
if(isset($_POST['email']) && !empty($_POST['email'])){
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $id_access = addslashes($_POST['id_access']);
    $id = addslashes($_POST['id']);

        if(isset($_FILES['photo']) && !empty($_FILES['photo'])){
            $photo = $_FILES['photo'];
            if($photo['error']){
                $filename = 'defaul.png';
                $user->editUser($id, $name, $email, $id_access, $filename, $password=null, $level=0);
                if($_SESSION['level'] == 1){
                    header("Location:../master.php");
                    exit;
                }else{
                    header("Location:../simple.php");
                }
            }

            if($photo['size'] < 20097152){
                $extension = strtolower(pathinfo($photo['name'], PATHINFO_EXTENSION));
            }
            else{
                echo"Arquivo muito grande! Tamanho máximo permitido 2MB";
                exit;
            }

            if($extension != 'jpg' && $extension != 'jpeg' && $extension !='png'){
                echo"Arquivo não permitido! Extenssões permitidas PNG ou JPEG!";
                exit;
            }else if($extension == 'jpg' || $extension == 'jpeg'){
                $new_height = 200;
                $temporary_image = imagecreatefromjpeg($_FILES['photo']['tmp_name']);
                $original_width = imagesx($temporary_image);
                $original_height = imagesy($temporary_image);
                $new_width = ($original_width * $new_height)/$original_height;
                $resized_image = imagecreatetruecolor($new_width, $new_height);
                imagecopyresampled($resized_image, $temporary_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);
                $filename = md5(time().rand(0,99)).'.jpeg';
                imagejpeg($resized_image, '..\assets\img\user'.$filename);
            }else if($extension =='png'){
                $new_height = 200;
                $temporary_image = imagecreatefrompng($_FILES['photo']['tmp_name']);
                $original_width = imagesx($temporary_image);
                $original_height = imagesy($temporary_image);
                $new_width = ($original_width * $new_height)/$original_height;
                $resized_image = imagecreatetruecolor($new_width, $new_height);
                imagecopyresampled($resized_image, $temporary_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);
                $filename = md5(time().rand(0,99)).'.png';
                imagepng($resized_image, '..\assets\img\user'.$filename);
            }
        }
            $user->editUser($id, $name, $email, $id_access, $filename, $password=null, $level=0);
            if($_SESSION['level'] == 1){
                header("Location:../master.php");
                exit;
            }else{
                header("Location:../simple.php");
            }

}