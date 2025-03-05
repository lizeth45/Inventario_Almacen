<?php
	session_start();
	if (!isset($_SESSION['login']))
		header("location: index.php");	
?>
<html>
<head>
	<title>Sistema de Pruebas UNACH</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css">
	<link href="css/cmce-styles.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!-- Bootstrap core JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar "  style="margin-top:-56px; margin-bottom:-56px; height: 50px; background:#4461F2;" >
	<div class="container-fluid" >
    	<a class="navbar-brand" style="color:white; margin-top:-25px" >
		<b>Nombre de usuario:</b> <?php echo $_SESSION['nomusuario']; ?></a> 
		<a href="cerrar.php" style="margin-top:-10px" ><button class="button" style="background-color: #1E1E1E; color:white; width: 150px; height: 30px;">Cerrar Sesión</button></a>
  </div>
</nav>
<center>
	<br><br><br><br>
		
	<form action="dashboard.php" method="GET" >
	<div class="formpanel" id="f1">
		<b>Buscar producto por precio mayor a:</b> <input type="text" name="pre" size="4" style="width:100px; height:35px; " required>
		<button class="btn btn-info" style="border-radius:10px; width:100px; height:35px;" type="submit" >Buscar</button>
	</div>
	</form>
	

	<button type="button" class="btn " style="background-color:green; color:white; border-radius:10px; width:200px; height:35px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Nuevo Producto
	</button>

	<br><br>
	

	<?php

		include('conexion.php');
		$con = conectaDB();
		if(isset($_GET['pre'])==true)		
			$sql ="select id_producto,desc_producto,precio,stock from productos where precio > ".$_GET['pre'];
		else
			$sql ="select id_producto,desc_producto,precio,stock from productos";
			
		echo "<table class='table' style='width:570;  '>";
		echo "<thead  style='background-color: #1E1E1E; color:white;'>";
		echo "<th>Producto</th>";
		echo "<th>Precio</th>";
		echo "<th>Stock</th>";
		echo "<th></th>";
		echo "</thead>";
		echo "<tbody>";
		
		$resultado = mysqli_query($con,$sql);  
		while($fila = mysqli_fetch_row($resultado)){
		
			echo "<tr>";
				echo "<td>".$fila[1]."</td>";
				echo "<td>".$fila[2]."</td>";
				echo "<td>".$fila[3]."</td>";
				echo "<td><a href='controller/eliminarProducto.php?idp=".$fila[0]."'> <img src='iconoeliminar.png' width='20' heigth='20'></a></td>";
			echo "</tr>";
		
		}
		
		echo "</tbody> </table>";
	?>
	<br><br>
		<!-- Modal Ventada de Nuevo Producto -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Registrar nuevo producto</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<form action="controller/insertarProducto.php" method="POST">
			<div class="modal-body">
				<!--Inputs para los datos del producto-->
				Descripcion del producto: <input class="form-control" type="text" name="txtDesc" size="17" required>

				Precio del producto: <input class="form-control" type="number" name="txtPrecio" size="17" required>
				
				Stock: <input class="form-control" type="number" name="txtStock" size="17" required>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col">
					<button type="button" class="btn btn-danger" style="width:150px; height:35px;" data-bs-dismiss="modal">Cerrar</button>
					</div>
					<div class="col">
					<button type="submit" class="btn btn-success" style="width:150px; height:35px;" name="guardar">Guardar</button>
					</div>
				</div>
			</div>

			</form>

		</div>
	</div>
	</div>

</center>

    <!-- Footer -->
    <footer class="footer" style="background:#1E1E1E;">
      <div class="container">
        <p class="m-0 text-center text-white" >UC: Desarrollo de aplicaciones web y móviles   |  Examen práctico 1 </p>
      </div>
    </footer>

</body>
</html>