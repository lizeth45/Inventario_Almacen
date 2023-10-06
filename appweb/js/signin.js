$(document).ready(function(){
	// Listen to register button
	$('#register').on('click', function(){
		register();
	});
});


// Function to register a user
function register(){
	var nombre = $('#nombre').val();
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
			var jsonData = JSON.parse(data);
            if (jsonData.success == 1){				
				window.location = 'dashboard.php';
				alert("usuario ingresado con exito");
			}
			
		},
		error: function() {
			// Función a ejecutar si hay un error en la solicitud
			window.location = 'index.php';
			alert("Error al ingresar");
		}
	});
}

