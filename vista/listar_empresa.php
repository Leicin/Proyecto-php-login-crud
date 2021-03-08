<?php

session_start();

if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:logueo.php");
}

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Metrolegal</title>

        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilos.css">

        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">


    </head>

    <body>

        <?php


        include "../controlador/UsuarioControlador.php";
        $filas = UsuarioControlador::getListemp();



        ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
            <a class="navbar-brand" href="index.php">
                <img src="../imagenes/cardinal.png" width="120" height="40" alt="40">
            </a>

            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a id="a_metrolegal" class="navbar-brand text-white"></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active" style="margin-left: 10px;">
                        <a id="a_hito" class="nav-link text-white" href="admin.php">Panel de control</a>
                    </li>

                </ul>

                <p>
                    <a id="" href="cerrar_sesion.php" class="btn btn-outline-light  btn-lg ">Cerrar sesion</a>
                </p>
            </div>
        </nav>



        <div class="container mt-5">


            <br>
            <br>
            <br>
            <div class="row">

                <div class="col-md-12">

                    <a href="empresanueva.php" class="btn btn-danger mb-3">Crear empresa +</a>

                </div>

                <div class="col-md-12">
                    <table class="table table-hover table-bordered table table-hover  style=" width 100%">
                        <thead class="thead-primary">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">nit </th>
                                <th scope="col">nombre </th>
                                <th scope="col">Dirección </th>
                                <th scope="col">telefono </th>
                                <th scope="col">responsable </th>
                                <th scope="col">ciudad </th>

                                <th colspan="2" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($filas as $empresa_reg) {  ?>
                                <tr>
                                    <td><?php echo $empresa_reg["id"] ?></td>
                                    <td><?php echo $empresa_reg["nii"] ?></td>
                                    <td><?php echo $empresa_reg["nom_emp"] ?></td>
                                    <td><?php echo $empresa_reg["dir_emp"] ?></td>
                                    <td><?php echo $empresa_reg["tel_emp"] ?></td>
                                    <td><?php echo $empresa_reg["res_emp"] ?></td>
                                    <td><?php echo $empresa_reg["ciudad_emp"] ?></td>


                                    <td>

                                        <a  href="empresanueva.php?id=<?php echo $empresa_reg["id"]  ?>" class="btn btn-success btn-sm">Editar</a>
                                    
                                        <a href="javascript:eliminar(confirm('Deseas eliminar esta empresa?'),
                                     'eliminar_empresa.php?id=<?php echo $empresa_reg["id"]  ?>');" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>

                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>

        <script type="text/javascript">
            function eliminar(confirmacion, url) {

                if (confirmacion) {
                    window.location.href = url;
                }

            }
        </script>




        <script src="../jquery/jquery-3.4.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../popper/popper.min.js"></script>

        <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="../js/codigo.js"></script>
    </body>

    </html>


<?php
} else {

    header("Location:index.php");
}

?>