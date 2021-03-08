$(document).ready(function() {

    $("#veri_iinicial").bind("submit", function() {

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function() {
                $("#veri_iinicial button[type=submit]");

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
                            window.location.href = "inspeccion_general.php ";
                        }
                    })



                }

                $("#veri_iinicial button[type=submit]").html("Ingresar");

            }
        });

        return false;

    });


});