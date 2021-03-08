$(document).ready(function() {

    $("#certificaciones").bind("submit", function() {

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function() {
                $("#certificaciones button[type=submit]");

            },
            success: function(response) {
                if (response.resultadocerti == "") {

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
                            window.location.href = "organismo_autorizado.php ";
                        }
                    })



                }

                $("#certificaciones button[type=submit]").html("Ok");

            }
        });

        return false;

    });


});