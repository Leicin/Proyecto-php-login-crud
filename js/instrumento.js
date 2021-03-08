$(document).ready(function() {

    $("#instrumentos").bind("submit", function() {

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function() {
                $("#instrumentos button[type=submit]");

            },
            success: function(response) {
                if (response.resultado == "") {

                    Swal.fire({

                        icon: 'success',
                        title: '¡Conexión exitosa!',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ingresar'

                    })
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: '',
                        text: 'Datos Enviados Correctamente!',
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "datos_instrumento.php ";
                        }
                    })



                }

                $("#instrumentos button[type=submit]").html("Ok");

            }
        });

        return false;

    });


});