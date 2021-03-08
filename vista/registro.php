<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metrolegal</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">


</head>

<body>


    <?php


    include "../controlador/UsuarioControlador.php";
    $filassedes = UsuarioControlador::getListsedes();



    ?>

    <div id="login">

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


                </ul>
            </div>
        </nav>



    </div>

    <div class="row">
        <div class="col-md-4 button-container">
            <div class="contenedor">
                <img src="../imagenes/banner1.png" class="img-fluid mb-0 " style="height: 700px; width:100%; margin-top: 65px; position: relative;" alt="Responsive image">
                <a href="../vista/logueo.php" class="btn">Loguearse</a>
                <a href="../vista/registro.php" class="btn1">Registrarse</a>
            </div>
        </div>

        <div class="col-md-7 col-lg-7 col-sm-7 mt-5">

            <div class="encabezado container-fluid mt-5">
                <img src="../imagenes/logo.png" class="rounded mx-auto d-block responsive " style="width: 60px;" alt="Responsive image" />
                <h1 style="margin-top: -60px; font-family: Champagne; font-size: 50px; font-weight: 900;" class="text-center mr-5">Registro</h1>
                <div class="mt-5">
                    <img id="img1" class="rounded-circle mx-auto d-block responsive img-circle  clip-circle ml-5  float-right" style="width: 120px; height: 120px; margin-top:-100px; display:inline-block;"><br />
                </div>
            </div>




            <div class="container mt-1">

                <form class="row g-3" action="registroCode.php" method="POST">
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <span class="fa fa-id-card form-control-icon"></span>
                            <input type="number" name="txtCedula" class="form-control" placeholder="Identificación" required id="inputEmail4">
                        </div>
                    </div>




                    <div class="col-md-6 mt-3">

                        <div class="form-group">
                            <span class="fa fa-id-card form-control-icon"></span>
                            <input type="text" name="txtNombres" class="form-control" required placeholder="Nombres" id="Nombres">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">

                        <div class="form-group">
                            <span class="fa fa-id-card form-control-icon"></span>
                            <input type="text" name="txtApellidos" required class="form-control" placeholder="Apellidos" id="inputEmail4">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">

                        <div class="form-group">
                            <span class="fa fa-wrench form-control-icon"></span>
                            <input type="text" name="txtCargo" required class="form-control" placeholder="Cargo" id="inputEmail4">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <span class="fa fa-phone form-control-icon"></span>
                            <input type="text" name="txtTel_usu" required class="form-control" placeholder="Telefono" required>
                        </div>

                    </div>


                    <div class="col-md-6 mt-3">
                               <select  name="taskOption" id="Tipo_de_usuario" required autofocus placeholder="Tipo_de_usuario" class="form-control">
                               <option>administrador</option>
                               <option>usuario</option>
                            
                               </select>
                    </div>


                    <div class="col-md-6 mt-3">

                        <div class="form-group">
                            <span class="fa fa-user-o form-control-icon"></span>
                            <input type="text" name="txtNickname" required class="form-control" placeholder="Nickname" required>
                        </div>
                    </div>





                    <div class="col-md-6 mt-3">


                        <div class="form-group">
                            <span class="fa fa-unlock-alt form-control-icon"></span>
                            <input type="password" name="txtContraseña" required class="form-control" placeholder="Contraseña" required>
                        </div>
                    </div>


                    <div class="col-md-6  mt-2">

                        <span class="btn btn-block btn-file">
                            Subir imagen<input id="inputFile1" required name="txtFoto" type="file">
                        </span>
                    </div>

                    <div class="col-md-6 mt-3">

                        <div class="form-group">
                            <span class="fa fa-at form-control-icon"></span>
                            <input type="email" name="txtcorreo_electronico" required class="form-control" placeholder="Correo electronico" required>
                        </div>
                    </div>


                    <div class="col-md-6 mt-3">


                        <select class="form-select form-control" required name="txtCodigo_sede" aria-label="Default select example">
                            <!-- <option selected>Sede</option> -->


                            <!-- <?php foreach ($filassedes as $campo) {
                                    ?>
                                <option value=<?php echo $valor["Codigo_sede"]; ?> <?php echo $campo['Nombre']; ?>
                                   
                            <?php
                                    } ?> -->



                            $filassedes = array();





                            <?php foreach ($filassedes as $valor) {  ?>


                                <option value=<?php echo $valor["Codigo_sede"]; ?>><?php echo $valor['Nombre']; ?></option>

                            <?php  } ?> -->





                        </select>
                    </div>





                    <div class="col-md-6 mt-3">
                    </div>

                    <div class="ustify-content-center  d-md-table mx-auto mb-4">
                        <input type="submit" class="reg btn-lg d-flex justify-content-center d-md-table mx-auto mt-3" value="Registrar">

                    </div>


                </form>




            </div>

        </div>

    </div>



    <section id="pie">
        <footer class="bg-dark py-5" id="pie_pagin">
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

                                            <div>Teléfono Fijo: 2211137</div>
                                            <div>Celular: (57) 3145735928</div>
                                            <div>pereitha99@hotmail.com</div>
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

                                            <div>Carrera 2 Nro 55g -31</div>
                                            <div>Caicedo villa-turbay.</div>
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




        <script src="../jquery/jquery-3.4.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../popper/popper.min.js"></script>

        <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="../js/codigo.js"></script>
</body>

</html>