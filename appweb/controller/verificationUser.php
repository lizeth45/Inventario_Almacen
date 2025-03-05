<?php
	include('../conexion.php');
	$link = conectaDB();

	if (isset($_POST['usuario'])) {
        $usuario = $_POST['usuario'];
    
        // Verificar si el nombre de usuario ya existe en la base de datos
        $sql_check = "SELECT COUNT(*) FROM usuarios WHERE nom_usr = '$usuario'";
        $result_check = mysqli_query($link, $sql_check);
        $row = mysqli_fetch_row($result_check);
        $count = $row[0];
    
        if ($count > 0) {
            // El nombre de usuario ya está en uso, mostrar un mensaje de no disponibilidad
            // echo '<span style="color: red;"> *No disponible</span>';
            echo json_encode(array('success' => 0));
        } else {
            // El nombre de usuario está disponible, mostrar un mensaje de disponibilidad
            // echo '<span style="color: green;"> Disponible</span>';
            echo json_encode(array('success' => 1));
        }
    }

?>
