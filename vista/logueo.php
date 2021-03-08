<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metrolegal</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/logueo.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">


</head>

<body>

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


    <div class="container-fluid mt-5 p-0">



        <div class="row">
            <div class="col-md-4 button-container">
                <div class="contenedor">
                    <img src="../imagenes/banner1.png" class="img-fluid mb-0 " style="height: 700px; width:100%; margin-top: 17px; position: relative;" alt="Responsive image">
                    <a href="../vista/logueo.php" class="btn">Loguearse</a>
                    <a href="../vista/registro.php" class="btn1">Registrarse</a>
                </div>
            </div>

            <div class="col-md-7">
                <div class="encabezado container-fluid mt-5">
                    <div class="mt-5">
                        <img src="../imagenes/logo.png" class="mx-auto d-block  ml-5 float-center" style="width: 110px; height: 100px; margin-top:80px; display:inline-block;"><br />
                    </div>

                    <div class="">
                        <img src="../imagenes/titulo.png" class="mx-auto d-block  ml-5 float-center" style="width: 260px; margin-top: -35px; height: 80px; display:inline-block;"><br />
                    </div>
                </div>


                <div class="container" style="margin-top: 20px;  background-color: rgb(250, 248, 242);">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6">
                            <div id="login-box" class="col-md-12 bg-light text-dark">

                                <form id="loginForm" action="validarCode.php" method="POST">


                                    <div class="form-group mt-3 ml-5">
                                        <span class="fa fa-user-o form-control-icon"></span>
                                        <input type="text" name="txtNickname" class="form-control" placeholder="Usuario" required>
                                    </div>

                                    <div class="form-group mt-3 ml-5">
                                        <span class="fa fa-unlock-alt form-control-icon"></span>
                                        <input type="password" name="txtContraseña" class="form-control" placeholder="Contraseña" required>
                                    </div>

                                    <div class="form-group text-center mt-4 ml-5">
                                        <input type="submit" name="submit" class="env btn-lg btn-block" value="Comenzar">

                                    </div>

                                    <div class="row-fluid content">

                                        <div>
                                            <hr align="center" class="mt-5 ml-5" noshade="noshade" size="2" width="34%" />

                                        </div>



                                        <div class="row justify-content-end">
                                            <hr align="center" style="margin-top: -17px;" class=" mr-2" noshade="noshade" size="2" width="34%" />
                                        </div>

                                        <div class="row justify-content-center">
                                            <i class="fa fa-circle-thin ml-5  fa-lg" style="margin-top: -23px;" aria-hidden="true"></i>
                                        </div>

                                    </div>

                                    <!-- <div  class="d-grid gap-2  ml-4 mt-4 d-md-block text-center col-lg-12 col-xl-12 col-md-12">

                                       

                                    </div> -->
                                    <div class="d-grid gap-2 ml-5 mt-2 d-md-block text-center">
                                        <a href="#" class="btn btn-outline-info mr-3" type="button">Bitrix</a>
                                        <a href="#" class="btn btn-outline-danger ml-5" type="button">Sinergy</a>

                                    </div>




                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>





    </div>





    <section id="pie">
        <footer class="bg-dark py-5" style="position: static;" id="pie_pagin">
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