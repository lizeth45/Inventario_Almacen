<?php

    include('../conexion.php');
    $link = conectaDB();

    if(isset($_GET['idp']) && is_numeric($_GET['idp'])){	
        $idp = $_GET['idp']; //declaro variable con el valor obtenido

        $sql = "DELETE FROM productos WHERE id_producto = $idp";

        $result = mysqli_query($link,$sql);

        if($result){
            Header("Location: ../dashboard.php");
        } else {
            echo "<script> alert('Algo salio mal, intentalo de nuevo'); </script>";
        }

        mysqli_free_result($result);
        mysqli_close($link);

    }

?>