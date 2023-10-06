<?php
    include('../conexion.php');
	$link = conectaDB();

    if(isset($_POST['rgNombre']) && isset($_POST['rgAppat']) && isset($_POST['rgUsuario']) && isset($_POST['rgEmail']) && isset($_POST['rgContra'])){
        $nombre=$_POST['rgNombre'];
        $appat=$_POST['rgAppat'];
        $user=$_POST['rgUsuario'];
        $email=$_POST['rgEmail'];
        //$pass=md5($_POST["<PASSWORD>"]);
        $pass=$_POST['rgContra'];

        $sql = "INSERT INTO usuarios(nom_usr, nombre, ap_pat, email, pass) values('$user', '$nombre', '$appat','$email', '$pass')";
        $result = mysqli_query($link,$sql);

        if($result){
            echo json_encode(array('success' => 1));
            //Inicia la sesion
            session_start();
            $_SESSION['login'] = "true";
            $_SESSION['nomusuario'] = $nombre + " "+  $appat; 
        }

        mysqli_free_result($result);
        mysqli_close($link);
        
    }

?>
