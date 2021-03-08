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

            <form id="inspeccion" name="inspeccion" action="../logic_post/inspe_general_post.php" method="POST">
                <div class="container-fluid">
                    <div class="row bg-danger">
                        <div class="col-md-12">
                            <h3 id="certificacion">Inspección general:</h3>

                        </div>
                    </div>
                </div>
                <div class="container">

                    <div class="form-group row shadow p-3 mb-5 bg-white rounded-0"  style="border: 1px solid red">
                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 60px;">Adaptador/cable:</legend>
                                <label>
                                    <input required type="radio" name="txt_cable" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_cable" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_cable" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_cable" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_cable" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_cable" value="R"> R
                                </label>

                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 115px;">Plato:</legend>
                                <label>
                                    <input required required type="radio" name="txt_plato" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required required class="ml-3 mt-2" type="radio" name="txt_plato" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required required type="radio" class="ml-3" name="txt_plato" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required required class="ml-3" type="radio" name="txt_plato" value=" B"> B
                                </label>

                                <label>
                                    <input required required type="radio" class="ml-3" name="txt_plato" value="D"> D
                                </label>
                                <label>
                                    <input required required class="ml-3" type="radio" name="txt_plato" value="R"> R
                                </label>

                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 100px;">Porta plato:</legend>
                                <label>
                                    <input required type="radio" name="txt_porta" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_porta" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_porta" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_porta" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_porta" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_porta" value="R"> R
                                </label>

                            </fieldset>
                        </div>

                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 100px;">Carcaza:</legend>
                                <label>
                                    <input required type="radio" name="txt_cercaza" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_cercaza" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_cercaza" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_cercaza" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_cercaza" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_cercaza" value="R"> R
                                </label>

                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 115px;">Cabina:</legend>
                                 <label>
                                    <input required type="radio" name="txt_cabina" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_cabina" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_cabina" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_cabina" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_cabina" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_cabina" value="R"> R
                                </label>

                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 60px;">Forro de protección:</legend>
                                <label>
                                    <input required type="radio" name="txt_forro" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_forro" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_forro" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_forro" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_forro" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_forro" value="R"> R
                                </label>

                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 100px;">Teclado:</legend>
                                <label>
                                    <input required type="radio" name="txt_tecla" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_tecla" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_tecla" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_tecla" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_tecla" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_tecla" value="R"> R
                                </label>
                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 120px;">Nivel:</legend>
                                <label>
                                    <input required type="radio" name="txt_nivel" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_nivel" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_nivel" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_nivel" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_nivel" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_nivel" value="R"> R
                                </label>

                            </fieldset>
                        </div>



                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 120px;">Patas:</legend>
                                <label>
                                    <input required type="radio" name="txt_patas" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_patas" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_patas" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_patas" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_patas" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_patas" value="R"> R
                                </label>
                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 65px;">Tarjeta principal:</legend>
                                <label>
                                    <input required type="radio" name="txt_tarje" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_tarje" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_tarje" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_tarje" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_tarje" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_tarje" value="R"> R
                                </label>
                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 120px;">Display:</legend>
                                <label>
                                    <input required type="radio" name="txt_display" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_display" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_display" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_display" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_display" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_display" value="R"> R
                                </label>

                            </fieldset>
                        </div>



                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 105px;">Conectores:</legend>
                                <label>
                                    <input required type="radio" name="txt_conect" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_conect" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_conect" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_conect" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_conect" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_conect" value="R"> R
                                </label>

                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 120px;">Celdas:</legend>
                                <label>
                                    <input required type="radio" name="txt_celdas" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_celdas" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_celdas" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_celdas" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_celdas" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_celdas" value="R"> R
                                </label>
                            </fieldset>
                        </div>



                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 120px;">Guias:</legend>
                                <label>
                                    <input required type="radio" name="txt_guias" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_guias" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_guias" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_guias" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_guias" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_guias" value="R"> R
                                </label>

                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 120px;">Flexón frontal:</legend>
                                <label>
                                    <input required type="radio" name="txt_frontal" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_frontal" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_frontal" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_frontal" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_frontal" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_frontal" value="R"> R
                                </label>


                            </fieldset>
                        </div>



                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 90px;">Flexón cortos:</legend>
                                <label>
                                    <input required type="radio" name="txt_cortos" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_cortos" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_cortos" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_cortos" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_cortos" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_cortos" value="R"> R
                                </label>

                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 90px;">Tornillería:</legend>
                                <label>
                                    <input required type="radio" name="txt_torni" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_torni" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_torni" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_torni" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_torni" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_torni" value="R"> R
                                </label>

                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 90px;">Sistema mecánico:</legend>
                                <label>
                                    <input required type="radio" name="txt_sist" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_sist" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_sist" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_sist" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_sist" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_sist" value="R"> R
                                </label>

                            </fieldset>
                        </div>



                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 90px;">Pesa interna</legend>
                                <label>
                                    <input required type="radio" name="txt_inter" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_inter" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_inter" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_inter" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_inter" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_inter" value="R"> R
                                </label>

                            </fieldset>
                        </div>


                        <div class="col-md-4 mt-4 border border-danger">
                            <fieldset>
                                <legend style="margin-left: 90px;">Det. de humedad </legend>
                                <label>
                                    <input required type="radio" name="txt_humedad" value="N.A"> N.A
                                </label>
                                <label>
                                    <input required class="ml-3 mt-2" type="radio" name="txt_humedad" value="N.V"> N.V
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_humedad" value=" N.P"> N.P
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_humedad" value=" B"> B
                                </label>

                                <label>
                                    <input required type="radio" class="ml-3" name="txt_humedad" value="D"> D
                                </label>
                                <label>
                                    <input required class="ml-3" type="radio" name="txt_humedad" value="R"> R
                                </label>

                            </fieldset>
                        </div>

                        <div class="row">


                            <div class="col-md-12">

                                <p style="font-weight: 700; font-size: 20px; margin-left: 15px; margin-top:30px;">Conversiones: N.A = No aplica | N.V= No visible | N.P= No porta | B= Bueno | D= Deteriorado | R = Reemplazo </p>


                            </div>
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



    </body>








    <script src="../jquery/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../popper/popper.min.js"></script>

    <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="../js/inspeccion.js"></script>
    </body>

    </html>

<?php
} else {

    header("Location:index.php");
}

?>