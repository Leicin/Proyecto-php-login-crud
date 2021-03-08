<?php

include '../controlador/UsuarioControlador.php';


$empresa_reg = null;

if (isset($_GET["id"])) {
    $id = ($_GET["id"]);
    $empresa_reg = UsuarioControlador::editarEmpresa($id);
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

                <li class="nav-item active">
                    <a id="a_login" class="nav-link text-white" href="listar_empresa.php">Empresas registradas <span class="sr-only">(current)</span></a>
                </li>

            </ul>

            <p style="margin-bottom: 4px;">
                <a id="" href="cerrar_sesion.php" class="btn btn-outline-light  btn-lg ">Cerrar sesion</a>
            </p>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="container mt-2">
        <div id="login-row" class="row justify-content-center align-items-center ">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12 bg-light text-dark">

                    <form id="registro" action="empresanueva_post.php" method="post">

                        <?php

                        if (is_null($empresa_reg)) { ?>
                            <h1 id="sesion" class="text-center text-dark">Crear nueva empresa</h1>
                        <?php } else { ?>
                            <h1 id="sesion" class="text-center text-dark">Editar empresa [<?php echo $empresa_reg->getNom_emp(); ?>]</h1>
                            <input type="hidden" name="id" value="<?php echo $empresa_reg->getId(); ?>">
                        <?php } ?>


                        <div class="form-group mt-2">
                            <label for="nit" class="text-dark">Nit:</label>
                            <input type="text" name="txtNii" id="nit" required autofocus placeholder="Ingrese el nit de la empresa" class="form-control" value="<?php echo is_null($empresa_reg) ? "" : $empresa_reg->getNii(); ?>">
                        </div>

                        <div class="form-group mt-2">
                            <label for="nombre_emp" class="text-dark">Nombre:</label>
                            <input type="text" name="txtNom_emp" id="nombre_emp" required placeholder="Ingrese el nombre de la empresa" class="form-control" value="<?php echo is_null($empresa_reg) ? "" : $empresa_reg->getNom_emp(); ?>">
                        </div>

                        <div class="form-group mt-2">
                            <label for="dir_emp">Dirección:</label>
                            <input type="text" name="txtDir_emp" id="dir_emp" required autofocus placeholder="Ingrese la direccion de la empresa" class="form-control" value="<?php echo is_null($empresa_reg) ? "" : $empresa_reg->getDir_emp(); ?>">
                        </div>

                        <div class="form-group mt-2">
                            <label for="tel_emp">Telefono:</label>
                            <input type="text" name="txtTel_emp" id="tel_emp" required autofocus placeholder="Ingrese el telefono de la empresa" class="form-control" value="<?php echo is_null($empresa_reg) ? "" : $empresa_reg->getTel_emp(); ?>">
                        </div>

                        <div class="form-group mt-2">
                            <label for="res_emp">responsable:</label>
                            <input type="text" name="txtRes_emp" id="res_emp" required autofocus placeholder="Ingrese el responsable de la empresa" class="form-control" value="<?php echo is_null($empresa_reg) ? "" : $empresa_reg->getRes_emp(); ?>">
                        </div>

                        <div class="form-group mt-2">
                            <label for="ciudad_emp">Ciudad:</label>
                            <input type="text" name="txtCiudad_emp" id="ciudad_emp" required autofocus placeholder="Ingrese la ciudad de la empresa" class="form-control" value="<?php echo is_null($empresa_reg) ? "" : $empresa_reg->getCiudad_emp(); ?>">
                        </div>



                        <div class="form-group text-center mt-4 pb-5 mb-4">
                            <button  type="submit" class="btn btn-danger btn-lg btn-block"> <?php echo is_null($empresa_reg) ?
                                                                                                " Crear empresa " : "Editar" ?></button>
                        </div>




                    </form>




                </div>
            </div>
        </div>
    </div>


    <section id="pie">
        <footer class="bg-dark py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="accordion d-lg-flex w-100" data-parent="accordion">

                                <div class="col-lg-4 mt-5 col-md-12">

                                    <a href="#One" class="h4 text-white nav-link p-0 d-block d-lg-none d-xl-none" data-toggle="collapse" id="accordion"> Redes sociales:</a>
                                    <div class="text-white h4 d-none d-lg-block d-kl-block">
                                        Redes sociales:
                                    </div>
                                    <div class="collapse text-white d-lg-flex" id="One" data-parent="#accordion">
                                        <ul class="list-unstyled  d-flex w-100 justify-content-between">
                                            <li><a href="https://www.facebook.com/" target="blank" class="nav-limk p-0"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/?lang=es" target="blank" class="nav-limk p-0"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="https://www.instagram.com/?hl=es-la" target="blank" class="nav-limk p-0"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li><a href="https://www.youtube.com/?gl=CO&hl=es-419" target="blank" class="nav-limk p-0"><i class="fa fa-youtube-play"></i></a>
                                            </li>
                                            <li><a href="#" class="nav-limk p-0"><i class="fa fa-linked-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4 mt-5 col-md-12">

                                    <a href="#Two" class="h4 text-white nav-link p-0 d-block d-lg-none d-xl-none" data-toggle="collapse" id="accordion">Contactenos:</a>
                                    <div class="text-white h4  d-none d-lg-block d-kl-block">
                                        Contactenos:
                                    </div>
                                    <div class="collapse text-white d-lg-flex" id="Two" data-parent="#accordion">
                                        <div>

                                            <div>Teléfono Fijo: (57) (4) 6046332</div>
                                             <div>info@cardinalscale.com.co</div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 mt-5 col-md-12">

                                    <a href="#Three" class="h4 text-white nav-link p-0 d-block d-lg-none d-xl-none" data-toggle="collapse" id="accordion"> Estamos ubicados:</a>
                                    <div class="text-white h4 d-none d-lg-block d-kl-block">
                                        Estamos ubicados:
                                    </div>
                                    <div class="collapse text-white d-lg-flex" id="Three" data-parent="#accordion">
                                        <div>

                                            <div>Cra.43 A No 61 Sur 152 Bodega 131 </div>
                                            <div>Sabaneta (Ciudadela industrial sabaneta)</div>
                                            <div>Medellín - Antioquia - Colombia</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <div class="container-fluid">
            <div class="row bg-danger">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="p-4 text-white">&copy; Cardinal Weight Colombia 2020</span>
                    </div>
                </div>
            </div>

        </div>




    </div>

    </div>





    <script src="../jquery/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../popper/popper.min.js"></script>

    <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="../js/edit_emp.js"></script>
</body>

</html>