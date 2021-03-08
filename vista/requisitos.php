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

            <form name="F1" id="F1" action="../logic_post/medicion_electri_post.php" method="POST">
                <div class="container-fluid">
                    <div class="row bg-danger">
                        <div class="col-md-12">
                            <h3 id="certificacion">Requisitos metrologicos</h3>

                        </div>
                    </div>
                </div>
                <div class="container">

                    <div class="form-group row shadow p-3 mb-5 bg-white rounded-0" style="border: 1px solid red">



                        <div class="col-md-4 mt-4 ">
                            <label for="capacidad">Capacidad:</label>
                            <input type="text" class="form-control" name="txtCapacidad" id="capacidad" onkeyup="calcularRequi();" autocomplete="off" required autofocus placeholder="Ingrese la capacidad"></input>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="valorD">Valor d:</label>
                            <input type="text" class="form-control" name="txtValorD" id="valorD" autocomplete="off" required autofocus placeholder="Ingrese el valor d"></input>
                        </div>
                        <div class="col-md-4 mt-4">
                            <label for="valorE">Valor e:</label>
                            <input type="text" class="form-control" name="txtValorE" id="valorE" onkeyup="calcularRequi();" autocomplete="off" required autofocus placeholder="Ingrese el valor e"></input>
                        </div>


                        <div class="col-md-4 mt-4">
                            <label for="clase">Clase:</label>
                            <input type="text" readonly class="form-control" name="txtClase" id="clase" autocomplete="off" autofocus placeholder="Ingrese la clase"></input>
                        </div>

                        <div class="col-md-4 mt-4">
                            <label for="capacidad">Capacidad min:</label>
                            <input type="text" readonly class="form-control" name="txtCapacidadMin" onkeyup="multiplicar();" id="capacidadMin" autocomplete="off" required autofocus placeholder="Capacidad minima"></input>
                        </div>



                        <div class="col-md-0 mt-4">

                            <input type="hidden" readonly class="form-control" name="segun_resul" id="segun_resul" onkeyup="multiplicar();" autocomplete="off" required autofocus placeholder="numero segun la clase"></input>
                        </div>

                        <div class="col-md-0 mt-4">
                            <!-- <label for="resultado">Resultado:</label> -->
                            <input type="hidden" readonly class="form-control" name="resultado" id="resultado" autocomplete="off" placeholder="Resultado" required autofocus></input>
                        </div>


                        <select id='opciones' onchange='cambioOpciones();'>

                            <option value=''>Selecciona una opción</option>

                            <option value='1'>Opción 1</option>

                            <option value='2'>Opción 2</option>

                            <option value='3'>Opción 3</option>

                        </select>







                        <div class="col-md-12 mt-3 mr-5">


                            <button class="btn btn-outline-danger btn-lg
                               mt-5" onclick="limpiarFormulario()" value="Limpiar formulario">
                                Limpiar
                            </button>


                            <button type="submit" class="btn btn-outline-danger btn-lg
                               mt-5">
                                Enviar
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






            <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
            <script src="../bootstrap/js/bootstrap.min.js"></script>
            <script src="../popper/popper.min.js"></script>
            <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
            <script src="/SW_Metrologia/js/checkRangeFeacture.js"></script>


    </body>

    </html>

<?php
} else {

    header("Location:index.php");
}

?>