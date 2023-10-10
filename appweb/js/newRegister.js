$(document).ready(function(){
	// Listen to register button
	$('#register').on('click', function(){

		if(validarCampos()){
			register();
		}else{
			alert("Ingresa todos los datos para poder registrarte.");
		}

	});
});


// Function to register a user
function register(){
	var nombre = $('#nombreNew').val();
    var appat = $('#appat').val();
    var usuario = $('#usuario').val();
    var email = $('#email').val();
    var contrasena = $('#contrasena').val();

	$.ajax({
		url: 'controller/insertUser.php',
		method: 'POST',
		data: {
			rgNombre: nombre,
			rgAppat: appat,
            rgUsuario: usuario,
            rgEmail: email,
            rgContra: contrasena
		},
		success: function(data){
			console.log(data);
			var jsonData = JSON.parse(data);
            if (jsonData.success == 1){				
				window.location = 'dashboard.php';
				alert("Usuario ingresado con exito");
			}else{
				window.location = 'index.php';
				alert("Ocurrio un error intentalo de nuevo");
			}
			
		}
	});
}



function validarCampos() {
    // Obtener los valores de los campos
    var nombre = document.getElementById("nombreNew").value;
    var appat = document.getElementById("appat").value;
    var usuario = document.getElementById("usuario").value;
    var email = document.getElementById("email").value;
    var contrasena = document.getElementById("contrasena").value;

    // Validar que todos los campos estén llenos
    if (nombre === "" || appat === "" || usuario === "" || email === "" || contrasena === "") {
        return false; // Al menos un campo está vacío
    } else {
        return true; // Todos los campos están llenos
    }
}



// Escuchar el evento "input" en el campo de entrada del nombre de usuario
document.getElementById("usuario").addEventListener("input", function () {
    // Obtener el valor del campo de entrada del nombre de usuario
    var usuario = this.value;

    // Realizar una solicitud AJAX para verificar si el nombre de usuario ya está en uso
    $.ajax({
        url: 'controller/verificationUser.php', // Archivo PHP para verificar el nombre de usuario
        method: 'POST',
        data: {
            usuario: usuario
        },
        success: function (data) {
			
			var correctmsg = '<h6 style="color: white; font-size:10px; font-weight: bolder; margin-top: -20px">Disponible </h6>';
			var incorrectmsg = '<h6 style="color: rgb(170,0,0); font-size:10px; font-weight: bolder; margin-top: -20px" >No disponible </h6>';

			var jsonData2 = JSON.parse(data);
            if (jsonData2.success == 1)
			{			
				$('#msgUseralert').html(correctmsg);
			}else{
				$('#msgUseralert').html(incorrectmsg);
			}
        }
    });
});