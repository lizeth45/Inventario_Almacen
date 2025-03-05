<?php
    include('../conexion.php');
	$link = conectaDB();

    if(isset($_POST['rgNombre']) && isset($_POST['rgAppat']) && isset($_POST['rgUsuario']) && isset($_POST['rgEmail']) && isset($_POST['rgContra'])){
        $nombre=$_POST['rgNombre'];
        $appat=$_POST['rgAppat'];
        $user=$_POST['rgUsuario'];
        $email=$_POST['rgEmail'];
        $pass=$_POST['rgContra'];

        $sql = "INSERT INTO usuarios(nom_usr, nombre, ap_pat, email, pass) values('$user', '$nombre', '$appat','$email', '$pass')";
        $result = mysqli_query($link,$sql);

        if($result){
            echo json_encode(array('success' => 1));
            //Inicia la sesion
            session_start();
            $_SESSION['login'] = "true";
            $_SESSION['nomusuario'] = $nombre . " " . $appat;
            
        }else{
			echo json_encode(array('success' => 0)); //Esto se envia al success del ajax js
			//http_response_code(500); // Código de error 500: Internal Server Error --> al error del ajax (no esta en uso)
		}

        mysqli_close($link);
    }

?>
