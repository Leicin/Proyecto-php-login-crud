$(document).ready(function () {

    $("#loginForm").bind("submit", function () {

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function () {
                $("#loginForm button[type=submit]").html("Enviando...");

            },
            success: function (response) {
                if (response.estado == "true") {

                    Swal.fire({

                        icon: 'success',
                        title: '¡Conexión exitosa!',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ingresar'

                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "admin.php";
                        }
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Usuario y/o contraseña incorrecta!',
                    })
                }

                $("#loginForm button[type=submit]").html("Ingresar");

            },

            error: function () {

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usuario y/o contraseña incorrecta!',
                });

                $("#loginForm button[type=submit]").html("Ingresar");


            }
        });

        return false;

    });


});


function init() {
    var inputFile = document.getElementById('inputFile1');
    inputFile.addEventListener('change', mostrarImagen, false);
  }
  
  function mostrarImagen(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(event) {
      var img = document.getElementById('img1');
      img.src= event.target.result;
    }
    reader.readAsDataURL(file);
  }
  
  window.addEventListener('load', init, false);