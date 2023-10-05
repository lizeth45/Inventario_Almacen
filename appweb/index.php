<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistema de Pruebas UNACH</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css">

	<!-- Datepicker CSS 
	<link rel="stylesheet" href="vendor/datepicker164/css/bootstrap-datepicker.min.css">
	-->	

    <!-- Custom styles -->
    <link href="css/cmce-styles.css" rel="stylesheet">
  </head>  <body>

  <br><br><br>
  <div class="headtop">  	
        <p class="m-0 text-center text-white" > UNIDAD DE COMPETENCIA: <b> Desarrollo de Aplicaciones Web y Móviles</b></p>  	
  </div>
  <br><br>
	<!-- Default Page Content (login form) -->
    <div class="container">
      <div class="row justify-content-center">
	  <div class="col-sm-12 col-md-5 col-lg-5">
		<div class="card">
		  <div class="card-header">
			Acceso de Usuarios
		  </div>
		  <div class="card-body">
			<form action="">
			<div id="loginMessage"></div>
			  <div class="form-group">
				<label for="loginUsername">Usuario</label>
				<input type="text" class="form-control" id="loginUsername" name="loginUsername">
			  </div>
			  <div class="form-group">
				<label for="loginPassword">Contraseña</label>
				<input type="password" class="form-control" id="loginPassword" name="loginPassword">
			  </div>
			  <button type="button" id="login" class="btn btn-primary">Ingresar</button>
			  <button type="button" id="register" class="btn btn-secondary">Registrar</button>	
			  
			  <!--Segundo form-->
			  <br></br>
			  <div id="loginMessage"></div>
			  <div class="form-group">
				<label for="nombre">Ingresa tu nombre</label>
				<input type="text" class="form-control" id="nombre" name="nombre" required>
			  </div>
			  <div class="form-group">
				<label for="appat">Ingresa tu apellido paterno</label>
				<input type="text" class="form-control" id="appat" name="appat" required>
			  </div>
			  <div class="form-group">
				<label for="usuario">Ingresa tu nombre de usuario</label>
				<input type="text" class="form-control" id="usuario" name="usuario" required>
			  </div>
			  <div class="form-group">
				<label for="email">Ingresa tu correo</label>
				<input type="email" class="form-control" id="email" name="email" required>
			  </div>
			  <div class="form-group">
				<label for="contrasena">Ingresa una contraseña</label>
				<input type="password" class="form-control" id="contrasena" name="contrasena" required>
			  </div>

			</form>
		  </div>
		</div>
		</div>
      </div>
    </div>
	<br><br>
    <!-- Footer -->
    <footer class="footer bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white" ><b> Dr. Christian Mauricio Castillo Estrada </b></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Chosen files for select boxes -->	
	<!-- Datepicker JS -->		
	<!-- Bootbox JS -->
		
	<!-- Custom scripts
	<script src="vendor/chosen/chosen.jquery.min.js"></script>
	<link rel="stylesheet" href="vendor/chosen/chosen.css" />
	<script src="vendor/datepicker164/js/bootstrap-datepicker.min.js"></script>
	<script src="vendor/bootbox/bootbox.min.js"></script>
	<script src="js/scripts.js"></script>
	-->	
	<script src="js/login.js"></script>  </body>
</html>
