
<?php
	include('../conexion.php');
	$link = conectaDB();

  //  if(isset($_POST['guardar'])==true)
    if(isset($_POST['guardar'])){	

        $desc_producto= $_POST['txtDesc'];
        $precio= $_POST['txtPrecio'];
        $stock= $_POST['txtStock'];
        
        $query = "INSERT INTO productos(desc_producto,precio,stock) VALUES ('$desc_producto',$precio,$stock)";

        $result = mysqli_query($link,$query);

        if($result){
            Header("Location: ../dashboard.php");
        } else {
            echo "<script> alert('Algo salio mal, intentalo de nuevo'); </script>";
        }

        mysqli_free_result($result);
        mysqli_close($link);

    }

?>

