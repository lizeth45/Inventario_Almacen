$(document).ready(function(){
	
	// Listen to login button
	$('#btnSignIn').on('click', function(){
		login();
	});
});


// Function to login a user
function login(){
	var loginUsername = $('#userName').val();
	var loginPassword = $('#userPass').val();
	
	$.ajax({
		url: 'controller/validar.php',
		method: 'GET',
		data: {
			loginUsername:loginUsername,
			loginPassword:loginPassword,
		},
		success: function(data){
			var msg_alerta1 = '<div class="alert alert-success alert-dismissible fade show" style="width:338px; height:60px; font-size:13px" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
			'Bienvenido</div>';
      
			var msg_alerta2 = '<div class="alert alert-danger alert-dismissible fade show" style="width:338px; height:60px; font-size:13px" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
			'Nombre de usuario y/o contraseña incorrectos</div>';
			
			var jsonData = JSON.parse(data);
            if (jsonData.success == "1")
			{			
				$('#loginMessage').html(msg_alerta1);	
				window.location = 'dashboard.php';
			}else{
				$('#loginMessage').html(msg_alerta2);
			}
		}
		//No esta en uso
		// error: function(xhr, status, error) {
		// 	if (xhr.status === 500) {
		// 		alert("Error en el servidor: " + xhr.responseText); // Muestra el mensaje de error del servidor
		// 	} else {
		// 		alert("Error de solicitud: " + status); // Muestra un mensaje de error genérico
		// 	}
		// 	// Realiza cualquier otra acción necesaria en caso de error
		// 	window.location = 'index.php'; // Por ejemplo, redirige al usuario a la página de inicio
		// }
	});
}

