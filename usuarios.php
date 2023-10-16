<?php
session_start();
require 'dbcon.php';

// Verificar si existe una sesión activa y los valores de usuario y contraseña están establecidos
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Consultar la base de datos para verificar si los valores coinciden con algún registro en la tabla de usuarios
    $query = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    // Si se encuentra un registro coincidente, el usuario está autorizado
    if (mysqli_num_rows($result) > 0) {
        // El usuario está autorizado, se puede acceder al contenido
    } else {
        // Redirigir al usuario a una página de inicio de sesión
        header('Location: login.php');
        exit(); // Finalizar el script después de la redirección
    }
} else {
    // Redirigir al usuario a una página de inicio de sesión si no hay una sesión activa
    header('Location: login.php');
    exit(); // Finalizar el script después de la redirección
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios | METAMORFIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico" />
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="sb-nav-fixed">
<?php include 'sidenav.php'; ?>
<div id="layoutSidenav">
<div id="layoutSidenav_content">
<div class="container-fluid">
<div class="row mb-5 mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>USUARIOS
                <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Nuevo usuario
                </button>
                    <a style="margin:0px 5px;" href="dashboard.php" class="btn btn-dark btn-sm float-end">Inicio</a>
                </h4>
            </div>
            <div class="card-body" style="overflow-y:scroll;">
            <?php include('message.php'); ?>
                <table class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            
                            <th>Username</th>
                            <th>Rol</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM usuarios ORDER BY id DESC";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $registro)
                                {
                                    ?>
                                    <tr>
                                      
                                        <td><?= $registro['username']; ?></td>
                                        <td>
                                        <?php 
                                        if ( $registro['rol'] === '1') {
                                            echo"Administrador";
                                          } else if ($registro['rol'] === '2') {
                                            echo"Control escolar";
                                          } else {
                                            echo"Error, asigne un rol al usuario";
                                          }
                                          ?>    
                                        </td>
                                        <td>
                                            <a href="editarusuario.php?id=<?= $registro['id']; ?>" class="btn btn-success btn-sm m-1"><i class="bi bi-pencil-square"></i></a>
                                          
                                            <form action="codeusuarios.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete" value="<?=$registro['id'];?>" class="btn btn-danger btn-sm m-1"><i class="bi bi-trash-fill"></i></button>
                                            </form>

                                    </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<td><h5> No se encontro ningun usuario </h5></td><td></td><td></td><td></td>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVO USUARIO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="codeusuarios.php" method="POST">
            <div class="row">
              

                <div class="col-12 col-md-5 mt-3">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario" autocomplete="off" required>
                </div>

                <div class="col-12 col-md-7 mt-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required>
                </div>

                <div class="col-12 mt-3">
                    <select class="form-select" name="rol" id="rol" autocomplete="off" required>
                        <option selected disabled>Seleccione el rol</option>
                        <option value="1">Administrador</option>
                        <option value="2">Control escolar</option>
                    </select>
                </div>
            </div>
                       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="save">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
