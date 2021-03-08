<?php


session_start();
if (($_SESSION["usuario"]) != '') {

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
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">



    </head>

    <body>




        <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top ">

            <a class="navbar-brand" href="index.php">
                <img src="../imagenes/cardinal.png" width="120" height="40" alt="40">
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a id="a_metrolegal" class="navbar-brand text-white"></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">


                    <li class="nav-item active" style="margin-left: -10px;">
                        <a id="a_registro" class="nav-link text-white" href="usuario.php">Panel de control</a>
                    </li>

                </ul>

                <p style="margin-bottom: 4px;">
                    <a id="btn_cerrar" href="cerrar_sesion.php" class="btn btn-outline-light  btn-lg ">Cerrar sesion</a>
                </p>
            </div>
        </nav>

        <br>
        <br>
        <br>





        <div class="container mt-5">

            <form name="F1" action="../logic_post/exactitud_post.php" method="POST">
                <div class="container-fluid">
                    <div class="row bg-danger">
                        <div class="col-md-12">
                            <h3 id="certificacion">Exactitud:</h3>

                        </div>
                    </div>
                </div>
                <div class="container">

                    <div class="form-group row shadow p-3 mb-5 bg-white rounded-0" style="border: 1px solid red">

                        <div class="col-md-4 mt-4">
                            <label for="capi">Carga 1:</label>
                            <input type="text" class="form-control" name="txtCarga_exa1" id="carga1" autocomplete="off" onkeyup="calcula();" required autofocus placeholder="Ingrese la carga 1"></input>
                        </div>

                        <div class="col-md-4  mt-4">
                            <label for="capi">Indicación(I):</label>
                            <input type="text"  class="form-control" name="txtIndi_exa1" id="indi1" autocomplete="off" onkeyup="calcula();"  required autofocus placeholder="Ingrese la carga indicación "></input>
                        </div>

                        <div class="col-md-4 mt-4">
                            <label for="exacti">Error(E):</label>
                            <input type="text" readonly class="form-control" name="txtError_exa1" id="error1"   autocomplete="off"  autofocus placeholder="Ingrese el error "></input>
                        </div>


                        <div class="col-md-4 mt-4">
                            <label for="capi">Carga 2:</label>
                            <input type="text" class="form-control" name="txtCarga_exa2" id="carga2" autocomplete="off" onkeyup="calcula2();"   required autofocus placeholder="Ingrese la carga 2"></input>
                        </div>

                        <div class="col-md-4  mt-4">
                            <label for="capi">Indicación(I):</label>
                            <input type="text" class="form-control" name="txtIndi_exa2" id="indi2" autocomplete="off" onkeyup="calcula2();"  required autofocus placeholder="Ingrese la carga indicación "></input>
                        </div>

                        <div class="col-md-4 mt-4">
                            <label for="exacti">Error(E):</label>
                            <input type="text" readonly class="form-control" name="txtError_exa2" id="error2" autocomplete="off" autofocus placeholder="Ingrese el error "></input>
                        </div>


                        <div class="col-md-4 mt-4">
                            <label for="capi">Carga 3:</label>
                            <input type="text" class="form-control" name="txtCarga_exa3" id="carga3" autocomplete="off" onkeyup="calcula3();"  required autofocus placeholder="Ingrese la carga 3"></input>
                        </div>

                        <div class="col-md-4  mt-4">
                            <label for="capi">Indicación(I):</label>
                            <input type="text" class="form-control" name="txtIndi_exa3" id="indi3" autocomplete="off" onkeyup="calcula3();"  required autofocus placeholder="Ingrese la carga indicación "></input>
                        </div>

                        <div class="col-md-4 mt-4">
                            <label for="exacti">Error(E):</label>
                            <input type="text" readonly class="form-control" name="txtError_exa3" id="error3" autocomplete="off" autofocus placeholder="Ingrese el error "></input>
                        </div>



                        <div class="col-md-4 mt-4">
                            <label for="capi">Carga 4:</label>
                            <input type="text" class="form-control" name="txtCarga_exa4" id="carga4" autocomplete="off"  onkeyup="calcula4();" required autofocus placeholder="Ingrese la carga 4"></input>
                        </div>

                        <div class="col-md-4  mt-4">
                            <label for="capi">Indicación(I):</label>
                            <input type="text" class="form-control" name="txtIndi_exa4" id="indi4" autocomplete="off" onkeyup="calcula4();" required autofocus placeholder="Ingrese la carga indicación "></input>
                        </div>

                        <div class="col-md-4 mt-4">
                            <label for="exacti">Error(E):</label>
                            <input type="text" readonly class="form-control" name="txtError_exa4" id="error4" autocomplete="off" autofocus placeholder="Ingrese el error "></input>
                        </div>



                        <div class="col-md-4 mt-4">
                            <label for="capi">Carga 5:</label>
                            <input type="text" class="form-control" name="txtCarga_exa5" id="carga5" autocomplete="off" onkeyup="calcula5();" required autofocus placeholder="Ingrese la carga 5"></input>
                        </div>

                        <div class="col-md-4  mt-4">
                            <label for="capi">Indicación(I):</label>
                            <input type="text" class="form-control" name="txtIndi_exa5" id="indi5" autocomplete="off" onkeyup="calcula5();" required autofocus placeholder="Ingrese la carga indicación "></input>
                        </div>

                        <div class="col-md-4 mt-4">
                            <label for="exacti">Error(E):</label>
                            <input type="text" readonly class="form-control" name="txtError_exa5" id="error5" autocomplete="off" autofocus placeholder="Ingrese el error "></input>
                        </div>



                        <div class="col-md-4 mt-4">
                            <label for="capi">Carga 4:</label>
                            <input type="text" readonly class="form-control" name="txtCarga_exa6" id="carga6" autocomplete="off" required autofocus placeholder="Ingrese la carga 4"></input>
                        </div>

                        <div class="col-md-4  mt-4">
                            <label for="capi">Indicación(I):</label>
                            <input type="text" readonly class="form-control" name="txtIndi_exa6" id="indi6" autocomplete="off" required autofocus placeholder="Ingrese la carga indicación "></input>
                        </div>

                        <div class="col-md-4 mt-4">
                            <label for="exacti">Error(E):</label>
                            <input type="text" readonly class="form-control" name="txtError_exa6" id="error6" autocomplete="off" autofocus placeholder="Ingrese el error "></input>
                        </div>




                        <div class="col-md-4 mt-4">
                            <label for="capi">Carga 3:</label>
                            <input type="text" readonly class="form-control" name="txtCarga_exa7" id="carga7" autocomplete="off" required autofocus placeholder="Ingrese la carga 3"></input>
                        </div>

                        <div class="col-md-4  mt-4">
                            <label for="capi">Indicación(I):</label>
                            <input type="text" readonly class="form-control" name="txtIndi_exa7" id="indi7" autocomplete="off" required autofocus placeholder="Ingrese la carga indicación "></input>
                        </div>

                        <div class="col-md-4 mt-4">
                            <label for="exacti">Error(E):</label>
                            <input type="text" readonly class="form-control" name="txtError_exa7" id="error7" autocomplete="off" autofocus placeholder="Ingrese el error "></input>
                        </div>



                        <div class="col-md-4 mt-4">
                            <label for="capi">Carga 2:</label>
                            <input type="text" readonly class="form-control" name="txtCarga_exa8" id="carga8" autocomplete="off" required autofocus placeholder="Ingrese la carga 2"></input>
                        </div>

                        <div class="col-md-4  mt-4">
                            <label for="capi">Indicación(I):</label>
                            <input type="text" readonly class="form-control" name="txtIndi_exa8" id="indi8" autocomplete="off" required autofocus placeholder="Ingrese la carga indicación "></input>
                        </div>

                        <div class="col-md-4 mt-4">
                            <label for="exacti">Error(E):</label>
                            <input type="text" readonly class="form-control" name="txtError_exa8" id="error8" autocomplete="off" autofocus placeholder="Ingrese el error "></input>
                        </div>



                        <div class="col-md-4 mt-4">
                            <label for="capi">Carga 1:</label>
                            <input type="text" readonly class="form-control" name="txtCarga_exa9" id="carga9" autocomplete="off" required autofocus placeholder="Ingrese la carga 1"></input>
                        </div>

                        <div class="col-md-4  mt-4">
                            <label for="capi">Indicación(I):</label>
                            <input type="text" readonly class="form-control" name="txtIndi_exa9" id="indi9" autocomplete="off" required autofocus placeholder="Ingrese la carga indicación "></input>
                        </div>

                        <div class="col-md-4 mt-4">
                            <label for="exacti">Error(E):</label>
                            <input type="text" readonly class="form-control" name="txtError_exa9" id="error9"  autocomplete="off" autofocus placeholder="Ingrese el error "></input>
                        </div>







                        <div class="col-md-6 mt-4 mr-5">

                            <button type="submit" class="btn btn-outline-danger btn-lg
                             mt-5">Enviar
                            </button>

                        </div>

                    </div>


                </div>

            </form>


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












        <script src="../jquery/jquery-3.4.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../popper/popper.min.js"></script>
        <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="../js/exactitud.js"></script>

    </body>

    </html>

<?php
} else {

    header("Location:index.php");
}

?>