<!DOCTYPE html>
<html lang="en">
<head>
    <title>Almacen CityUnach</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!---->
    <div class="header"> <!--Inicio Header-->
        <div class="container-fluid gx-0"> <!--Inicio Container principal-->

            <!-- nav bar start -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Inicio del Contenedor del NavBar -->
                <div class="container-fluid">
                    <a class="navbar-brand logo" href="#">City<span class="unach">Unach</span></a>

                    <!-- Para el boton del nav bar en pantallas pequeñas -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Elementos de navegacion -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#inicio">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Contacto</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#signIn">Sign in</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="btn-navbar" href="#signUp">Register</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav> <!-- nav bar end -->
            <section id="home">
                <!-- Inicio del Contenedor con titulo e imagen -->
                <div class="container">
                    <div class="content-home"> <!-- INICIO CONTENT HOME-->
                        <div class="row content-home2"> <!-- INICIO-->
                            <div class="col-lg-8 col-md-4"> <!-- Inicio Columna titulo-->

                                <div class="box-container"> <!-- Inicio Contenedor texto + parrafo -->
                                    <h1 class="home-heading"> <span class="home-span">Bienvenido</span> al Almacen <span class="home-span">CityUnach</span></h1>
                                    <br>
                                    <div class="row"> <!--Inicio fila-->
                                        <div class="col-lg-11 col-md-5"> <!--Inicio columna-->
                                            <p class="home-para">
                                                Diseño e implementación de la lógica de programación <span class="para-span">(BackEnd)</span>
                                                para optimizar el correcto funcionamiento de una aplicación web; la cual permite gestionar <span class="para-span">gestionar un inventario básico</span>
                                                de productos del Almacen CityUnach.
                                            </p>
                                        </div> <!--Final columna-->
                                    </div> <!--Final fila-->

                                    <div class="btn-home"> <!-- Inicio boton -->
                                        <a href="#signIn" class="btn-empezar">Empezar</a>
                                    </div> <!-- Final boton-->
                                </div> <!-- Final Contenedor texto + parrafo -->
                            </div> <!-- Final Columna titulo-->


                            <div class="col-lg-4 col-md-8"> <!-- Inicio Columna imagen-->
                                <div class="box-container2"> <!-- Inicio Contenedor imagen -->
                                    <img src="img/1.png" class="img-home" alt="banner img">
                                </div> <!-- Final Contenedor imagen -->
                            </div> <!-- Final Columna imagen-->
                        </div> <!-- FINAL -->
                    </div> <!-- FINAL CONTENT HOME-->
                    <!-- Final del Contenedor con titulo e imagen -->
                </div>
            </section>
        </div> <!--final Container Inicio-->


    </div> <!--Final Header-->


    <!--ABOUT US SECTION STARTS-->
    <section id="about">
        <div class="container"> <!--Inicio del contenedor-->
            <div class="about-us-container"> <!--Inicio about-us-container -->
                <div class="about-us"> <!--Inicio about-us-class -->
                    <div class="row"> <!--Inicio fila -->
                        <div class="col-lg-8 col-md-6"> <!--Inicio col -->
                            <div class="content-about"> <!--inicio content-about -->

                                <h1 class="heading-about">Conócenos</h1>
                                <div class="content-about-para">
                                    <p class="para-about"> Estudiantes de la Lic. en Ingeniería en Desarollo de Tecnologías y Software,
                                        con una gran pasión compartida por la tecnología y una innata dedicación a la resolución de problemas de manera innovadora.
                                    </p>
                                    <div class="parafros">
                                        <h5 class="para-about-text"> Universidad Autonoma de Chiapas</h5>
                                        <p class="about-nombres"> <span class="puesto">Backend: </span>Lizeth Guadalupe Rodríguez Rodríguez</p>
                                        <p class="about-nombres"> <span class="puesto">Frontend: </span>Irma Michelle Ayala Vázquez</p>
                                        <a href="https://github.com/lizeth45/Inventario_Almacen" class="link-repo">Repostorio</a>
                                    </div>
                                </div>
                            </div> <!--final content-about -->
                        </div> <!--final col -->
                        <div class="col-lg-4 col-md-6"> <!--Inicio col -->
                            <img src="img/4.png" class="img-about" alt="about img">
                        </div> <!--Final col -->
                    </div> <!--final fila -->
                </div> <!--Inicio about-us-class -->
            </div> <!-- Final about-us-container -->
        </div> <!--Final del contenedor-->
    </section>

    <div class="container">
        <section id="signIn">
            <section class="ingresaDatos">
                <div class="datos">
                    <div class="izq">
                        <div>
                            <p id="heading-user"> Inicia sesión ingresando tus datos </p>
                            <img id="img-signIn" src="img/2.png" alt="">
                        </div>
                    </div>

                    <div class="der">
                        <div class="formulario">
                            <br><br>
                            <h5 class="tituloDatos"> Datos necesarios: </h5> <br>
                            <div id="loginMessage"></div>
                            <input type="text" id="userName" name="userName" placeholder="Nombre de usuario">
                            <input type="password" id="userPass" name="userPass" placeholder="Contraseña">
                            <button type="button" id="btnSignIn"> Iniciar sesion</button>
                            <p id="parrafoDatos">Si no tienes una cuenta, <a href="#signUp" id="abrirModal">¡regístrate aquí!</a></p>
                            </form>
                        </div>
                    </div>
            </section>
        </section>
    </div>

    <div class="container">
        <section id="signUp">
            <section class="ingresaDatosRegistro">
                <div class="datosRegistro">
                    <div class="izqRegistro">
                        <div>
                            <p id="heading-user2"> ¡Hola, amigo! </p>
                            <div class="parrafo">
                                <p class="parrafo">Para trabajar con nosotros, por favor llena el siguiente formulario</p>
                            </div>
                            <p id="parrafoDatos2">Si ya tienes una cuenta, <a href="#signIn" id="abrirModal">¡inicia sesión aquí!</a></p>

                        </div>
                    </div>

                    <div class="derRegistro">
                        <div class="formulario">
                            <br><br>
                            <h5 class="tituloDatos2"> Ingresa correctamente tus datos: </h5> <br>
                            <input type="text" id="nombreNew" name="nombreNew" placeholder="Primer nombre" maxlength="20" required>
                            <input type="text" id="appat" name="appat" placeholder="Apellido paterno" maxlength="30" required>
                            <input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" maxlength="10" onkeyup="sin_espacio(this);" required>
                            <div id="msgUseralert"></div>

                            <input type="email" id="email" name="email" placeholder="Correo electronico" required>
                            <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                            <button type="button" id="register"> Crear cuenta</button>
                            </form>
                        </div>
                    </div>
            </section>
        </section>
    </div>


    <script src="js/login.js"></script>  
	<script src="js/newRegister.js"></script>  
    <script>
		function sin_espacio(e){
			e.value = e.value.replace(/ /g,'');
		}
	</script> 
</body>

</html>