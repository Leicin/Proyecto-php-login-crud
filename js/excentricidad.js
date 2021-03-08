$(document).ready(function() {

    $("#excentricidad").bind("submit", function() {

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function() {
                $("#excentricidad button[type=submit]");

            },
            success: function(response) {
                if (response.resultadoexce == "") {

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
                            window.location.href = "hito.php ";
                        }
                    })



                }

                $("#excentricidad button[type=submit]").html("Ingresar");

            }
        });

        return false;

    });


});





function restar1() {

    var a = Number(document.getElementById('carga').value);
    var b = Number(document.getElementById('indi1').value);
    var c = a - b;
    document.getElementById('error').value = c;


    var d = Number(document.getElementById('carga').value);
    var e = Number(document.getElementById('indi2').value);
    var f = d - e;
    document.getElementById('error2').value = f;

    var g = Number(document.getElementById('carga').value);
    var h = Number(document.getElementById('indi3').value);
    var i = g - h;
    document.getElementById('error3').value = i;



    var j = Number(document.getElementById('carga').value);
    var k = Number(document.getElementById('indi4').value);
    var l = j - k;
    document.getElementById('error4').value = l;


    var m = Number(document.getElementById('carga').value);
    var n = Number(document.getElementById('indi5').value);
    var o = m - n;
    document.getElementById('error5').value = o;
}