$(document).ready(function() {

    $("#revision").bind("submit", function() {

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function() {
                $("#revision button[type=submit]");

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
                            window.location.href = "registro_prueba.php ";
                        }
                    })



                }

                $("#revision button[type=submit]").html("Ok");

            }
        });

        return false;

    });


});