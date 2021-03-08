// $(document).ready(function() {

//     $("#editUser").bind("submit", function() {

//         $.ajax({
//             type: $(this).attr("method"),
//             url: $(this).attr("action"),
//             data: $(this).serialize(),
//             beforeSend: function() {
//                 $("#editUser button[type=submit]");

//             },
//             success: function(response) {
//                 if (response.resultado == "") {

//                     Swal.fire({

//                         icon: 'success',
//                         title: '¡Conexión exitosa!',
//                         confirmButtonColor: '#3085d6',
//                         confirmButtonText: 'Ingresar'

//                     })
//                 } else {
//                     Swal.fire({
//                         icon: 'success',
//                         title: '',
//                         text: 'Datos Enviados Correctamente!',
//                     }).then((result) => {
//                         if (result.value) {
//                             window.location.href = "list_usuarios.php ";
//                         }
//                     })



//                 }

//                 $("#editUser button[type=submit]").html("Ingresar");

//             }
//         });

//         return false;

//     });


// });


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