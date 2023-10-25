<?php
require 'dbcon.php';

if(isset($_POST['delete']))
{
    $registro_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM historialficha WHERE id='$registro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "ficha eliminada exitosamente";
        header("Location: historialficha.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al eliminar la ficha, contácte a soporte";
        header("Location: historialficha.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $peso = mysqli_real_escape_string($con, $_POST['peso']);
    $altura = mysqli_real_escape_string($con, $_POST['altura']);
    $porcentajegrasa = mysqli_real_escape_string($con, $_POST['porcentajegrasa']);
    $masamuscular = mysqli_real_escape_string($con, $_POST['masamuscular']);
    $medicioncintura = mysqli_real_escape_string($con, $_POST['medicioncintura']);

    // Encriptar la nueva contraseña
   // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE `historialficha` SET `username` = '$username', `peso` = '$peso', `altura` = '$altura' , `porcentajegrasa` = '$porcentajegrasa', `masamuscular` = '$masamuscular', `medicioncintura` = '$medicioncintura'  = WHERE `historialficha`.`id` = '$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "ficha editada exitosamente";
        header("Location: historialficha.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al editar el usuario, contácte a soporte";
        header("Location: historialficha.php");
        exit(0);
    }
}



if(isset($_POST['save']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $peso = mysqli_real_escape_string($con, $_POST['peso']);
    $altura = mysqli_real_escape_string($con, $_POST['altura']);
    $porcentajegrasa = mysqli_real_escape_string($con, $_POST['porcentajegrasa']);
    $masamuscular = mysqli_real_escape_string($con, $_POST['masamuscular']);
    $medicioncintura = mysqli_real_escape_string($con, $_POST['medicioncintura']);
    // Encriptar la contraseña
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO `historialficha` SET `username` = '$username', `peso` = '$peso', `altura` = '$altura' , `porcentajegrasa` = '$porcentajegrasa', `masamuscular` = '$masamuscular', `medicioncintura` = '$medicioncintura'  = WHERE `historialficha`.`id` = '$id'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Ficha creada exitosamente";
        header("Location: historialficha.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al crear la ficha, contácte a soporte";
        header("Location: historialficha.php");
        exit(0);
    }
}


?>