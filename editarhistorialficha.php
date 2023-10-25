<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial De Ficha | METAMORFIT</title>
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
            <div class="container mt-5">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Editar Historial de Ficha
                                    <a href="historialficha.php" class="btn btn-danger btn-sm float-end">Regresar</a>
                                </h4>
                            </div>
                            <div class="card-body">

                               
                                
                                        <form action="codehistorialficha.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $registro['id']; ?>">

                                            <div class="row mt-1">
                                            

                                                <div class="col-12 mt-3">
                                                    <input type="text" class="form-control" name="username" id="username" value="<?= $registro['username']; ?>" disabled>
                                                </div>

                                                <div class="col-12 mt-3">
                                                    <input type="number" class="form-control" name="peso" id="peso" value="<?= $registro['peso']; ?>" disabled>
                                                </div>

                                                <div class="col-12 mt-3">
                                                    <input type="text" class="form-control" name="altura" id="altura" value="<?= $registro['altura']; ?>" disabled>
                                                </div>

                                                <div class="col-12 mt-3">
                                                    <input type="text" class="form-control" name="porcentajegrasa" id="porcentajegrasa" value="<?= $registro['porcentajegrasa']; ?>" disabled>
                                                </div>

                                                <div class="col-12 mt-3">
                                                    <input type="text" class="form-control" name="masamuscular" id="masamuscular" value="<?= $registro['masamuscular']; ?>" disabled>
                                                </div>

                                                <div class="col-12 mt-3">
                                                    <input type="text" class="form-control" name="medicioncintura" id="medicioncintura" value="<?= $registro['medicioncintura']; ?>" disabled>
                                                </div>

                                                <div class="col-12 col-md-5 mt-3">
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= $registro['password']; ?>">
                                                </div>

                                                <div class="col-12 col-md-7 mt-3">
                                                <select class="form-select" name="rol" id="rol">
                                                    <option disabled>Seleccione un rol</option>
                                                    <option value="1" <?= ($rol_actual == 1) ? 'selected' : ''; ?>>Administrador</option>
                                                    <option value="2" <?= ($rol_actual == 2) ? 'selected' : ''; ?>>Control escolar</option>
                                                </select>
                                                </div>

                                                <div class="col-12 text-center mt-3">
                                                    <button type="submit" name="update" class="btn btn-primary">
                                                        Actualizar usuario
                                                    </button>
                                                </div>


                                            </div>
                            </div>

                            </form>
                   
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVA FICHA</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="codehistorialficha.php" method="POST">
                        <div class="row">
                        

                            <div class="col-5 mtop">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario" autocomplete="off" required>
                            </div>

                            <div class="col-5 mtop">
                                <input type="number" class="form-control" name="peso" id="peso" placeholder="Peso" autocomplete="off" required>
                            </div>


                            <div class="col-5 mtop">
                                <input type="number" class="form-control" name="altura" id="altura" placeholder="Altura" autocomplete="off" required>
                            </div>

                            <div class="col-5 mtop">
                                <input type="number" class="form-control" name="porcentajegrasa" id="porcentajegrasa" placeholder="porcentaje de grasa" autocomplete="off" required>
                            </div>


                            <div class="col-5 mtop">
                                <input type="number" class="form-control" name="masamuscular" id="masamuscular" placeholder="masa muscular" autocomplete="off" required>
                            </div>

                            <div class="col-5 mtop">
                                <input type="number" class="form-control" name="medicioncintura" id="medicioncintura" placeholder="medicion cintura" autocomplete="off" required>
                            </div>

                            <div class="col-7 mtop">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required>
                            </div>

                            <div class="col-12 mtop">
                                <select class="form-select" name="rol" id="rol" autocomplete="off" required>
                                    <option disabled>Categoría</option>
                                    <option value="1">Bachillerato</option>
                                    <option value="2">Licenciatura escolarizada</option>
                                    <option value="3">Licenciatura ejecutiva</option>
                                    <option value="4">Administrador</option>
                                    <option value="5">Control escolar</option>
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