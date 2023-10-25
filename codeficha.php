<?php
require 'dbcon.php';

if(isset($_POST['delete']))
{
    $registro_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM ficha WHERE id='$registro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "ficha eliminada exitosamente";
        header("Location: ficha.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al eliminar la ficha, contácte a soporte";
        header("Location: ficha.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidopaterno = mysqli_real_escape_string($con, $_POST['apellidopaterno']);
    $apellidomaterno = mysqli_real_escape_string($con, $_POST['apellidomaterno']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $fotoperfil = mysqli_real_escape_string($con, $_POST['fotoperfil']);
    $fechanacimiento = mysqli_real_escape_string($con, $_POST['fechanacimiento']);
    $peso = mysqli_real_escape_string($con, $_POST['peso']);
    $altura = mysqli_real_escape_string($con, $_POST['altura']);
    $porcentajegrasa = mysqli_real_escape_string($con, $_POST['porcentajegrasa']);
    $masamuscular = mysqli_real_escape_string($con, $_POST['masamuscular']);
    $medicioncintura = mysqli_real_escape_string($con, $_POST['medicioncintura']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $rol = mysqli_real_escape_string($con, $_POST['rol']);

    // Encriptar la nueva contraseña
   // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   $query = "UPDATE `ficha` SET `username` = '$username', `apellidopaterno` = '$apellidopaterno',`apellidomaterno` = '$apellidomaterno',`telefono` = '$telefono',`email` = '$email',`fotoperfil` = '$fotoperfil',`fechanacimiento` = '$fechanacimiento',`peso` = '$peso', `altura` = '$altura' , `porcentajegrasa` = '$porcentajegrasa', `masamuscular` = '$masamuscular', `medicioncintura` = '$medicioncintura'  = WHERE `ficha`.`id` = '$id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Usuario editado exitosamente";
        header("Location: ficha.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al editar el usuario, contácte a soporte";
        header("Location: ficha.php");
        exit(0);
    }
}



if(isset($_POST['save']))
{
    
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidopaterno = mysqli_real_escape_string($con, $_POST['apellidopaterno']);
    $apellidomaterno = mysqli_real_escape_string($con, $_POST['apellidomaterno']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $fotoperfil = mysqli_real_escape_string($con, $_POST['fotoperfil']);
    $fechanacimiento = mysqli_real_escape_string($con, $_POST['fechanacimiento']);
    $peso = mysqli_real_escape_string($con, $_POST['peso']);
    $altura = mysqli_real_escape_string($con, $_POST['altura']);
    $porcentajegrasa = mysqli_real_escape_string($con, $_POST['porcentajegrasa']);
    $masamuscular = mysqli_real_escape_string($con, $_POST['masamuscular']);
    $medicioncintura = mysqli_real_escape_string($con, $_POST['medicioncintura']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $rol = mysqli_real_escape_string($con, $_POST['rol']);

    // Encriptar la contraseña
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    //$query = "INSERT INTO ficha SET username='$username', password='$hashed_password', rol='$rol'";
    $query = "INSERT INTO `ficha` SET `username` = '$username', `nombre` = '$nombre',`apellidopaterno` = '$apellidopaterno',`apellidomaterno` = '$apellidomaterno',`telefono` = '$telefono',`email` = '$email',`fotoperfil` = '$fotoperfil',`fechanacimiento` = '$fechanacimiento',`peso` = '$peso', `altura` = '$altura' , `porcentajegrasa` = '$porcentajegrasa', `masamuscular` = '$masamuscular', `medicioncintura` = '$medicioncintura'  = WHERE `historialficha`.`id` = '$id'";


    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "ficha creada exitosamente";
        header("Location: ficha.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Error al crear ficha, contácte a soporte";
        header("Location: ficha.php");
        exit(0);
    }
}


?>