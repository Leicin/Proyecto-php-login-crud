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
                <img src="../imagenes/cardinal.png" width="120" height="45" alt="40">
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a id="a_metrolegal" class="navbar-brand text-white"></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">


                    <li class="nav-item active" style="margin-left: 10px;">
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

            <form id="actividades" name="actividades" action="../logic_post/activi_realizadas_post.php" method="POST">
                <div class="container-fluid">
                    <div class="row bg-danger">
                        <div class="col-md-12">
                            <h3 id="certificacion">Actividades realizadas</h3>

                        </div>
                    </div>
                </div>
                <div class="container">

                    <div class="form-group row shadow p-3 mb-5 bg-white rounded-0" style="border: 1px solid red">
                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend>Verificacion inicial:</legend>
                                <label>
                                    <input type="radio" name="verisi" value="si"> Si
                                </label>
                                <label>
                                    <input class="ml-3" type="radio" name="verisi" value="no"> No
                                </label>

                            </fieldset>
                        </div>

                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend>Inspecci??n general:</legend>
                                <label>
                                    <input type="radio" name="insp" value="si"> Si
                                </label>
                                <label>
                                    <input class="ml-3" type="radio" name="insp" value="no"> No
                                </label>
                            </fieldset>
                        </div>



                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend>Revision general:</legend>
                                <label>
                                    <input type="radio" name="revis" value="si"> Si
                                </label>
                                <label>
                                    <input class="ml-3" type="radio" name="revis" value="no"> No
                                </label>
                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend>Ajuste excentricidad de carga:</legend>
                                <label>
                                    <input type="radio" name="ajus" value="si"> Si
                                </label>
                                <label>
                                    <input class="ml-3" type="radio" name="ajus" value="no"> No
                                </label>
                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend>Programaci??n indicador:</legend>
                                <label>
                                    <input type="radio" name="prog" value="si"> Si
                                </label>
                                <label>
                                    <input class="ml-3" type="radio" name="prog" value="no"> No
                                </label>
                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend>Ajuste de punto cero:</legend>
                                <label>
                                    <input type="radio" name="punto" value="si"> Si
                                </label>
                                <label>
                                    <input class="ml-3" type="radio" name="punto" value="no"> No
                                </label>
                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend>Ajuste de peso:</legend>
                                <label>
                                    <input type="radio" name="peso" value="si"> Si
                                </label>
                                <label>
                                    <input class="ml-3" type="radio" name="peso" value="no"> No
                                </label>
                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend>Elaboraci??n de protocolo:</legend>
                                <label>
                                    <input type="radio" name="elabo" value="si"> Si
                                </label>
                                <label>
                                    <input class="ml-3" type="radio" name="elabo" value="no"> No
                                </label>
                            </fieldset>
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

                                            <div>Tel??fono Fijo: (57) (4) 6046332</div>
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
                                            <div>Medell??n - Antioquia - Colombia</div>
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
        <script src="../js/acti_reali.js"></script>
    </body>

    </html>

<?php
} else {

    header("Location:index.php");
}

?>